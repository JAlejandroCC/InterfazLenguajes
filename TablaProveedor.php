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
                        <th scope="col">IdProveedor</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">IdProducto</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Monto Comprado</th>                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM proveedor";
                    $result = mysqli_query($conexion, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <th><?php echo $mostrar['idProveedor'] ?></th>
                            <th><?php echo $mostrar['nombre'] ?></th>
                            <th><?php echo $mostrar['idproducto'] ?></th>
                            <th><?php echo $mostrar['telefono'] ?></th>
                            <th><?php echo $mostrar['monto_comprado'] ?></th>
                        </tr>

                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </body>
</html>
