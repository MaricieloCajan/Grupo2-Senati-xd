<?php
	// Iniciar sesion
	session_start();
    if (isset($_SESSION['usuario'])){
		echo '<script>window.location="../vista/panel.php"; </script>';
	}
	// si viene del iniciar.php
	if(isset($_POST['registra'])){
		$entro=false;
		$usuario=$_POST['usuario'];
		$pw1=$_POST['clave'];
        $pw2=$_POST['reclave'];
        $correo=$_POST['correo'];
		$descripcion=$_POST['descripcion'];
        // incluir archivo serv.php
	    require_once('serv.php');
		$registros = "SELECT usuario FROM usuario WHERE usuario ='$usuario' AND correo='$correo'";
		// bucle
		foreach($db->query($registros) as $fila) {
            $entro = true;
			// inicia sesion
			//session_start();
			// sesion se llama con el usuario
			//$_SESSION["usuario"]=$fila['usuario'];			
		}	
		//$db = null;
		if ($entro){
            // msj en javascript
			echo '<script>alert("Usuario registrado con anticipación"); </script>';
			// ir al panel.php
			echo '<script>window.location="../vista/iniciar.php"; </script>';	
        }else{
			// error
			echo '<script>alert("Usuario verificado, listo para crear"); </script>';
			$sql = "INSERT INTO usuario (usuario, correo, clave, reclave, descripcion) VALUES (?,?,?,?,?)";
			$stmt= $db->prepare($sql);
			$stmt->execute([$usuario, $correo, $pw1, $pw2, $descripcion]);
			// ir a iniciar.php
			echo '<script>alert("Usuario registrado"); </script>';
			echo '<script>window.location="../vista/iniciar.php"; </script>';	
		}
	}else{
		echo '<script>window.location="../vista/iniciar.php"; </script>';
	}
?>

