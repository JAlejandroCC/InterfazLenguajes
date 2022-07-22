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
                        <th scope="col">IdMovimientos</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Descripcion Movimiento</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Talla</th>
                        <th scope="col">Precio Unidad</th>
                        <th scope="col">Modificado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM movimientos";
                    $result = mysqli_query($conexion, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <th><?php echo $mostrar['idMovimientos'] ?></th>
                            <th><?php echo $mostrar['usuario'] ?></th>
                            <th><?php echo $mostrar['tipo'] ?></th>
                            <th><?php echo $mostrar['descripcionMovimiento'] ?></th>
                            <th><?php echo $mostrar['cantidad'] ?></th>
                            <th><?php echo $mostrar['talla'] ?></th>
                            <th><?php echo $mostrar['precioUnidad'] ?></th>
                            <th><?php echo $mostrar['modificar'] ?></th>
                        </tr>

                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </body>
</html>

