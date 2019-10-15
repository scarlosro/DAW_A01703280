<?php
require_once("problema2.php");
$v1 = $_POST['valor1'];
$v2 = $_POST['valor2'];
$v3 = $_POST['valor3'];
$v4 = $_POST['valor4'];
$v5 = $_POST['valor5'];

$arreg = array($v1,$v2,$v3,$v4,$v5);

SORT($arreg);

function mostrar($arreg){
    $size = count($arreg);
    $sum=0;
    echo "<ol>";
    for($i = 0; $i < $size; $i++){
        $aux = $arreg[$i];
        $sum +=$arreg[$i];
        echo "<li>" .$arreg[$i] ."</li>" ;        
    }
    echo "</ol>";
    
    rsort($arreg);
    echo "<ol>";
    for($i = 0; $i < $size; $i++){
        $aux = $arreg[$i];
        echo "<li>" .$arreg[$i] ."</li>" ;        
    }
    echo "</ol>";
    
    echo "<ul> <li> El promedio es ". $sum/$size."</li>" ;
    echo "<li> La mediana es " . mediana($arreg) ."</li></ul>";
}

mostrar($arreg);

?>