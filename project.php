<?php 
//I add the files I need
include("Template/nav.php");
include("Template/header.php");
require("Model/db.php");
require("Model/projectManager.php");
$projects = getProjects($db);

if(isset($_GET["message"])) {
    $message = htmlspecialchars($_GET["message"]);
    echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
?>
<section>
    <h2 class="margin_2em text-center">Mes projets</h2>
    <div class="text-center">
        <a class="btn text-white color_containerLight" href="addProject.php">Ajouter un projet</a>
    </div>  
    <?php 
    foreach ($projects as $key => $project) {
    ?>
    <div class="margin_2em list-group">
        <header class="d-flex w-100 justify-content-between align-items-center">
            <h3 class="mb-5"><?php echo $project["Title"]; ?></h3>
            <div>
                <a class="puce color_text" href="addProject.php?id=<?php echo$project['id'] ?>&action=update"><i class="fas fa-edit fa-2x"></i><a>
                <a class="puce color_text" href="projectTreatment.php?id=<?php echo$project['id']; ?>&action=remove"><i class="fas fa-times fa-2x"></i></a>
            <div>
        </header>
        <p class="mb-1"><?php echo $project["Content"]; ?></p>
    </div>
</section>
<?php
    }
//I add the files I need
include("Template/footer.php");
?>