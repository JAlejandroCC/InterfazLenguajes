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
                        <th scope="col">IdVenta</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Total Venta</th>
                        <th scope="col">Cedula Cliente</th>
                        <th scope="col">IdCajero</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM venta";
                    $result = mysqli_query($conexion, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <th><?php echo $mostrar['idVenta'] ?></th>
                            <th><?php echo $mostrar['fecha'] ?></th>
                            <th><?php echo $mostrar['totalVenta'] ?></th>
                            <th><?php echo $mostrar['cedulaCliente'] ?></th>
                            <th><?php echo $mostrar['idCajero'] ?></th>                          
                        </tr>

                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </body>
</html>