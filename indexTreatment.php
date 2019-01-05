<?php
require("Model/db.php");
require("Model/projectManager.php");
require("Model/imageManager.php");
$projects = getProjects($db);
$images = getImages($db);
?>