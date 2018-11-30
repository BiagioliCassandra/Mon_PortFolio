<?php
//I add the files I need
include("Template/nav.php");
include("Template/header.php");
?>
<form class="mx-auto w-50 my-5" method="POST" action="addProjectTreatment.php" enctype="multipart/form-data">
      <div class="form-group">
            <label for="addProjectTitle">Titre : </label>
            <input type="text" class="form-control" name="Title" id="addProjectTitle" placeholder="nom" required="required">
      </div>
      <div class="form-group">
            <label for="addProjectImage">Image : </label>
            <input type="file" class="form-control" name="Image" id="addProjectImage" required="required">
      </div>
      <div class="form-group">
            <label for="addProjectContain">Contenu : </label>
            <textarea class="form-control" name="Content" id="addProjectContain" rows="3" required="required"></textarea>
      </div>
      <button type="submit" name="button" value="Envoyer" class="btn btn-primary">Envoyer</button>
</form>
<?php
//I add the files I need
include("Template/footer.php");
?>