<?php
require("Model/db.php");
require("Model/biographyManager.php");

if($_GET["action"] == "add") {
        //I add the project in my database
        if(addBiography($db, $_POST)) {
            header("Location: adminBiographies.php?message=La biographie a bien été enregistrée!");
            exit;
        }
}


if($_GET["action"] == "update") {
    $id = htmlspecialchars($_GET["id"]);
    //I add the project in my database
    if(updateBiography($db, $_POST, $id)) {
        header("Location: adminBiographies.php?message=La biographie a bien été modifiée!");
        exit;    
    }
}


if($_GET["action"] == "remove") {
    $id = htmlspecialchars($_GET["id"]);
    deleteBiography($db, $id);
    header("Location: adminBiographies.php?message=La biographie a bien été supprimée!");
    exit;
}

?>