<?php
  function connectDB() {
    $environment = "DEV";
    
    if ($environment == "DEV") {
         $bd = mysqli_connect("mysql1008.mochahost.com","dawbdorg_1703280","1703280","dawbdorg_A01703280");
    } else if($environment == "PROD") {
         $bd = mysqli_connect("localhost","root","passwdadmin","FUROCE");
    }
    
    mysqli_set_charset($bd,"utf8");
   
    return $bd;
}
function closeDB($bd) {
    
    mysqli_close($bd);
}  

function obtenerHistorialZombies()
{
   $db = connectDB();
    
    
    $resultado = array();
    
    $query = "SELECT idZombie, nombre FROM Zombie";
    
    $registros = $db->query($query);
    while ($fila = mysqli_fetch_array($registros, MYSQLI_BOTH)) {
       array_push($resultado, array($fila["idZombie"],$fila["nombre"]));
   }
    $regresar='<table><thead><tr><td>Nombre</td><td>Estados</td></tr></thead><tbody>';
    
    for($i = 0; $i < count($resultado); $i++){
        //$query1 = "CALL HistorialZombie('".$resultado[$i][0]."')";
        $idC=$resultado[$i][0];
        $query2 = "SELECT tipo,fechaHora FROM Estado,Zombie_Estado WHERE idZombie='".$idC."' AND Estado.idEstado=Zombie_Estado.idEstado";
        $registros2 = $db->query($query2);
        $resultado2 = array();
        if($registros2){
           while ($fila = mysqli_fetch_array($registros2, MYSQLI_BOTH)) {
               array_push($resultado2, array($fila["tipo"],$fila["fechaHora"]));
           }
            $regresar.="<tr><td>".$resultado[$i][1]."</td><td>";

            for($j=0; $j < count($resultado2); $j++){
                $regresar.= $resultado2[$j][0]."  ".$resultado2[$j][1]."<br/>";
            }
            $regresar.="</td></tr>";
            mysqli_free_result($registros2);
            $resultado2=array();
        }
        else{
             $regresar.="<tr><td>".$resultado[$i][1]."</td><td>";
             $regresar.="</td></tr>";
        }
    }
    $regresar.="</tbody></table>";
  
   closeDB($db);
   echo $regresar;
}


function registrarZombie($nombre){
    $db = connectDB();
    if($db == null){
       echo "Conexion base de datos no exitosa";
       return;
   }
    if(strlen($nombre) >= 2 && strlen($nombre) <= 60){
        $query = "CALL RegistrarZombie('".$nombre."')";
        if (!$db->query($query)) {
            header("location:index.php");
            echo "Falló CALL: (" . $query->errno . ") " . $query->error;
            closeDB($db);
            }
        else{
            closeDB($db);
            header("location:index.php");
            echo "fallo";
            
        }
    }
    else{
        closeDB($db);
        header("location:index.php");
        echo "fallo";
    }
    
}


function porEstado(){
     $db = connectDB();
    
    
    $resultado = array();
    
    
    $query ='CALL ContadorEstados()';
    $registros = $db->query($query);
    while ($fila = mysqli_fetch_array($registros, MYSQLI_BOTH)) {
       array_push($resultado, array($fila["tipo"],$fila["Cuantos"]));
   }
    $regresar='<table><thead><tr><td>Nombre</td><td>Estados</td></tr></thead><tbody>';
     for($i = 0; $i < count($resultado); $i++){
         $regresar.='<tr>
         <td>'.$resultado[$i][0].'</td>
         <td>'.$resultado[$i][1].'</td></tr>';
     }
    
    $regresar.='</tbody></table>';
    echo $regresar;
    
    closeDB($db);
}

?>