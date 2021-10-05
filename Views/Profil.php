<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Accueil</title>
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
    

    <!-- Subscribe Form -->
    <div class="cta-sub no-color">

    <div class="split-features2">
      <div class="col-md-6 nopadding">
        <div class="split-image"> <img class="img-responsive wow fadeIn" src="<?php echo $_SESSION['clientimage']; ?>" alt="Image" /> </div>
      </div>
      <div class="col-md-6 nopadding">
        <div class="split-content">
          <h1 class="wow fadeInUp">Mon Profil<br>
           </h1>
          <ul class="wow fadeInUp">
            <li>Nom et Prenom : <?php echo $_SESSION['client'];?></li>
            <li>Numero telephone : <?php echo $_SESSION['clienttel']; ?></li>
            <li>Email : <?php echo $_SESSION['clientemail']; ?></li>
            <li>Sexe : <?php echo $_SESSION['clientsexe']; ?> </li>
            <li>Adresse : <?php echo $_SESSION['clientadresse']; ?> </li>
            <li>Date de naissance : <?php echo $_SESSION['clientdate_naiss']; ?> </li>
            <a href="ModifierProfil.php?id=<?php echo $_SESSION['idclient']; ?>" class="btn btn-action wow fadeInUp">Changer mes données </a>
          </ul>
        </div>
        </div>
      </div>
    </div>

    </div>
    
    <!-- Footer Section -->
    <?php include 'footer.php'  ?>
  </div>
  
  <!-- Scroll To Top --> 
  
  <a id="back-top" class="back-to-top page-scroll" href="#main"> <i class="ion-ios-arrow-thin-up"></i> </a> 
  
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
  