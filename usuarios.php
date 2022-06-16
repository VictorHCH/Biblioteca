
<?php require('includes/header.php') ?>
<div id="find">
</div>
<section id="container">
    <h1>Lista de usuarios</h1>
    <a href="registerUsuarioAdmin.php" class="btn_new">Crear usuario</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
            <?php
               include("conexion.php");
               $consulta = "SELECT idUsuario, usuario, nombre, apellido, correo, tipoUsuario FROM usuarios";
               $query = mysqli_query($conexion, $consulta);
               $resultado = mysqli_num_rows($query);
               if($resultado > 0){
                    while($data = mysqli_fetch_array($query)){
                            
            ?>
        <tr>
            <td><?php echo $data['idUsuario'] ?></td>
            <td><?php echo $data['usuario'] ?></td>
            <td><?php echo $data['nombre'] ?></td>
            <td><?php echo $data['apellido'] ?></td>
            <td><?php echo $data['correo'] ?></td>
            <td>
                <?php 
                    if($data['tipoUsuario'] == 2){
                        echo "Administrador";
                    }
                    elseif($data['tipoUsuario'] == 1){
                        echo "Usuario";
                    }
                    else{
                        echo "Indefinido";
                    }
                ?>
            </td>
            <td>
                <a class="link_edit" href="usuarioE.php?id=<?php echo $data['idUsuario'] ?>">Editar</a> |
                <a class="link_delete" href="usuariosB.php?id=<?php echo $data['idUsuario'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php
                    }
                }
            ?>
    </table>
</section>
<?php require('includes/footer.php') ?>