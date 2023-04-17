<?php
    // iniciando
    session_start();
    // incluir archivo
    require_once ('../controlador/serv.php');
    // si hay una sesion con un usuario
    if(isset($_SESSION['usuario'])){
        // configurar el header de la pagina
        header('Content-Type: text/html; charset=UTF-8');
?>

<!DOCTYPE HTML>
<html lang="es-pe">
	<head>
		<title>BIENVENIDOS AL PANEL DE CONTROL</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
           <div class="row">
                <div class="col-md-2">                    
                    <img src="img/consorcio.png" class="img img-responsive"><br><br>
                    <a href="#" class="btn btn-info btn-block" role="button">Foros</a> 
                    <a href="#" class="btn btn-info btn-block" role="button">Personal</a>
                    <a href="#" class="btn btn-info btn-block" role="button">Normas técnicas</a>
                    <a href="#" class="btn btn-info btn-block" role="button">Boletines</a>
                    <a href="#" class="btn btn-info btn-block" role="button">Sistema ISO</a>
                    <a href="#" class="btn btn-info btn-block" role="button">Sugerencias</a>
                    <a href="../controlador/logout.php" class="btn btn-danger btn-block" role="button">Cerrar sesión</a>
                </div>
                <div class="col-md-9">
                    <h1 class="text-center">CONSORCIO</h1>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#">CONSORCIO</a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="panel.php">Inicio</a></li>
                                <li><a href="registro.php">Registro</a></li>
                                <li><a href="lista.php">Lista</a></li>
                                <li><a href="consulta.php">Consulta</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="text-center">Mis datos</h3>
                            <img src="img/datos.jpg" class="img img-responsive img-round">
                            <a href="#" class="btn btn-success">Editar datos</a>
                        </div>
                        <div class="col-md-4">
                            <!--
                             <h3 class="text-center">Mis Reportes</h3>
                             <img src="img/reportes.jpg" class="img img-responsive">
                            -->
                        </div>
                        <div class="col-md-4">
                            <!--
                             <h3 class="text-center">Mis calificaciones</h3>
                             <img src="img/calificaciones.jpg" class="img img-responsive">
                            -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <header>
                        <h2>
                            <small>Bienvenido </small>
                            <b><?php echo $_SESSION['usuario']; ?></b>
                        </h2>
					</header>                   
                </div>
            </div>
        </div>
        <div class="container">
           <div class="row">
               <div class="col-md-12">
                   				
				</div>			
            </div>
        </div>			
	</body>
</html>
<?php
    }else{
        echo '<script>window.location="../vista/iniciar.php"; </script>';
    }
    $profile=$_SESSION['usuario'];
?>
