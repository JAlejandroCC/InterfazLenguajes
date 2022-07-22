<?php
$conexion = mysqli_connect('localhost', 'root', '', 'inventario_tienda');
?>


<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Page Title</title>
    </head>
    <body>

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">IdCajero</th>
                        <th scope="col">Nombre Cajero</th>
                        <th scope="col">Primer Apellido</th>
                        <th scope="col">Segundo Apellido</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Salario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM cajero";
                    $result = mysqli_query($conexion, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <th><?php echo $mostrar['idCajero'] ?></th>
                            <th><?php echo $mostrar['nombreCajero'] ?></th>
                            <th><?php echo $mostrar['primApellido'] ?></th>
                            <th><?php echo $mostrar['segApellido'] ?></th>
                            <th><?php echo $mostrar['telefono'] ?></th>
                            <th><?php echo $mostrar['correo'] ?></th>
                            <th><?php echo $mostrar['salario'] ?></th>
                        </tr>

                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </body>
</html>