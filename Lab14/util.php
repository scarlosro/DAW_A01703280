<?php

function conectarDB(){
    $conexion = mysqli_connect("localhost","root","","Fruta");
    if(!conexion){
        
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
    $sql = "SELECT * FROM Fruit WHERE name = ".$fruta;
    
    $result = mysqli_query($conexion,$sql);
    closeDB($conexion);
    return $result;
}

function baratos($precio){
    $conexion = conectarDB();
    $sql = "SELECT * FROM Fruit WHERE name <= ".$precio;
    $result = mysqli_query($conexion,$sql);
    closeDB($conexion);
    return $result;
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