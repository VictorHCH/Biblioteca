<?php
    session_start();
    if(isset($_SESSION['tipo'])){
        if($_SESSION['tipo'] == 0){
            header('Location: login.php');
        }
    }
    else{
        header('Location: login.php');
    }
?>
<?php
    include("conexion.php");
    if (empty($_GET['id'])) {
        header('Location: index.php');
    }
    $idRes = $_GET['id'];
    $id = $_SESSION['idUsuario'];
    $consulta = "SELECT favoritos, link FROM residencias WHERE idResidencia ='$idRes'";
    $query = mysqli_query($conexion, $consulta);
    $resultado = mysqli_num_rows($query);
    if ($resultado == 0) {
        // header('Location: index.php');
    } else {
        while ($data = mysqli_fetch_array($query)) {
            $favoritos = $data['favoritos'];
        }
    }
    $favoritos = $favoritos - 1;
    $query = "UPDATE residencias SET favoritos = '$favoritos' WHERE idResidencia = '$idRes'";
    $resultado = mysqli_query($conexion, $query);
    if(!$resultado){
        die("Error no se ingresaron los datos");
    }

    $consulta = "DELETE FROM `favoritos` WHERE `favoritos`.`idUsuario` = '$id' AND `favoritos`.`idResidencia` = '$idRes'";
    $query = mysqli_query($conexion, $consulta);
    if($query){
        header("Location: libros.php");
    }else{
        echo "Error al eliminar";
    }
    echo 'Registro completado';
        
    header("Location: libro.php");
?>