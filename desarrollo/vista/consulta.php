<?php
    session_start();
    require_once ('../controlador/serv.php');
    if(isset($_SESSION['usuario'])){
    header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE HTML>
<html lang="es-pe">
	<head>
		<title>BIENVENIDOS</title>
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
                                <a class="navbar-brand" href="iniciar.php">CONSORCIO</a>
                            </div>
                                <ul class="nav navbar-nav">
                                <li><a href="panel.php">Inicio</a></li>
                                <li><a href="registro.php">Registro</a></li>
                                <li><a href="lista.php">Lista</a></li>
                                <li  class="active"><a href="consulta.php">Consulta</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Cliente</h3>
                            <img src="img/cliente.jpg" class="img img-responsive">
                            <p align="center"><a href="consultacliente.php">Ingresar</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Personal</h3>
                             <img src="img/personal.jpg" class="img img-responsive">
                             <p align="center"><a href="consultapersonal.php">Ingresar</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Producto</h3>
                             <img src="img/producto.png" class="img img-responsive">
                             <p align="center"><a href="consultaproducto.php">Ingresar</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Boleta</h3>
                             <img src="img/boleta.png" class="img img-responsive">
                             <p align="center"><a href="#">Ingresar</a></p>
                        </div>
                    </div>                    
                </div>
                <div class="col-md-1">
                    <header>
                        <h2><small>Bienvenido </small><b><?php echo $_SESSION['usuario']; ?></b></h2>
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
}
else{
echo '<script>window.location="iniciar.php"; </script>';
}
$profile=$_SESSION['usuario'];
?>
