<?php

$frase = $_POST['frase'];
$frase = str_replace(" ","",$frase);
$frase = strtolower($frase);


function esPolin($frase){
   if(! $frase == ""){
        $frase2 = strrev($frase);

        if($frase == $frase2){
            echo "Es polindroma";
        }
        else{   
            echo " " .$frase2;
            echo "No lo es";
        }
    
        }
    
else{
    echo "Es nulo el campo";
}
}


esPolin($frase);

?>