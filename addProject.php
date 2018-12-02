<?php
//I add the files I need
include("Template/nav.php");
include("Template/header.php");
require("Model/db.php");
require("Model/projectManager.php");
$projects = getProjects($db);
session_start();

$id = htmlspecialchars($_GET["id"]);
$getProject = getProject($db, $id);
$_SESSION["answer"] = $getProject;

if(isset($_GET["message"])) {    
      $message = htmlspecialchars($_GET["message"]);
      echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
?>
<form class="mx-auto w-50 my-5" method="POST" action="addProjectTreatment.php" enctype="multipart/form-data">
      <div class="form-group">
            <label for="addProjectTitle">Titre : </label>
            <input type="text" class="form-control" name="Title" id="addProjectTitle" <?php if(isset($_SESSION["answers"])){echo "value=" . $_SESSION['answers']['Title'];} ?> placeholder="nom" required="required">
      </div>
      <div class="form-group">
            <label for="addProjectImage">Image : </label>
            <input type="file" class="form-control" name="Image" id="addProjectImage" <?php if(isset($_SESSION["answers"])){echo "value=" . $_SESSION['answers']['Image'];} ?> required="required">
      </div>
      <div class="form-group">
            <label for="addProjectContain">Contenu : </label>
            <textarea class="form-control" name="Content" id="addProjectContain" rows="3" <?php if(isset($_SESSION["answers"])){echo "value=" . $_SESSION['answers']['Content'];} ?> required="required"></textarea>
      </div>
      <div class="form-group">
            <label for="addProjectGithub">Lien Github : </label>
            <input type="text" class="form-control" name="Github" id="addProjectGithub" <?php if(isset($_SESSION["answers"])){echo "value=" . $_SESSION['answers']['Github'];} ?> required="required">
      </div>
      <button type="submit" name="button" value="Envoyer" class="btn btn-primary">Envoyer</button>
      <a class="btn btn-primary" href="updateProjectTreatment.php?id=<?php echo $_GET['id']; ?>&action=update">Modifier</a>
</form>
<?php
//I add the files I need
include("Template/footer.php");
?>