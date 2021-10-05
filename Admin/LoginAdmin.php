<?php
session_start();

if($_SESSION['login']!="")
{

    header("location: index.php");
}
include "../Model/admin.php";
include "../Controller/AdminC.php";

    if(isset($_POST['Connexion']))
   {
    $email=$_POST["email"];
    $adminC = new AdminC();

   $liste=$adminC->recupereremail($email);

   //var_dump($res);
    foreach($liste as $row){
      $mdp=$row['mdp'];
    }
    if (password_verify($_POST["password"],$mdp))
    {
    $adminC->ajouterAdminDernieracc($email);
    $liste=$adminC->recupereremail($email);
     foreach($liste as $row){
      $id=$row['id'];
      $nom=$row['nom'];
      $email=$row['email'];
      $tel=$row['tel'];
      $image=$row['image'];
      $dernier_acc=$row['dernier_acc'];
    }

         $_SESSION['id'] = $id;
         $_SESSION['login'] = $email;
         $_SESSION['nom'] = $nom;
         $_SESSION['tel'] = $tel;
         $_SESSION['image'] = $image;
         $_SESSION['dernier_acc'] = $dernier_acc;

         header("location: index.php");

    }
   else
   {
             header("location: loginAdmin.php");
   }
}
   
?>
<!DOCTYPE html>
<html>


<!-- Mirrored from demo.lorvent.com/fitness/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 14:41:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- global level css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="vendors/iCheck/skins/all.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link href="css/custom_css/login.css" rel="stylesheet" type="text/css">
    <!-- end of page level styles-->
</head>

<body>
    <div class="container">
        <div class="full-content-center">
            <div class="box bounceInLeft animated">
                <img src="img/logo.png" class="logo" alt="image not found">
                <h3 class="text-center">Connexion</h3>
                <form class="form" id="log_in" method="post">
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                    </div>
                    <div class="checkbox text-left">
                        <label>
                            <input type="checkbox"> Maintenir la connexion
                        </label>
                    </div>
                    <input type="submit" class="btn btn-block btn-warning" value="Connexion" name="Connexion">
                </form>
                <p class="text-right"><a href="RecupererMdpAdmin.php" class="text-warning forgot_color" style="color: white">Mot de passe oublié ?</a></p>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="vendors/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="js/custom_js/login1.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 14:41:55 GMT -->
</html>
