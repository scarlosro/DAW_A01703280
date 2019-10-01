<?php
  include("partials/_head.html"); 
  require_once("util.php");
  $_POST["nombre"] = htmlspecialchars($_POST["nombre"]);
  if (isset($_POST["nombre"])) {
      nombre($_POST["nombre"]);
  }else {
      nombre();
  } 
  include("partials/_footer.html"); 
?>