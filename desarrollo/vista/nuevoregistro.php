<?php
	// session_start: crea una sesión o reanuda la actual basada en un identificador de sesión pasado mediante una petición GET o POST, o pasado mediante una cookie.
	session_start();
	// require_once: incluye y evalua el fichero especificado durante la ejecución del script.
	require_once ('../controlador/serv.php');
	// Si sesion esta abierta debe ir a panel.php
	if (isset($_SESSION['usuario'])){
		echo '<script>window.location="panel.php"; </script>';
	}
?>
<!DOCTYPE HTML>
<html lang="es-pe">
	<head>
		<title>Nuevo Registro</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/estilos.css" />
		<script src="js/bootstrap.min.js"></script>
	</head>	
	<body>
		<header>
			<!-- Contenedor -->
            <div class="container">
				<!-- fila -->
            	<div class="row">
					<!-- col de 3 -->
                    <div class="col-md-3">                        
                    </div>
					<!-- col de 6 -->
                    <div class="col-md-6">
                        
						<h1 class="text-center">APLICACIÓN CONSORCIO</h1>
						<h2 class="text-center">Exclusivo para Pruebas</h2>
						<h3 class="text-center">Bienvenido</h3>
                        <h3 class="text-center">Plataforma de Negocios</h3>
					</div>
					<!-- col de 3 -->
                    <div class="col-md-3">					
                    </div>
                </div>
			</div>
		</header>
		<section>
			<!-- Contenedor -->
            <div class="container">
				<!--fila  -->
				<div class="row">
					<div class="col-md-4">						
					</div>
					<div class="col-md-4">
						<h4 class="text-center">Registro de Usuarios</h4>
						<form method="post" action="../controlador/crearusuario.php">
							<div class="form-group">
								<input type="text" 
									name="usuario" 									
									placeholder="Ingrese nombre de Usuario" 
									maxlength="50"
									class="form-control" 
									required/><br>
                                <input type="email" 
									name="correo" 									
									placeholder="Ingrese correo electrónico" 
									maxlength="50"
									class="form-control" 
									required/><br>
								<input type="password" 
									name="clave" 
									placeholder="Ingrese Password" 
									maxlength="50"
									class="form-control"  
									required/><br>
                                <input type="password" 
									name="reclave" 
									placeholder="Repita el Password" 
									maxlength="50"
									class="form-control"
									required/><br>
                                <input type="text" 
									name="descripcion" 
									placeholder="Descripción del usuario" 
									maxlength="50"
									class="form-control"
									required/><br>
							</div>						
							<input type="submit" 
								value="Registrar" 
								name="registra" 
								class="btn btn-primary"/>
							<input type="reset" 
								value="Restaurar" 
								name="restaura" 
								class="btn btn-info"/>							
							<a href="#" class="texto-centrado">Desea recuperar su contraseña?</a>							
						</form>
					</div>
					<div class="col-md-4">					
					</div>
				</div>
			</div>
		</section>	
	</body>
</html>