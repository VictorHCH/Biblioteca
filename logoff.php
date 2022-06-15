<?php
    session_start();
    ///Elimina la session
    session_destroy();
    header('Location: index.php');
?>