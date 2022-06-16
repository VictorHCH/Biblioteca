<?php
    session_start();
    if(isset($_SESSION['tipo'])){
        if($_SESSION['tipo'] == 0){
            header('Location: login.php');
        }
        elseif($_SESSION['tipo'] == 1){
            include("headerU.php");
        }
        else{
            include("headerA.php");
        }
    }
    else{
        header('Location: login.php');
    }
    
?>