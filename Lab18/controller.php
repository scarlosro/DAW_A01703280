<?php
require_once("util.php");

$pattern=strtolower($_GET['pattern']);
$res = buscaajax($pattern);

echo $res;

?>