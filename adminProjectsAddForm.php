<?php
//I add the files I need
include("Template/nav.php");
include("Template/header.php");
require("Model/db.php");
require("Model/projectManager.php");
require("Model/imageManager.php");
require("Service/sessionManager.php");
restrictToUser();

if(isset($_GET["message"])) {    
      $message = htmlspecialchars($_GET["message"]);
      echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
?>
<div class="text-center mt-5">
    <a href="admin.php" class="btn text-white color_containerLight">Menu Administrateur</a>
</div>  
<form class="mx-auto w-50 my-5" method="POST" action="adminProjectsTreatment.php?action=add" enctype="multipart/form-data">
      <input type="hidden" class="form-control" name="id">
      <div class="form-group">
            <label for="addProjectTitle">Titre : </label>
            <input type="text" class="form-control" name="title" id="addProjectTitle" placeholder="nom" required="required">
      </div>
      <div class="form-group">
            <label for="addProjectImage">Image : </label>
            <input type="file" class="form-control" name="image" id="addProjectImage" required="required">
      </div>
      <div class="form-group">
            <label for="addProjectContain">Contenu : </label>
            <textarea class="form-control" name="content" id="addProjectContain" rows="3" required="required"></textarea>
      </div>
      <div class="form-group">
            <label for="addProjectGithub">Lien Github : </label>
            <input type="text" class="form-control" name="github" id="addProjectGithub" required="required">
      </div>
      <button type="submit" name="button" value="Envoyer" class="btn btn-primary">Envoyer</button>
</form>
<?php
//I add the files I need
include("Template/footer.php");
?>