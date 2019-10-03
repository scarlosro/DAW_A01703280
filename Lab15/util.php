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

function eliminar($nombre){
    $conexion = conectarDB();
    $sql="DELETE FROM Fruit WHERE nombre='".$nombre."'"; 
    echo $sql;
    $result= $conexion->query($sql);
    
    closeDB($conexion);
    return $result;
}

function insertar($nombre,$units,$quantity,$price,$country){
    $conexion = conectarDB();
    // insert command specification 
    $query='INSERT INTO Fruit (nombre,units,quantity,price, country) VALUES (?,?,?,?,?) ';
    // Preparing the statement 
    if (!($statement = $conexion->prepare($query))) {
        die("No se pudo preparar la consulta para la bd: (" . $db->errno . ") " . $conexion->error);
    }
    // Binding statement params 
    if (!$statement->bind_param($nombre, $units, $quantity, $price, $country)) {
        die("Falló la vinculación de los parámetros: (" . $statement->errno . ") " . $statement->error); 
    }
    
    // Executing the statement
    if (!$statement->execute()) {
        die("Falló la ejecución de la consulta: (" . $statement->errno . ") " . $statement->error);
    } 

    closeDB($db);
    
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