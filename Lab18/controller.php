
<?php
include_once("util.php");
$pattern=strtolower($_GET['pattern']);
$words=buscaajax($pattern);
$response="";
$size=0;
for($i=0; $i<count($words); $i++)
{
   $pos=stripos(strtolower($words[$i][1]),$pattern);
   if(empty($pos) || !($pos===false))
   {
     $size++;
     $nombre=$words[$i][0];
     $unidad=$words[$i][1];
     $cantidad=$words[$i][2];
     $precio=$words[$i][3];
     $pais=$words[$i][4];
     $response.="<tr><td>$nombre</td><td>$unidad</td><td>$cantidad</td><td>$precio</td><td>$pais</td></tr>";
   }
}
if($size>0)
{
  echo 
  "<table>                
  <thead >
    <tr>
        <th>Nombre</th>
        <th>Unidad</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>País</th>
    </tr>
  </thead>
  <tbody>
    $response
  </tbody>
  </table>";
}else{
  echo "No se encontro ningun resultado";
}
?>