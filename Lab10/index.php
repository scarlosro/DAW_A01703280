<?php
    session_start();
    require_once("util.php");
    encabezado();

    if(isset($_SESSION["nombre"])) {
        
        echo "Tu amigo ".$_SESSION["nombre"];
        echo '<img class="responsive-img" alt="El chico" src="'.$_SESSION["foto"].'">';
        include("_dateCuenta.html");
        
    } else if(isset($_POST["nombre"])) {
        
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["calcular"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        
        //Creo la variable de sesión amigo.
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["foto"] = $target_file;
        
        echo "Tu amigo ".$_SESSION["nombre"];
        
        echo '<img class="responsive-img" alt="El chico" src="'.$_SESSION["foto"].'">';
        include("_respuesta.html");
        
    } else {
        
        indice();
    }

    footer();



?>