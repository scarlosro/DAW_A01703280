<?php

$valorn = $_POST['n'];


function tablas($valorn){
    
    echo "<table>";
    for($i = 1; $i <= $valorn; $i++){
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . pow($i,2) . "</td>";
        echo "<td>" . pow($i,3) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

tablas($valorn);

?>