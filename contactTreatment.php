<?php 
require("Model/db.php");
require("Model/contactManager.php");
//I secure the data and save it to the database
if(!empty($_POST)) {
    foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
    }
    addMessageContact($db, $_POST);
    header("Location: index.php?message=Votre message a bien été envoyé!");
}

?>