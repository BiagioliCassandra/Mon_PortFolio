<?php
//I add the files I need
include("Template/nav.php");
include("Template/header.php");
require("Model/db.php");
require("Model/biographyManager.php");
$biographies = getBiographies($db);

if(isset($_GET["message"])) {
      $message = htmlspecialchars($_GET["message"]);
      echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
?>
<!--~~~~~~~~~~~~~~~~~~~~
      Stard main
~~~~~~~~~~~~~~~~~~~~~-->
<section>
      <h2 class="margin_2em">En ce qui me concerne</h2>
      <!--The decription in my profile-->
      <div id="container_avatar" class="flex margin_2em">
            <img id="imgAvatar" src="img/avatars.png" alt="Un avatar qui me ressemble">
            <p class="tCenter margin_2em">Je m'appelle <?php echo $user["name"] . " " . $user["firstname"]; ?>, je suis <?php echo $user["job"] ?><br>
            <?php echo $user["presentation"]; ?>
            </p>
      </div>
<section>
<!--The start of my timeline containing my job experience-->
<section>
      <h2 class="margin_2em">Mes expériences</h2>
      <?php 
      foreach($biographies as $key => $biography) {
      ?>
      <div class="flex flex_wrap margin_2em tCenter">
            <article class="margin_2em">
                  <h4><?php echo $biography["title_experience"]; ?></h4>
                  <p><?php echo $biography["experience"]; ?></p>
            </article>
      </div>
</section> 
<!--~~~~~~~~~~~~~~~~~~~~
      End main
~~~~~~~~~~~~~~~~~~~~~-->
<?php
}
include("Template/footer.php");
?>