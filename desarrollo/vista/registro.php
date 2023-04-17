<?php
    // inicio de sesion
    session_start();
    // incluir archivo serv.php
    require_once ('../controlador/serv.php');
    // verificar si hay un usuario
    if(isset($_SESSION['usuario'])){
        // Php configure la cabecera
        header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE HTML>
<html lang="es-pe">
	<head>
		<title>BIENVENIDOS - REGISTRO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
        <!-- Contenedor -->
		<div class="container">
            <!-- Fila -->
           <div class="row">
                <!-- Columnas -->
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
                    <h1>CONSORCIO</h1>
                   <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="iniciar.php">CONSORCIO</a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li><a href="panel.php">Inicio</a></li>
                                <li class="active"><a href="registro.php">Registro</a></li>
                                <li><a href="lista.php">Lista</a></li>
                                <li><a href="consulta.php">Consulta</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Cliente</h3>
                            <img src="img/cliente.jpg" class="img img-responsive">
                            <p><a href="cliente/cliente.php">Ingresar a cliente</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Personal</h3>
                             <img src="img/personal.jpg" class="img img-responsive">
                             <p><a href="personal/personal.php">Ingresar a personal</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Producto</h3>
                             <img src="img/producto.png" class="img img-responsive">
                             <p><a href="producto/producto.php">Ingresar a producto</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Boleta</h3>
                             <img src="img/boleta.png" class="img img-responsive">
                             <p><a href="#">Ingresar a boleta</a></p>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Categoria</h3>
                            <img src="img/categoria.png" class="img img-responsive">
                            <p><a href="cliente.php">Ingresar a categoria</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Proveedor</h3>
                             <img src="img/proveedor.png" class="img img-responsive">
                             <p><a href="personal.php">Ingresar a proveedor</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Inventario</h3>
                             <img src="img/inventario.png" class="img img-responsive">
                             <p><a href="producto.php">Ingresar a inventario</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Usuario</h3>
                             <img src="img/usuario.png" class="img img-responsive">
                             <p><a href="#">Ingresar a usuario</a></p>
                        </div>
                    </div>                    
                </div>
                <div class="col-md-1">
                    <header>
                        <h3><small>Bienvenido </small><b><?php echo $_SESSION['usuario']; ?></b></h3>
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
