<?php 
//I add the files I need
include("Template/nav.php");
include("Template/header.php");
require("Model/db.php");
require("Model/biographyManager.php");
require("Service/sessionManager.php");
restrictToUser();
$biographies = getBiographies($db);

if(isset($_GET["message"])) {
    $message = htmlspecialchars($_GET["message"]);
    echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
?>
<section>
    <h2 class="margin_1em text-center">Ma biographie</h2>
    <div class=" text-center btn-group d-block mx-auto" role="group" aria-label="Basic example">
        <a class="btn text-white color_containerLight" href="adminBiographiesAddForm.php">Ajouter une bio</a>
        <a href="admin.php" class="btn text-white color_containerLight">Menu Administrateur</a>
    </div>  
    <?php 
    foreach ($biographies as $key => $biography) {
    ?>
    <div class="margin_2em list-group">
        <header class="d-flex w-100 justify-content-between align-items-center">
            <h3 class="mb-5"><?php echo $biography["title_experience"]; ?></h3>
            <div>
                <a class="puce color_text" href="adminBiographiesUpdateForm.php?id=<?php echo $biography['id'] ?>"><i class="fas fa-edit fa-2x"></i><a>
                <a class="puce color_text" href="adminBiographiesTreatment.php?id=<?php echo $biography['id']; ?>&action=remove"><i class="fas fa-times fa-2x"></i></a>
            <div>
        </header>
        <p class="mb-1"><?php echo $biography["experience"]; ?></p>
    </div>
</section>
<?php
    }
//I add the files I need
include("Template/footer.php");
?>