<?php
//I add the files I need
include("Template/nav.php");
include("Template/header.php");
require("Model/db.php");
require("Model/projectManager.php");
require("Model/imageManager.php");
$projects = getProjects($db);

if(isset($_GET["message"])) {    
      $message = htmlspecialchars($_GET["message"]);
      echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
?>
<!--~~~~~~~~~~~~~~~~~~~~
      Stard main
~~~~~~~~~~~~~~~~~~~~~-->
<!--The 9 projects I chose among all my projects. They are in groups of 3-->
<section>
      <h3 class="margin_2em">Mes projets</h3>
      <?php
      foreach($projects as $key => $project) {
      ?>
      <div class="d-flex justify-content-center">
            <div class="tCenter articleContainer">
                  <img src="<?php echo $project["path"]; ?>" alt="Une capture d'écran de mon projet <?php echo $project["Title"]; ?>">
                  <!-- Button trigger modal -->
                  <div class="buttonContainer">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $project["id"]; ?>">
                              <i class="fas fa-plus"></i>
                        </button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal<?php echo $project["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel"><?php echo $project["title"]; ?></h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                    </div>
                                    <div class="modal-body">
                                          <?php echo $project["content"]; ?>
                                    </div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                          <a class="puce btn text-white color_containerLight" href="<?php echo $project["github_link"]; ?>">GitHub</a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <?php 
      }
      ?>
</section> 
<!--~~~~~~~~~~~~~~~~~~~~
      End main
~~~~~~~~~~~~~~~~~~~~~-->
<?php
//I add the files I need
include("Template/footer.php");
?>