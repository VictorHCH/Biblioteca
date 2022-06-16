<?php
    include("includes/valida.php");
    include("conexion.php");
    //variables a subir
    $tema = filter_input(0,'tema');
    $imagen = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $descripción = filter_input(0,'desc');
    $anio = filter_input(0, 'fecha');
    $autores = filter_input(0, 'autores');
    $numpag = filter_input(0, 'numpag');
    $link = filter_input(0, 'link');
    $favoritos = 0;
    $leidos = 0;
    $descargados = 0;

    $query = "INSERT INTO residencias (idResidencia, tema, imagen, descripcion, año, autores, nPaginas, link, favoritos, leidos, descargados) VALUES 
    (NULL, '$tema', '$imagen', '$descripción', '$anio', '$autores', '$numpag', '$link', '$favoritos', '$leidos', '$descargados')";

    $resultado = mysqli_query($conexion, $query);
    if(!$resultado){
        die("Error no se ingresaron los datos");
    }
    echo 'Registro completado';
    header("Location: muestra.php")


?>