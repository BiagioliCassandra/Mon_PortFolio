<?php
//We get the current session
session_start();
//We empty it of its variables
session_unset();
//We destroy it
session_destroy();
// We redirect the user to the login page
header("Location: index.php?success=Vous avez été déconnecté, à bientôt ^^");
exit;
?>