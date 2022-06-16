<?php include("includes/valida.php") ?>
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
        <form action="residenciaEBD.php" method="post" enctype="multipart/form-data">
            Tema: <textarea class='autoExpand' rows='3' data-min-rows='3' placeholder='Auto-Expanding Textarea' name="tema"></textarea><br><br>
            Imagen: <input type="file" requiered name="img"><br><br>
            Descripción: <textarea class='autoExpand' rows='8' data-min-rows='3' placeholder='Auto-Expanding Textarea' name="desc"></textarea><br><br>
            Año: <input type="date" requiered name="fecha" value=""><br><br>
            Autores: <textarea class='autoExpand' rows='3' data-min-rows='3' placeholder='Auto-Expanding Textarea' name="autores"></textarea><br><br>
            Numero de paginas : <input type="number" requiered name="numpag" value=""><br><br>
            Link: <input type="text" name="link" requiered value="">
            <input type="submit" value="Enviar">
        </form>
    </center>
</body>

</html>