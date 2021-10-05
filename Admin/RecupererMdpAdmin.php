<?php
include "../Model/admin.php";
include "../Controller/AdminC.php";

if(isset($_POST['Submit']))
{
   $email=$_POST["email"];
   $adminC = new AdminC();

   $liste=$adminC->recupereremail($email);
     foreach($liste as $row){
      $id=$row['id'];
      $nom=$row['nom'];
      $email=$row['email'];
      $mdp=$row['mdp'];
      $tel=$row['tel'];
      $image=$row['image'];
    }
  if($nom!=""){
   $token="azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLM1234567890";
   $token=str_shuffle($token);
   $token=substr($token,0,10);
   echo $token;
   $adminC->ajouterAdminToken($email,$token);


  header("location: journal/sendmail.php?email=".$email."&token=".$token);
   }
   else
   {
    header("location: RecupererMdpAdmin.php");
   }
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/user_forgot.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 14:42:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Recuperer mot de passe</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <h3 class="text-center">Mot de passe oublié</h3>
                <form class="form" id="forgot_password" method="post" >
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <input type="submit" class="btn btn-block btn-warning" value="Submit" name="Submit">
                </form>
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


<!-- Mirrored from demo.lorvent.com/fitness/user_forgot.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 14:42:55 GMT -->
</html>
