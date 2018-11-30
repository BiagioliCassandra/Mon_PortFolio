<?php 
//I add the files I need
include("Template/nav.php");
include("Template/header.php");
?>
<!--The button of the admin page-->
<section class="d-flex flex-column margin_2em">
    <h2 class="tCenter margin_1em">Bienvenue <?php echo $user["Prenom"]; ?></h2>
    <!--3 button for add, modify and delete the article-->
    <div class="btn-group d-block mx-auto margin_2em" role="group" aria-label="Basic example">
        <a href="project.php" class="btn text-white color_containerLight">Projets</a>
        <a href="biography.php" class="btn text-white color_containerLight">Biographie</a>
    </div>
    <a class="text-center" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
</section>
<?php
//I add the files I need
include("Template/footer.php");
?>