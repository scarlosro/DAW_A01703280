<?php
    require_once("util.php");
    session_start();
    head();
    if(isset($_POST["nombre"])) {
        echo busca($_POST["nombre"]);
    } else {
        echo "NO RECIBIDO";
    }

    footer();
?>