
<!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MODIFICAR</title>

    </head>
    <body>
        <div>
            <form action="buscar.php" method="post">
                <input type="text" name="buscar" id="">
                <input type="submit" value="Buscar">
                <a href="nuevoregistro.php">NUEVO</a>
            </form>
        </div>
        <div>
            <table border="1">
                <tr>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Direccion</td>
                    <td>Fecha de Nacimiento</td>
                    <td>Sexo</td>
                </tr>
                <?php
                $cnx = mysqli_connect("localhost", "consorcio");
                $sql = "SELECT cod, nom, ape,dir, fnac, sex FROM personal order by cod desc";
                $rta = mysqli_query($cnx,$sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
                ?>
                <tr>
                    <td><?php echo $mostrar['0'] ?></td>
                    <td><?php echo $mostrar['1'] ?></td>
                    <td><?php echo $mostrar['2'] ?></td>
                    <td>
                        <a href="editar.php">EDITAR</a>
                        <a href="eliminar.php">ELIMINAR</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </body>
</html>
