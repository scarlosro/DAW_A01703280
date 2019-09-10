<?php 


$v1 = $_POST['valor1'];
$v2 = $_POST['valor2'];
$v3 = $_POST['valor3'];
$v4 = $_POST['valor4'];
$v5 = $_POST['valor5'];

$arreg = array($v1,$v2,$v3,$v4,$v5);



function mediana($arreg){
    $size = count($arreg);
    SORT($arreg);
    $medis = floor($size/2);
    return $arreg[$medis];
}


echo "La mediana es " .mediana($arreg);
?>