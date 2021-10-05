<?php 
  session_start();

include "../Model/client.php";
include "../Controller/ClientC.php";

if (isset($_GET['id'])){

$clientC = new ClientC();
$result=$clientC->recupererClient($_GET['id']);
foreach($result as $row){
$id=$row['id'];
$nom=$row['nom'];
$prenom=$row['prenom'];
$email=$row['email'];
$mdp=$row['mdp'];
$tel=$row['tel'];
$adresse=$row['adresse'];
$sexe=$row['sexe'];
$date_nais=$row['date_nais'];
$image=$row['image'];
    }

if($_POST['Modifier'])
{
if( isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['mdp']) and isset($_POST['tel']) and isset($_POST['adresse'])){
$client=new Client($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['mdp'],$_POST['tel'],$_POST['adresse'],$_POST['sexe'],$_POST['date_nais']);

    $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];

    $folder = "./images/client/".$filename ;
                if($filename!="")
        {
    move_uploaded_file($tempname, $folder);
    $clientC->ajouterClientimg($_POST['email'],$folder);
             $_SESSION['clientimage'] = $folder;

    }

//Partie3
    if($_POST['mdp'] != "")
    {
        $clientC->modifierClientPwd($client,$_GET['id']);
    }
    else
    {
        $clientC->modifierClient($client,$_GET['id']);
    }
         $_SESSION['client'] = $_POST['nom'] ." ".$_POST['prenom'];
         $_SESSION['clientemail'] = $_POST['email'];
         $_SESSION['clienttel'] = $_POST['tel'];
         $_SESSION['clientadresse'] = $_POST['adresse'];
         $_SESSION['clientsexe'] = $_POST['sexe'];
         $_SESSION['clientdate_naiss'] = $_POST['date_nais'];

header('Location: Profil.php');
    
}else{
    echo "vérifieer les champs";
    die();
}
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>S'inscrire</title>
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
      <div class="container">
        <div class="cta-inner">
          <h1 class="wow fadeInUp" data-wow-delay="0s">Modifier Profil</h1>
            </p>
          <div class="form wow fadeInUp" data-wow-delay="0.3s">
            <form class="subscribe-form center-form wow zoomIn" method="post" enctype="multipart/form-data" >
              <div>
                    <input class="mail" type="text" name="nom" placeholder="Nom" id="nom" value="<?php echo $nom; ?>">
              </div>
              <p></p>
              <div>
                    <input class="mail" type="text" name="prenom" placeholder="Prenom" id="prenom" value="<?php echo $prenom; ?>">
              </div>
              <p></p>
              <div>
                    <input class="mail" type="email" name="email" placeholder="Email" id="email" value="<?php echo $email; ?>">
              </div>
              <p></p>
              <div>
                    <input class="mail" type="password" name="mdp" placeholder="Mot de passe" id="mdp">
              </div>
              <p></p>
              <div>
                    <input class="mail" type="number" name="tel" placeholder="Telephone" id="tel" value="<?php echo $tel; ?>">
              </div>
              <p></p>
              <div>
                    <input class="mail" type="text" name="adresse" placeholder="Adresse" id="adresse" value="<?php echo $adresse; ?>">
              </div>
              <p>Date de naissance</p>
              <div>
                    <input class="mail" type="date" name="date_nais" id="date_nais" value="<?php echo $date_nais; ?>">
              </div>
              <p></p>
              <div class="item-select">
                  <!-- COLOR -->
                  <p>Sexe</p>
                  <select class="selectpicker" name="sexe">
                    <option value="<?php echo $sexe; ?>">Selectionner un type</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                  </select>
              </div>
              <p></p>
                <div >
                    <p>Select image to upload:</p>
                    <div class="col-10">
                    <input class="form-control" input type="file" name="image" >
                    </div>
                </div>
                <p></p>
              <div>
                    <input class="submit-button" type="submit" value="Modifier" name="Modifier" id="Modifier">
              </div>
            </form>
            <!-- subscribe message -->
            <div id="mesaj"></div>
            <!-- subscribe message --> 
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
