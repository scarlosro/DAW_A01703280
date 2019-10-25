<?php
    require_once("utils.php");
    require_once("modelo.php");

    if(isset($_POST["nombre"])){
        registrarZombie($_POST["nombre"]);
        
    }
    else{
        header("location:index.php");
    }

?>