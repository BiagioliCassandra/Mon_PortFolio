<?php 
//I add the files I need
require("Model/db.php");
require("Model/projectManager.php");
require("Model/imageManager.php");

//I'm checking that $_FILES is not empty
if(!empty($_FILES)) {
    //if so I save the true path of the image in a variable
    $path = "img/" . $_FILES["image"]["name"];
    //then I add the image to my database
    addImage($db, $_FILES["image"], $path);
    //and finally I get the last id of the image table that I saved
    $lastID = getLastImageID($db);
}
////I'm checking that $_POST is not empty
if(!empty($_POST)) {
    //I add the project in my database
    addProject($db, $_POST, $lastID["id"]);
    //I move the image to the temporary path in the true path
    move_uploaded_file($_FILES["image"]["tmp_name"], $path);
    header("Location: admin.php?message=Le projet a bien été ajouté!");
    exit;    
}
else{
    $_SESSION["answers"] = $_POST;
    header("Location: admin.php?message=Vous devez remplir le formulaire d'ajout!");
    exit;    
}


?>