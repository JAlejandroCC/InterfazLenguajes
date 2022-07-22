<?php
$conexion = mysqli_connect('localhost', 'root', '', 'inventario_tienda');
?>


<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Tabla Categoria</title>
    </head>
    <body>
        
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <h2 class="nav-link"">Catgoria</h2>
            </li>
        </li>
    </ul>
        
        <br
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">idCategoria</th>
                        <th scope="col">Descripcion</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM categoria";
                    $result = mysqli_query($conexion, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <th><?php echo $mostrar['idCategoria'] ?></th>
                            <th><?php echo $mostrar['descripcion'] ?></th>
                            
                        </tr>

                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </body>
</html>

