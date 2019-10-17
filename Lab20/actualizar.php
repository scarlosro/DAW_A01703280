<?php
  require_once("util.php");
  head();
  $_POST["nombre"] = htmlspecialchars($_POST["nombre"]);
  $_POST["units"] = htmlspecialchars($_POST["units"]);
  $_POST["quantity"] = htmlspecialchars($_POST["quantity"]);
  $_POST["price"] = htmlspecialchars($_POST["price"]);
  $_POST["country"] = htmlspecialchars($_POST["country"]);
  if (isset($_POST["nombre"]) && isset($_POST["units"]) && isset($_POST["quantity"]) && isset($_POST["price"]) && isset($_POST["country"])) {
      if(actualizar($_POST["nombre"],$_POST["units"],$_POST["quantity"],
      $_POST["price"],$_POST["country"])){
          if($_POST["nombre"]!=""){
              echo "<h4>Dato Actualizado</h4>";
            echo getFruits();
        }
          else{
              echo "<h3>Hubo un error y no se pudo ACTUALIZAR.</h3>";
          }
      }
      else{
          echo "<h3>Hubo un error y no se pudo ACTUALIZAR.</h3>";
      }
      echo "<a href=index.php>Regresar</a>";
  }
  footer();
?>