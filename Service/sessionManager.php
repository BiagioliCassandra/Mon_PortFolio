<?php

//Fonction de démarrage d'une session anonyme 
function initializeAnonymousSession($answers) {
  session_start();
  $_SESSION["user"] = "anonymous";
}

//Fonction de démarrage standard d'une session utilisateur
function initializeUserSession($user) {
  session_start();
  $_SESSION["user"] = $user;
}

function restrictToUser() {
  session_start();
  if(!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header("Location: index.php?message=Veuillez vous identifier pour accéder à cette page");
    exit;
  }
}

 ?>
