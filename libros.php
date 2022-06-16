<?php require('includes/header.php') ?>
    <div id="find">
    </div>
    <section id="container">
    <div>
        <h1>Lista de Residencias</h1>
        <a href="registerResidenciaAdmin.php" class="btn_new">Agregar Residencia</a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Tema</th>
            <th>Descripción</th>
            <th>Año</th>
            <th>Autor(es)</th>
            <th>Numero de Paginas</th>
            <th>Link</th>
            <th>Favoritos</th>
            <th>Leidos</th>
            <th>Descargados</th>
            <th>Acciones</th>
        </tr>
            <?php
               include("conexion.php");
               $consulta = "SELECT idResidencia, tema, descripcion, año, autores, nPaginas, link, favoritos, leidos, descargados FROM residencias";
               $query = mysqli_query($conexion, $consulta);
               $resultado = mysqli_num_rows($query);
               if($resultado > 0){
                    while($data = mysqli_fetch_array($query)){
                            
            ?>
        <tr>
            <td><?php echo $data['idResidencia'] ?></td>
            <td><?php echo $data['tema'] ?></td>
            <td><?php echo $data['descripcion'] ?></td>
            <td><?php echo $data['año'] ?></td>
            <td><?php echo $data['autores'] ?></td>
            <td><?php echo $data['nPaginas'] ?></td>
            <td><?php echo $data['link'] ?></td>
            <td><?php echo $data['favoritos'] ?></td>
            <td><?php echo $data['leidos'] ?></td>
            <td><?php echo $data['descargados'] ?></td>
            <td>
                <a class="link_edit" href="residenciaE.php?id=<?php echo $data['idResidencia'] ?>">Editar</a> |
                <a class="link_delete" href="usuariosB.php?id=<?php echo $data['idResidencia'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php
                    }
                }
            ?>
    </table>
</section>
<?php require('includes/footer.php') ?>