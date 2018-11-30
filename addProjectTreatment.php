<?php 
//I add the files I need
require("Model/db.php");
require("Model/projectManager.php");
require("Model/imageManager.php");

if(!empty($_FILES)) {
    $path = "img/" . $_FILES["Image"]["name"];
    addImage($db, $_FILES["Image"], $path);
}
/* if()*/
$lastID = getLastImageID($db);
addProject($db, $_POST, $lastID["id"]);
move_uploaded_file($_FILES["Image"]["tmp_name"], $path);
?>