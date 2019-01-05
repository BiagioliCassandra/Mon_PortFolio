<?php 
//I add the files I need
include("Template/nav.php");
include("Template/header.php");

if(isset($_GET["message"])) {
    $message = htmlspecialchars($_GET["message"]);
    echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
?>
<section>
    <h2 class="margin_1em text-center">Ma biographie</h2>
    <div class=" text-center btn-group d-block mx-auto" role="group" aria-label="Basic example">
        <a class="btn text-white color_containerLight" href="">Ajouter un projet</a>
        <a href="admin.php" class="btn text-white color_containerLight">Menu Administrateur</a>
    </div>  
</section>
<?php
//I add the files I need
include("Template/footer.php");
?>