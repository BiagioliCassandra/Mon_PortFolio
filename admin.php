<?php 
//I add the files I need
include("Template/nav.php");
include("Template/header.php");

if(isset($_GET["message"])) {
    $message = htmlspecialchars($_GET["message"]);
    echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
?>
<!--The button of the admin page-->
<section class="d-flex flex-column margin_2em">
    <h2 class="tCenter margin_1em">Bienvenue <?php echo $user["firstname"]; ?></h2>
    <!--3 button for add, modify and delete the article-->
    <div class="btn-group d-block mx-auto margin_2em" role="group" aria-label="Basic example">
        <a href="projectsAdmin.php" class="btn text-white color_containerLight">Projets</a>
        <a href="biography.php" class="btn text-white color_containerLight">Biographie</a>
    </div>
    <a class="text-center color_text" href="logout.php"><i class="fas fa-sign-out-alt fa-2x"></i></a>
</section>
<?php
//I add the files I need
include("Template/footer.php");
?>