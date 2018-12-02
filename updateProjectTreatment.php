<?php
require("Model/db.php");
require("Model/projectManager.php");
$id = htmlspecialchars($_GET["id"]);

if($_GET["action"] === "update") {
    updateProject($db, $_POST);
    header("Location: project.php?message=Le projet a bien été modifier");
    exit;
}
?>