<?php
    include("conexion.php");
    session_start();
    $id = $_SESSION['id'];
    //variables a subir
    $tema = filter_input(0,'tema');
    $descripcion = filter_input(0,'desc');
    $año = filter_input(0, 'fecha');
    $autores = filter_input(0, 'autores');
    $numpag = filter_input(0, 'numpag');
    $link = filter_input(0, 'link');
    if(file_exists($_FILES['img']['tmp_name'])){
        $imagen = addslashes(file_get_contents($_FILES['img']['tmp_name']));
        $query = "UPDATE residencias SET tema = '$tema',imagen = '$imagen', descripcion = '$descripcion', año = '$año', autores = '$autores', 
                      nPaginas = '$numpag', link = '$link' WHERE idResidencia = '$id'";
        $resultado = mysqli_query($conexion, $query);
        if(!$resultado){
                die("Error no se ingresaron los datos");
        }
        header("Location: libros.php");
    }
    else{
        $query = "UPDATE residencias SET tema = '$tema', descripcion = '$descripcion', año = '$año', autores = '$autores', 
                    nPaginas = '$numpag', link = '$link' WHERE idResidencia = '$id'";
        $resultado = mysqli_query($conexion, $query);
        if(!$resultado){
            die("Error no se ingresaron los datos");
        }
        header("Location: libros.php");
    }

    // $query = "INSERT INTO residencias (idResidencia, tema, imagen, descripcion, año, autores, nPaginas, link, favoritos, leidos, descargados) VALUES 
    // (NULL, '$tema', '$imagen', '$descripción', '$anio', '$autores', '$numpag', '$link', '$favoritos', '$leidos', '$descargados')";

    // $resultado = mysqli_query($conexion, $query);
    // if(!$resultado){
    //     die("Error no se ingresaron los datos");
    // }
    // echo 'Registro completado';
    // header("Location: muestra.php")
