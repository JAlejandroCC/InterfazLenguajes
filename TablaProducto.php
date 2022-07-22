<?php
$conexion = mysqli_connect('localhost', 'root', '', 'inventario_tienda');
?>


<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Page Title</title>
    </head>
    <body>
        
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <h2 class="nav-link"">Productos</h2>
            </li>
        </li>
    </ul>
        
        <br

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">idProducto</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad disponible</th>
                        <th scope="col">Talla</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM producto";
                    $result = mysqli_query($conexion, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <th><?php echo $mostrar['idProducto'] ?></th>
                            <th><?php echo $mostrar['descripcion'] ?></th>
                            <th><?php echo $mostrar['precio'] ?></th>
                            <th><?php echo $mostrar['cantDisponible'] ?></th>
                            <th><?php echo $mostrar['talla'] ?></th>
                        </tr>

                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </body>
</html>