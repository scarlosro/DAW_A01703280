<?php
  require_once("util.php");
  head();
  $_POST["nombre"] = htmlspecialchars($_POST["nombre"]);
  $_POST["units"] = htmlspecialchars($_POST["nombre"]);
  $_POST["quantity"] = htmlspecialchars($_POST["nombre"]);
  $_POST["price"] = htmlspecialchars($_POST["nombre"]);
  $_POST["country"] = htmlspecialchars($_POST["nombre"]);
  if (isset($_POST["nombre"]) && isset($_POST["units"]) && isset($_POST["quantity"]) && isset($_POST["price"]) && isset($_POST["country"])) {
      if(insertar($_POST["nombre"],$_POST["units"],$_POST["quantity"],
      $_POST["price"],$_POST["country"])){
          
      }
      else{
          echo "<h3>Hubo un error y no se pudo eliminar el registro.</h3>";
      }
  }
  footer();
?>