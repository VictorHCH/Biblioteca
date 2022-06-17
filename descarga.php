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
    $consulta = "SELECT descargados, link FROM residencias WHERE idResidencia ='$idRes'";
    $query = mysqli_query($conexion, $consulta);
    $resultado = mysqli_num_rows($query);
    if ($resultado == 0) {
        // header('Location: index.php');
    } else {
        while ($data = mysqli_fetch_array($query)) {
            $descargados = $data['descargados'];
            $link = str_replace("/view", "/preview", $data["link"]);
            $cadena = explode("/", $data["link"]);
            $idGoogle = $cadena[5];
            $linkDescarga = "https://drive.google.com/u/1/uc?id=$idGoogle&export=download";
        }
    }
    $descargados = $descargados + 1;
    $query = "UPDATE residencias SET descargados = '$descargados' WHERE idResidencia = '$idRes'";
    $resultado = mysqli_query($conexion, $query);
    if(!$resultado){
        die("Error no se ingresaron los datos");
    }
    
    header("Location: $linkDescarga")
?>