<?php
session_start();
if(empty($_SESSION["username"])) {
    echo "SECOND";
    if(empty($_POST["username"])){
        header('Location: index.php');
        echo "first";
    }
    else{
        echo "it was true";
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        
        
    }
}

if(htmlspecialchars($_POST["username"]) == "Carlos" && htmlspecialchars($_POST["password"]) == "CARLOS"){
        if(($_SESSION["username"] == "Carlos")&&($_SESSION["password"] == "CARLOS")) {
          echo "all was true";
            include("partials/_head.html");
          include("partials/_up.html");
	        include("partials/_footer.html");
    	}
    }else if(isset($_POST["username"]) || isset($_POST["password"]) ) {
        $error = "Datos incorrectos";
        include("index.php");
    } else {
        include("index.php");
    }

?>