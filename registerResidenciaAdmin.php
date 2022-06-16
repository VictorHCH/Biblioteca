<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="agregaResi.php" method="post" enctype="multipart/form-data">
            Tema: <input type="text" requiered name="tema"><br><br>
            Imagen: <input type="file" requiered name="img"><br><br>
            Descripción: <textarea requiered name="desc" cols="30" rows="10"></textarea><br><br>
            Año: <input type="date" requiered name="fecha"><br><br>
            Autores: <textarea name="autores" requiered id="1" cols="30" rows="10"></textarea><br><br>
            Numero de paginas : <input type="number" requiered name="numpag"><br><br>
            Link: <input type="text" name="link" requiered>
            <input type="submit" value="Enviar">
        </form>
    </center>
</body>

</html>