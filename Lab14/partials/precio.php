<?php
  require_once("util.php");
  head();
  $_POST["precio"] = htmlspecialchars($_POST["precio"]);
  if (isset($_POST["precio"])) {
      baratos($_POST["precio"]);
  }else {
      baratos();
  }
  footer();
?>