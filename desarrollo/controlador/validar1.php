<?php
	// Iniciar sesion
	session_start();
    if (isset($_SESSION['usuario'])){
		echo '<script>window.location="../vista/panel.php"; </script>';
	}
	// si viene del iniciar.php
	if(isset($_POST['login'])){
		$entro=false;
		$usuario=$_POST['usuario'];
		$pw=$_POST['clave'];
        // incluir archivo serv.php
	    require_once('serv.php');
		$registros = "SELECT usuario FROM usuario WHERE usuario ='$usuario' AND clave='$pw'";
		// bucle
		foreach($db->query($registros) as $fila) {
            $entro = true;
			// inicia sesion
			session_start();
			// sesion se llama con el usuario
			$_SESSION["usuario"]=$fila['usuario'];			
		}	
		$db = null;
		if ($entro){
            // msj en javascript
			echo '<script>alert("Usuario correcto"); </script>';
			// ir al panel.php
			echo '<script>window.location="../vista/panel.php"; </script>';	
        }else{
			// error
			echo '<script>alert("Usuario incorrecto"); </script>';
			// ir a iniciar.php
			echo '<script>window.location="../vista/iniciar.php"; </script>';	
		}
	}else{
		echo '<script>window.location="../vista/iniciar.php"; </script>';
	}
?>

