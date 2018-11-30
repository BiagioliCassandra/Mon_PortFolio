<?php
//I add the files I need
require("Model/db.php");
require("Model/userManager.php");
$user = getUser($db);
//I check if the form is not empty or if it is not null
if(isset($_POST) || !empty($_POST)) {
    //I secure the data and save it to the database
    foreach ($_POST as $key => $value) {
        $_POST[$key] = htmlspecialchars($value);
    }
    if($user["Nom"] === $_POST["admin_nom"] && $_POST["admin_password"] === $user["Password"]) {
        session_start();
        $_SESSION["user"] = $user;
        header("Location: admin.php?message=Connexion réussie!");
        exit;
    }
    else {
        header("Location: index.php?message=Nous n'avons aucun utilisateur avec ce nom ou ce mot de passe");
        exit;
    }  
}
else {
header("Location: index.php?message=Le formulaire n'est pas remplis!");
exit; 
}
?>