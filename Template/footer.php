<?php
//I store the Year in a variable
$annee = date("Y");
?>
</main>
<!--~~~~~~~~~~~~~~~~~~~~
      Stard footer
~~~~~~~~~~~~~~~~~~~~~-->
<footer class="color_container">
      <div>
            <div id="footer_icons" class="flex">
                  <a class="color_text" href="https://github.com/BiagioliCassandra"><i class="fab fa-github fa-2x"></i></a>
                  <a class="color_text" href="https://www.linkedin.com/in/cassandra-biagioli-23a704a9/"><i class="fab fa-linkedin fa-2x"></i></a>
                  <a class="color_text" href="https://twitter.com/BiagioliCass"><i class="fab fa-twitter fa-2x"></i></a>
                  <a class="color_text" href="https://www.codewars.com/dashboard"><i class="fas fa-code fa-2x"></i></a>
            </div>
      </div>
      <div>
            <p class="tCenter"><?php echo $user["name"] . " " . $user["firstname"] . " " . "©" . $annee;?> \<a class="puce color_container" href="">\ Mentions légales</a></p>  
      </div>
</footer>
<!--~~~~~~~~~~~~~~~~~~~~
      End footer
~~~~~~~~~~~~~~~~~~~~~-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
