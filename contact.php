<?php
//I add the files I need
include("Template/nav.php");
include("Template/header.php");

if(isset($_GET["message"])) {
      $message = htmlspecialchars($_GET["message"]);
      echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
?>
<!--~~~~~~~~~~~~~~~~~~~~
      Stard main
~~~~~~~~~~~~~~~~~~~~~-->
<!--the form of the contact page-->
<section>
      <h2 class="margin_2em">Pour me contacter</h2>
      <form class="mx-auto w-50 my-5" method="POST" action="contactTreatment.php">
            <div class="form-group">
                  <label for="contactName">Nom : </label>
                  <input type="text" class="form-control" name="contact_name" id="contactName" placeholder="nom" required="required">
            </div>
            <div class="form-group">
                  <label for="contactFirstname">Prénom : </label>
                  <input type="text" class="form-control" name="contact_firstname" id="contactFirstname" placeholder="prénom">
            </div>
            <div class="form-group">
                  <label for="contactTel">Téléphone : </label>
                  <input type="number" class="form-control" name="contact_tel" id="contactTel" placeholder="0101010101">
            </div>
            <div class="form-group">
                  <label for="contactMail">Adresse mail : </label>
                  <input type="email" class="form-control" name="contact_mail" id="contactMail" placeholder="name@example.com" required="required">
            </div>
            <div class="form-group">
                  <label for="contactMessage">Votre message</label>
                  <textarea class="form-control" name="contact_message" id="contactMessage" rows="3" placeholder="Vous pouvez me laisser un message si vous le souhaiter!"></textarea>
            </div>
            <button type="submit" name="button" value="Envoyer" class="btn btn-primary">Envoyer</button>
      </form>
</section>
<!--~~~~~~~~~~~~~~~~~~~~
      End main
~~~~~~~~~~~~~~~~~~~~~-->
<?php
//I add the files I need
include("Template/footer.php");
?>