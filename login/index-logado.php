<?php 
session_start();

    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
        echo "Pagina em Construção.";
    }else {
        header("Location: pg-login.php");
    }
?>

