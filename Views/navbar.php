<?php
    session_start();
?>
<div class="container">
<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand page-scroll" href="#main"><img src="images/logo.png" width="80" height="30" alt="iLand" /></a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a class="page-scroll" href="index.php">accueil</a></li>
            <?php if($_SESSION['client']=="")
            { ?>
            <li><a class="page-scroll" href="Inscription.php">Inscription</a></li>
            <li><a class="page-scroll" href="Connexion.php">Se Connecter</a></li>
            <?php 
          }
          else
          {
            ?>
            <li><a class="page-scroll" href="messages.php">Mes Messages</a></li>
            <li><a class="page-scroll" href="uhome.php">Mes postes</a></li>
            <li><a class="page-scroll" href="forum.php">Forum</a></li>
            <li><a class="page-scroll" href="Profil.php">Mon Profil</a></li>
            <li><a class="page-scroll" href="Deconnexion.php">Se Deconnecter</a></li>
            <?php 
          }
          ?>
          </ul>
        </div>
      </div>
</nav>
</div>