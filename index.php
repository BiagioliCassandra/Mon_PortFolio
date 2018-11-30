<?php
//I add the files I need
include("Template/nav.php");
include("Template/header.php");
?>
<!--~~~~~~~~~~~~~~~~~~~~
      Stard main
~~~~~~~~~~~~~~~~~~~~~-->
<!--The 9 projects I chose among all my projects. They are in groups of 3-->
<section id="projects">
      <h3 class="margin_2em">Mes projets</h3>
      <div class="flex flex_wrap div_3img">
            <div class="tCenter margin_1em articleContainer">
                  <img class="img_projects" src="img/mignardises_emmanuel.png" alt="Une capture d'écran de mon projet les Mignardises d'Emmanuel">
                  <!-- Button trigger modal -->
                  <div class="buttonContainer">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mignardises">
                              <i class="fas fa-plus"></i>
                        </button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="mignardises" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Les mignardises d'Emmanuel</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                    </div>
                                    <div class="modal-body">
                                          <p>Intégration HTML/CSS</p>
                                          <p>Compréhension et application du Responsive Design avec l'usage des médias queries en CSS</p>
                                          <p>Gestion des images pour le responsive design</p>
                                          <p>Production d’un code CSS maintenable sur tous appareils</p>
                                          <p>Compréhension et application du Mobile First</p>
                                          <p>Compréhension de l’expérience utilisateur sur les appareils mobiles</p>
                                          <p>Application poussée du principe DRY</p>
                                                
                                    </div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                          <a class="puce" href="https://github.com/BiagioliCassandra/Patisserie"><button type="button" class="btn text-white color_containerLight">GitHub</button></a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="tCenter margin_1em articleContainer">
                  <img class="img_projects" src="img/twitter.png" alt="Une capture d'écran de mon projet, une copie du site twitter">
                  <div class="buttonContainer">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#twitter">
                              <i class="fas fa-plus"></i>
                        </button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="twitter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Une copie du site twitter</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                    </div>
                                    <div class="modal-body">
                                          <p>Utiliser les attributs HTML</p>
                                          <p>Perfectionner la sémantique de son HTML</p>
                                          <p>Positionner ses éléments</p>
                                          <p>Mettre en forme ses éléments HTML via le CSS</p>
                                          <p>Utiliser des ressources extérieures pour les polices et les icônes</p>
                                          <p>Produire un CSS maintenable et réutilisable</p>
                                          <p>Comprendre le concept DRY</p>
                                    </div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                          <a class="puce" href="https://github.com/BiagioliCassandra/twitter"><button type="button" class="btn text-white color_containerLight">GitHub</button></a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="tCenter margin_1em articleContainer">
                  <img class="img_projects" src="img/emargement.png" alt="Une capture d'écran de mon projet, une application d'émargement">
                  <div class="buttonContainer">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adep">
                              <i class="fas fa-plus"></i>
                        </button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="adep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Une application d'emargement</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                    </div>
                                    <div class="modal-body">
                                          ...
                                    </div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                          <a class="puce" href="https://github.com/BiagioliCassandra/ProjetAdep"><button type="button" class="btn text-white color_containerLight">GitHub</button></a>
                                    </div>
                              </div>
                        </div>
                  </div>      
            </div>
      </div>
      <!-- <div class="flex flex_wrap div_3img">
            <div class="tCenter margin_1em">
                  <img class="img_projects" src="" alt="">
            </div>
            <div class="tCenter margin_1em">
                  <img class="img_projects" src="" alt="">
            </div>
            <div class="tCenter margin_1em">
                  <img class="img_projects" src="" alt="">
            </div>
      </div>
      <div class="flex flex_wrap div_3img">
            <div class="tCenter margin_1em">
                  <img class="img_projects" src="" alt="">
            </div>
            <div class="tCenter margin_1em">
                  <img class="img_projects" src="" alt="">
            </div>
            <div class="tCenter margin_1em">
                  <img class="img_projects" src="" alt="">
            </div>
      </div> -->
</section> 
<!--~~~~~~~~~~~~~~~~~~~~
      End main
~~~~~~~~~~~~~~~~~~~~~-->
<?php
//I add the files I need
include("Template/footer.php");
?>