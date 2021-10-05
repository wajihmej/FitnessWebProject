<?php 

include "../Model/client.php";
include "../Controller/ClientC.php";


if($_POST['connecter'])
{

   $email=$_POST["email"];
   $clientC = new ClientC();

   $liste=$clientC->recupereremail($email);

   //var_dump($res);
    foreach($liste as $row){
      $mdp=$row['mdp'];
    }
    if (password_verify($_POST["mdp"],$mdp))
    {
    $liste=$clientC->recupereremail($email);
     foreach($liste as $row){
      $id=$row['id'];
      $nom=$row['nom'];
      $prenom=$row['prenom'];
      $email=$row['email'];
      $mdp=$row['mdp'];
      $tel=$row['tel'];
      $adresse=$row['adresse'];
      $sexe=$row['sexe'];
      $date_naiss=$row['date_nais'];
      $image=$row['image'];
    }

         $_SESSION['idclient'] = $id;
         $_SESSION['client'] = $nom ." ".$prenom;
         $_SESSION['clientemail'] = $email;
         $_SESSION['clienttel'] = $tel;
         $_SESSION['clientadresse'] = $adresse;
         $_SESSION['clientsexe'] = $sexe;
         $_SESSION['clientdate_naiss'] = $date_naiss;
         $_SESSION['clientimage'] = $image;

         header("location: index.php");

    }
   else
   {
             header("location: Connexion.php");
   }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Se Connecter</title>
<link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="iLand Multipurpose Landing Page Template">
<meta name="keywords" content="iLand HTML Template, iLand Landing Page, Landing Page Template">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="css/animate.css">
<!-- Resource style -->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/ionicons.min.css">
<!-- Resource style -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="wrapper">
   <?php include 'navbar.php'  ?>

    <div class="main app form" id="main"><!-- Main Section-->
          <div class="review-section" id="review">
    

    <!-- Subscribe Form -->
    <div class="cta-sub no-color">
      <div class="container">
        <div class="cta-inner">
          <h1 class="wow fadeInUp" data-wow-delay="0s">Se connecter</h1>
          <p class="wow fadeInUp" data-wow-delay="0.2s"> Remplie les champs suivants<br class="hidden-xs">
            </p>
          <div class="form wow fadeInUp" data-wow-delay="0.3s">
            <form class="subscribe-form center-form wow zoomIn" method="post" enctype="multipart/form-data" >
              <div>
                    <input class="mail" type="email" name="email" placeholder="Email" id="email">
              </div>
              <p></p>
              <div>
                    <input class="mail" type="password" name="mdp" placeholder="Mot de passe" id="mdp">
              </div>
              <p></p>
              <div>
                    <input class="submit-button" type="submit" value="Se connecter" name="connecter" id="connecter">
              </div>
            </form>
            <!-- subscribe message -->
            <div id="mesaj"></div>
            <!-- subscribe message --> 
          </div>
        </div>
      </div>
    </div>
        </div>

    <!-- Footer Section -->
 <?php include 'footer.php' ?>
  
  
  <!-- Scroll To Top Ends--> 
  
</div>
<!-- Main Section -->
</div>
<!-- Wrapper--> 

<!-- Jquery and Js Plugins --> 
<script type="text/javascript" src="js/jquery-2.1.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/plugins.js"></script> 
<script type="text/javascript" src="js/menu.js"></script> 
<script type="text/javascript" src="js/custom.js"></script> 
<script src="js/jquery.subscribe.js"></script>
</body>
</html>
