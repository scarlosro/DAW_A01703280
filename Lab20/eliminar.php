<?php
  require_once("util.php");
  head();
  $_POST["nombre"] = htmlspecialchars($_POST["nombre"]);
  if (isset($_POST["nombre"])) {
      if(eliminar($_POST["nombre"])){
          echo getFruits();
      }
      else{
          echo "<h3>Hubo un error y no se pudo eliminar el registro.</h3>";
      }
  }
  footer();
?>