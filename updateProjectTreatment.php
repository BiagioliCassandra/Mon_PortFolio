<?php
require("Model/db.php");
require("Model/projectManager.php");
$id = htmlspecialchars($_GET["id"]);
$getProject = getProject($db, $id);

if($_GET["action"] === "update") {
    updateProject($db, $_POST);
    header("Location: projectsAdmin.php?message=Le projet a bien été modifié");
    exit;
}
?>