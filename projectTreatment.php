<?php
require("Model/db.php");
require("Model/projectManager.php");
$id = htmlspecialchars($_GET["id"]);

if($_GET["action"] === "remove") {
    deleteProject($db, $id);
    header("Location: project.php?message=Le projet a bien été supprimer");
    exit;
}
header("Location: project.php?message=Il y a eu une erreur");
exit;
?>
    
