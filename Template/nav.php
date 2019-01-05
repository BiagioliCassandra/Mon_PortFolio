<?php
//I add the files I need
require("Model/db.php");
require("Model/userManager.php");
//I store the data of the user table in a variable
$user = getUser($db);
?>

<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>PortFolio <?php echo $user["name"] . " " . $user["firstname"]; ?></title>
  <meta name="description" content="Mon PortFolio">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
<!--The navigation bar above the header for tablette and desktop-->
<nav id="nav_tablette" class="tablette desktop color_container">
      <div>
            <h1 class="tCenter marginLeft_2em"><?php echo $user["name"] . " " . $user["firstname"]; ?></h1>
      </div>
      <div>
            <a class="policeText_links puce color_container" href="index.php">Accueil</a>
            <a class="policeText_links puce color_container" href="presentation.php">Mon parcours</a>
            <a class="policeText_links puce color_container" href="contact.php">Contact</a>
      </div>
</nav>
<!--The navigation bar above the header for mobile-->
<nav id="mobileNav" class="mobileOnly color_container flex">
      <div class="margin_1em">
            <i class="fas fa-laptop-code fa-3x"></i>
      </div>
      <div id="myLinks">
            <div class="margin_1em">
                  <a class="policeText_links puce color_container" href="index.php">Accueil</a>
                  <a class="policeText_links puce color_container" href="presentation.php">Mon parcours</a>
                  <a class="policeText_links puce color_container" href="contact.php">Contact</a>
            </div>
      </div>
      <a href="javascript:void(0);" id="iconNav" class="color_container" onclick="myFunction()">
            <i class="fas fa-bars fa-2x"></i>
      </a>
</nav>
<script>
function myFunction() {
      var x = document.getElementById("myLinks");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
}
</script>