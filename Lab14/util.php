<?php

function conectarDB(){
    $conexion = mysqli_connect("localhost","root","","Fruta");
    if($conexion){
        
    }
    mysqli_set_charset($conexion,"utf8");
    return $conexion;
}


function closeDB($conexion){
    mysqli_close($conexion);
}


function getFruits(){
    $conexion = conectarDB();
    $sql ="SELECT * FROM Fruit";
    $result = mysqli_query($conexion, $sql);
    closeDB($conexion);
    
    return $result;
}

function busca($fruta){
    $conexion = conectarDB();
    $sql = 'SELECT * FROM Fruit ';
    $sql .="WHERE Fruit.nombre='$fruta'";
    $result= mysqli_query($conexion,$sql) ;
   
    
    $regresar='
    <table>
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Unidad</th>
              <th>Cantidad</th>
              <th>Precio</th>
              <th>Pais</th>
          </tr>
        </thead>
        <tbody>';

     while ($fila = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        $regresar .= '<tr>
            <td>'.$fila["nombre"].'</td>
            <td>'.$fila["units"].'</td>
            <td>'.$fila["quantity"].'</td>
            <td>'.$fila["price"].'</td>
            <td>'.$fila["country"].'</td>
          </tr>';
    }
    $regresar .= ' </tbody>
      </table>';
    mysqli_free_result($result);
    closeDB($conexion);
    return $regresar;
}

function baratos($precio){
    $conexion = conectarDB();
    
    $sql="SELECT * FROM Fruit WHERE price < '".$precio."'"; 
    echo $sql;
    $result= $conexion->query($sql);
    
     $regresar='
    <table>
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Unidad</th>
              <th>Cantidad</th>
              <th>Precio</th>
              <th>Pais</th>
          </tr>
        </thead>
        <tbody>';

     while ($fila = mysqli_fetch_array($result, MYSQLI_BOTH)) {
         
        $regresar .= '<tr>
            <td>'.$fila["nombre"].'</td>
            <td>'.$fila["units"].'</td>
            <td>'.$fila["quantity"].'</td>
            <td>'.$fila["price"].'</td>
            <td>'.$fila["country"].'</td>
          </tr>';
    }
    $regresar .= ' </tbody>
      </table>';
    mysqli_free_result($result);
    
    closeDB($conexion);
    return $regresar;
}

function footer(){
    include("partials/_footer.html");
}

function forms(){
    include("partials/_forms.html");
}

function head(){
    include("partials/_head.html");
}

function questions(){
    include("partials/_questions.html");
}


?>