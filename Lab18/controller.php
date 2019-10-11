<?php
require_once("util.php");

$pattern=strtolower($_GET['pattern']);
buscaajax($pattern);

if($size>0)
  echo "<select id=\"list\" size=$size onclick=\"selectValue()\">$response</select>";
?>