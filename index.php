<?php
//I add the files I need
include("Template/nav.php");
include("Template/header.php");
require("Model/db.php");
require("Model/projectManager.php");
require("Model/imageManager.php");
$projects = getProjects($db);
$images = getImages($db);

if(isset($_GET["message"])) {    
      $message = htmlspecialchars($_GET["message"]);
      echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
?>
<!--~~~~~~~~~~~~~~~~~~~~
      Stard main
~~~~~~~~~~~~~~~~~~~~~-->
<!--The 9 projects I chose among all my projects. They are in groups of 3-->
<section id="projects">
      <h3 class="margin_2em">Mes projets</h3>
      <?php
      foreach($projects as $key => $project) {
      ?>
      <div class="flex flex_wrap div_3img">
            <div class="tCenter margin_1em articleContainer">
                  <img class="img_projects" src="<?php echo $image["Path"]; ?>" alt="Une capture d'écran de mon projet <?php echo $project["Title"]; ?>">
                  <!-- Button trigger modal -->
                  <div class="buttonContainer">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                              <i class="fas fa-plus"></i>
                        </button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel"><?php echo $project["Title"]; ?></h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                    </div>
                                    <div class="modal-body">
                                          <?php echo $project["Content"]; ?>
                                    </div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                          <a class="puce btn text-white color_containerLight" href="<?php echo $project["Github_link"]; ?>">GitHub</a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</section> 
<!--~~~~~~~~~~~~~~~~~~~~
      End main
~~~~~~~~~~~~~~~~~~~~~-->
<?php
}
//I add the files I need
include("Template/footer.php");
?>