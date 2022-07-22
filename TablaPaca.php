<?php
$conexion = mysqli_connect('localhost', 'root', '', 'inventario_tienda');
?>


<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Tabla Paca</title>
    </head>
    <body>
        
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <h2 class="nav-link"">Paca</h2>
            </li>
        </li>
    </ul>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">IdPaca</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Fecha Ingreso</th>
                        <th scope="col">Costo</th>
                        <th scope="col">IdProveedor</th>
                        <th scope="col">IdCategoria</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM paca";
                    $result = mysqli_query($conexion, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <th><?php echo $mostrar['idPaca'] ?></th>
                            <th><?php echo $mostrar['descripcion'] ?></th>
                            <th><?php echo $mostrar['fechaIngreso'] ?></th>
                            <th><?php echo $mostrar['costo'] ?></th>
                            <th><?php echo $mostrar['idproveedor'] ?></th>
                            <th><?php echo $mostrar['idcategoria'] ?></th>                           
                        </tr>

                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </body>
</html>
