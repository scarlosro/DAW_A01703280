<?php

$v1 = $_POST['valor1'];
$v2 = $_POST['valor2'];
$v3 = $_POST['valor3'];

$arreg = array($v1,$v2,$v3);

function promedio($arreg){
    $suma=0;
    $size = count($arreg);
    
    for($i=0; $i < $size; $i++){
        $suma+= $arreg[$i];
    }
    $prom = $suma / $size;
    return $prom;
}


echo "El promedio es " .promedio($arreg);



?>