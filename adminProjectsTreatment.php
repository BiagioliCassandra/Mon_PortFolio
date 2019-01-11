<?php
require("Model/db.php");
require("Model/projectManager.php");
require("Model/imageManager.php");
require("Service/sessionManager.php");

$id = htmlspecialchars($_GET["id"]);
$project = getProject($db, $id);
$imageID = $project["image_id"];
$imageName = getImageName($db, $imageID);

if($_GET["action"] == "add") {
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
        header("Location: adminProjects.php?message=Le projet a bien été ajouté!");
        exit;    
    }
    else{
        $_SESSION["answers"] = $_POST;
        header("Location: adminProjects.php?message=Vous devez remplir le formulaire d'ajout!");
        exit;    
    }
}

if($_GET["action"] == "update") {

    //I'm checking that $_FILES is not empty
    if(!empty($_FILES)) {
        //if so I save the true path of the image in a variable
        $path = "img/" . $_FILES["image"]["name"];
        //then I add the image to my database
        updateImage($db, $_FILES["image"], $path);
    }
    ////I'm checking that $_POST is not empty
    if(!empty($_POST)) {
        //I add the project in my database
        updateProject($db, $_POST, $id);
        //I move the image to the temporary path in the true path
        move_uploaded_file($_FILES["image"]["tmp_name"], $path);
        header("Location: adminProjects.php?message=Le projet a bien été modifié!");
        exit;    
    }
}

if($_GET["action"] == "remove") {
    deleteProject($db, $id);
    header("Location: adminProjects.php?message=Le projet a bien été supprimé");
    exit;
}
?>
    
