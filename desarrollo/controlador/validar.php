<?php
	// Se ha desactualizado
	// Validar.php esta reemplazado por validar1.php
	
	// Iniciar sesion
	session_start();
	// incluir archivo serv.php
	require_once('serv.php');
	// si viene del iniciar.php
	if(isset($_POST['login'])){
		$entro=false;
		$usuario=$_POST['usuario'];
		$pw=$_POST['clave'];
		$registros = "SELECT usuario FROM usuario WHERE usuario ='$usuario' AND clave='$pw'";
		// bucle
		foreach($db->query($registros) as $fila) {  
			// inicia sesion
			session_start();
			// sesion se llama con el usuario
			$_SESSION["usuario"]=$fila['usuario'];
			// msj en javascript
			echo '<script>alert("Usuario correcto"); </script>';
			// ir al panel.php
			echo '<script>window.location="panel.php"; </script>';	
		}	
		$db = null;
		if (!$entro){
			// error
			echo '<script>alert("Usuario incorrecto"); </script>';
			// ir a iniciar.php
			echo '<script>window.location="iniciar.php"; </script>';	
		}
	}else{
		echo '<script>window.location="iniciar.php"; </script>';
	}
?>

