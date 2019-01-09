<?php
//I add the files I need
include("Template/nav.php");
include("Template/header.php");
require("Model/db.php");
require("Model/biographyManager.php");
require("Service/sessionManager.php");
restrictToUser();

$id = htmlspecialchars($_GET["id"]);
$biography = getBiography($db, $id);

if(isset($_GET["message"])) {    
      $message = htmlspecialchars($_GET["message"]);
      echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
?>
<div class="text-center mt-5">
    <a href="admin.php" class="btn text-white color_containerLight">Menu Administrateur</a>
</div>  
<form class="mx-auto w-50 my-5" method="POST" action="adminBiographiesTreatment.php?id=<?php echo $_GET['id']; ?>&action=update">
      <input type="hidden" class="form-control" name="id" value="<?php echo (isset($biography)?$biography["id"]:""); ?>">
      <div class="form-group">
            <label for="title_experience">Dates : </label>
            <input type="text" class="form-control" name="title_experience" id="title_experience" value="<?php echo (isset($biography)?$biography["title_experience"]:""); ?>" placeholder="Dates concernant l'expérience">
      </div>
      <div class="form-group">
            <label for="experience">Contenu de l'expérience : </label>
            <textarea class="form-control" name="experience" id="experience" rows="3"><?php echo (isset($biography)?$biography["experience"]:""); ?></textarea>
      </div>
      <button type="submit" name="button" value="Envoyer" class="btn btn-primary">Envoyer</button>
</form>
<?php
//I add the files I need
include("Template/footer.php");
?>