<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar imagen</title>
</head>
<body>
    <center>
        <table border="2">
            <thead>
                <tr>
                    <th>idResidencia</th>
                    <th>tema</th>
                    <th>imagen</th>
                    <th>descripcion</th>
                    <th>año</th>
                    <th>autores</th>
                    <th>nPaginas</th>
                    <th>link</th>
                    <th>favoritos</th>
                    <th>leidos</th>
                    <th>descargados</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("conexion.php");
                    $query = "SELECT * FROM residencias";
                    $resultado = $conexion ->query($query);
                    while($row = $resultado->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['idResidencia']?></td>
                            <td><?php echo $row['tema']?></td>
                            <td><img src="data:image/jpg;base64,<?php echo base64_decode($row['imagen'])?>"></td>
                            <td><?php echo $row['descripcion']?></td>
                            <td><?php echo $row['año']?></td>
                            <td><?php echo $row['autores']?></td>
                            <td><?php echo $row['nPaginas']?></td>
                            <td><?php echo $row['link']?></td>
                            <td><?php echo $row['favoritos']?></td>
                            <td><?php echo $row['leidos']?></td>
                            <td><?php echo $row['descargados']?></td>
                        </tr>
                        <?php
                    }
                ?>
                ?>
            </tbody>
        </table>
        <a href="https://drive.google.com/file/d/17oQmyEuZp6CaxDPj0iIKDRUtS0GVkoaf/view?usp=sharing">Libro</a>
    </center>
</body>
</html>