<?php
  require_once("util.php");
  head();
  $_POST["nombre"] = htmlspecialchars($_POST["nombre"]);
  $_POST["units"] = htmlspecialchars($_POST["units"]);
  $_POST["quantity"] = htmlspecialchars($_POST["quantity"]);
  $_POST["price"] = htmlspecialchars($_POST["price"]);
  $_POST["country"] = htmlspecialchars($_POST["country"]);
  if (isset($_POST["nombre"]) && isset($_POST["units"]) && isset($_POST["quantity"]) && isset($_POST["price"]) && isset($_POST["country"])) {
      if(insertar($_POST["nombre"],$_POST["units"],$_POST["quantity"],
      $_POST["price"],$_POST["country"])){
          echo "<h4>Registro hecho</h4>";
          echo getFruits();
      }
      else{
          echo "<h3>Hubo un error y no se pudo registrar.</h3>";
      }
      echo "<a href=index.php>Regresar</a>";
  }
  footer();
?>