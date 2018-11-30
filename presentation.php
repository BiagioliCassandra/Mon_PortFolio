<?php
//I add the files I need
include("Template/nav.php");
include("Template/header.php");
?>
<!--~~~~~~~~~~~~~~~~~~~~
      Stard main
~~~~~~~~~~~~~~~~~~~~~-->
<section>
      <h2 class="margin_2em">En ce qui me concerne</h2>
      <!--The decription in my profile-->
      <div id="container_avatar" class="flex margin_2em">
            <img id="imgAvatar" src="img/avatars.png" alt="Un avatar qui me ressemble">
            <p class="tCenter margin_2em">Je m'appelle <?php echo $user["Nom"] . " " . $user["Prenom"]; ?>, je suis <?php echo $user["Profession"] ?><br>
            Je maîtrise le <span class="color_text">responsive design</span>, le framework <span class="color_text">Bootstrap 4</span>, le <span class="color_text">MVC</span>, <span class="color_text">AJAX</span> et <span class="color_text">Angular JS</span><br>
            <span class="color_text">Motivée</span> et <span class="color_text">curieuse</span>, j'ai la chance de faire un métier qui me plaise<br>
            Entre deux séances de développement j'aime beaucoup <span class="color_text">lire</span>, regarder des <span class="color_text">animes</span> et jouer à des <span class="color_text">jeux vidéos</span>
            </p>
      </div>
<section>
<!--The start of my timeline containing my job experience-->
<section>
      <h2 class="margin_2em">Mes expériences</h2>
      <div class="flex flex_wrap margin_2em">
            <article class="margin_2em">
                  <h4>De septembre 2018 à mars 2019</h4>
                  <p><span class="color_text">Formation Développeuse Web</span> chez ADEP et Simplon à Roubaix.</p>
            </article>
            <article class="margin_2em">
                  <h4>De novembre 2017 à août 2018</h4>
                  <p><span class="color_text">Employée polyvalente</span> chez Maison Dépôt à Neuville en Ferrain.</p>
            </article>
            <article class="margin_2em">
                  <h4>D'avril 2015 à septembre 2017</h4>
                  <p><span class="color_text">Hôtesse de caisse</span> chez Supermarché Casino à Remiremont.</p>
            </article>
      </div>
</section> 
<!--~~~~~~~~~~~~~~~~~~~~
      End main
~~~~~~~~~~~~~~~~~~~~~-->
<?php
include("Template/footer.php");
?>