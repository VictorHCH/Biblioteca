<?php
ob_start();
session_start();
if (!isset($_SESSION["tipo"]) || $_SESSION["tipo"] == 0) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
</head>
<body style="text-align: center;">
    <?php
    // Obteniendo la fecha actual del sistema con PHP
    $fechaActual = date('d-m-Y');
    include("conexion.php");
    $id=$_SESSION['idUsuario'];
    $sql="select nombre, apellido from usuarios where idUsuario='$id'";
    $result=mysqli_query($conexion, $sql);
    $resultado = mysqli_num_rows($result);
    if($resultado > 0){
        while($mostrar = mysqli_fetch_array($result)){
            $nombre = $mostrar['nombre']."<br>".$mostrar['apellido'];
    ?>
    <p style="text-align: right; font-weight: bold; color: #79DAE8">Fecha del reporte: <?php echo $fechaActual ?></p>
    <p style="text-align: right; font-weight: bold; color: #79DAE8">Encargado del reporte: <?php echo $nombre ?></p>
    <?php
        }
    }
    ?>
    <h1>Reporte de usuarios</h1>
    <h1 style="color: #ffca4f">Leyendo.com</h1>
    <section id="container" style="display: flex; align-items: center;">
        <table style="margin: auto; width: 90%; text-align: center; border: 5px;">
            <tr>
                <th style="background-color: #ff757c; border: 1px solid black; border-collapse: collapse">ID</th>
                <th style="background-color: #ff757c; border: 1px solid black; border-collapse: collapse">Usuario</th>
                <th style="background-color: #ff757c; border: 1px solid black; border-collapse: collapse">Nombre</th>
                <th style="background-color: #ff757c; border: 1px solid black; border-collapse: collapse">Apellido</th>
                <th style="background-color: #ff757c; border: 1px solid black; border-collapse: collapse">Correo</th>
                <th style="background-color: #ff757c; border: 1px solid black; border-collapse: collapse">Rol</th>
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
                <td style="border: 1px solid black; border-collapse: collapse"><?php echo $data['idUsuario'] ?></td>
                <td style="border: 1px solid black; border-collapse: collapse"><?php echo $data['usuario'] ?></td>
                <td style="border: 1px solid black; border-collapse: collapse"><?php echo $data['nombre'] ?></td>
                <td style="border: 1px solid black; border-collapse: collapse"><?php echo $data['apellido'] ?></td>
                <td style="border: 1px solid black; border-collapse: collapse"><?php echo $data['correo'] ?></td>
                <td style="border: 1px solid black; border-collapse: collapse">
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
            </tr>
            <?php
                        }
                    }
            ?>
        </table>
    </section>
</body>
</html>
<?php
    $html = ob_get_clean();

    require_once('C:/xampp/htdocs/_pdf/dompdf/autoload.inc.php');
    use Dompdf\Dompdf;

    $dompdf = new Dompdf;

    $options = $dompdf->getOptions();
    $options->set(array("isRemoteEnabled"=>true));
    $dompdf->setOptions($options);

    // $dompdf->loadHtml("HOLA MUNDO");
    $dompdf->loadHtml($html);
    $dompdf->setPaper("letter");
    $dompdf->render();
    $dompdf->stream("ReporteUsuarios_".$fechaActual, array("Attachment"=>false));
?>