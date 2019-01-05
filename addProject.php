<?php
//I add the files I need
include("Template/nav.php");
include("Template/header.php");
require("Model/db.php");
require("Model/projectManager.php");
session_start();

if(isset($_GET["message"])) {    
      $message = htmlspecialchars($_GET["message"]);
      echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
?>
<form class="mx-auto w-50 my-5" method="POST" action="addProjectTreatment.php" enctype="multipart/form-data">
      <div class="form-group">
            <label for="addProjectTitle">Titre : </label>
            <input type="text" class="form-control" name="title" id="addProjectTitle" <?php if(isset($project)){echo "value=" . $project['title'];} ?> placeholder="nom" required="required">
      </div>
      <div class="form-group">
            <label for="addProjectImage">Image : </label>
            <input type="file" class="form-control" name="image" id="addProjectImage" <?php if(isset($project)){echo "value=" . $project['image'];} ?> required="required">
      </div>
      <div class="form-group">
            <label for="addProjectContain">Contenu : </label>
            <textarea class="form-control" name="content" id="addProjectContain" rows="3" <?php if(isset($project)){echo "value=" . $project['content'];} ?> required="required"></textarea>
      </div>
      <div class="form-group">
            <label for="addProjectGithub">Lien Github : </label>
            <input type="text" class="form-control" name="github" id="addProjectGithub" <?php if(isset($project)){echo "value=" . $project['github'];} ?> required="required">
      </div>
      <button type="submit" name="button" value="Envoyer" class="btn btn-primary">Envoyer</button>
      <a class="btn btn-primary" href="updateProjectTreatment.php?id=<?php echo $_GET['id']; ?>&action=update">Modifier</a>
</form>
<?php
//I add the files I need
include("Template/footer.php");
?>