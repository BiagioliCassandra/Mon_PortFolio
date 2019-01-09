<?php
//I add the files I need
include("Template/nav.php");
include("Template/header.php");
require("Model/db.php");
require("Model/biographyManager.php");
session_start();

if(isset($_GET["message"])) {    
      $message = htmlspecialchars($_GET["message"]);
      echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
?>
<div class="text-center mt-5">
    <a href="admin.php" class="btn text-white color_containerLight">Menu Administrateur</a>
</div>  
<form class="mx-auto w-50 my-5" method="POST" action="adminBiographiesTreatment.php?action=add">
      <div class="form-group">
            <label for="title_experience">Dates : </label>
            <input type="text" class="form-control" name="title_experience" id="title_experience" placeholder="Dates concernant l'expérience">
      </div>
      <div class="form-group">
            <label for="experience">Contenu de l'expérience : </label>
            <textarea class="form-control" name="experience" id="experience" rows="3"></textarea>
      </div>
      <button type="submit" name="button" value="Envoyer" class="btn btn-primary">Envoyer</button>
</form>
<?php
//I add the files I need
include("Template/footer.php");
?>