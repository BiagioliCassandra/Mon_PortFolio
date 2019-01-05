<?php
//I add the files I need
include("Template/nav.php");
include("Template/header.php");

if(isset($_GET["message"])) {
  $message = htmlspecialchars($_GET["message"]);
  echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
?>
<!--The form for login ton admin page-->
<form class="w-50 mx-auto my-5" method="POST" action="adminLoginTreatment.php">
  <div class="form-group">
    <label for="adminNom">Nom</label>
    <input type="text" class="form-control" name="admin_nom" id="adminNom" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="adminPassword">Password</label>
    <input type="password" class="form-control" name="admin_password" id="adminPassword" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
//I add the files I need
include("Template/footer.php");
?>