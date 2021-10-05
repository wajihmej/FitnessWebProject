<?php  session_start();


if($_SESSION['login']=="")
{

    header("location: LoginAdmin.php");
}

include "../Model/admin.php";
include "../Controller/AdminC.php";
         

if (isset($_GET['id'])){

$adminC = new AdminC();
$result=$adminC->recupererAdmin($_GET['id']);
foreach($result as $row){
$id=$row['id'];
$nom=$row['nom'];
$email=$row['email'];
$mdp=$row['mdp'];
$tel=$row['tel'];
$image=$row['image'];

    }
}

if($_POST['Modifier'])
{

$admin=new Admin($_POST['nomuser'],$_POST['email'],$_POST['mdp'],$_POST['tel']);
    if($_POST['mdp'] != "")
    {
        $adminC->modifierAdminPwd($admin,$_GET['id']);
    }
    else
    {
        $adminC->modifierAdmin($admin,$_GET['id']);

    }

    $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];

    $folder = "./assets/images/admin/".$filename ;
        if($filename!="")
	    {
	    move_uploaded_file($tempname, $folder);
		$adminC->ajouterAdminimg($_POST['email'],$folder);

		}

header('Location: AfficherAdmins.php');
    
}


?> 
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/add_users.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 14:42:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Modifier Admin</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="../../oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.html"></script>
    <script src="../../oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <!-- global css -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/iCheck/skins/minimal/blue.css" rel="stylesheet" />
    <link type="text/css" href="vendors/select2/css/select2.css" rel="stylesheet" />
    <link type="text/css" href="vendors/select2/css/select2-bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/add_users.css" rel="stylesheet" />
    <!--end of page level css-->
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <header class="header">
        <?php include 'headerAdmin.php'; ?>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <aside class="left-side sidebar-offcanvas">
        <?php include 'asside.php'; ?>
        </aside>
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>Modifier Admin</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="AfficherAdmins.php">Admins</a>
                    </li>
                    <li>
                        <a href="ModifierAdmin.php?id=<?PHP echo $_GET['id'] ; ?>" class="activated">Modifier Admin</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <i class="fa fa-fw fa-user"></i> Modifier Admin
                            </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="POST" id="add_users_form" action="#" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Image</label>
                                                    <div class="col-md-7 text-center">
                                                        <div class="input-group">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                    <img data-src="holder.js/200x150" src="<?PHP echo $image ?>" alt="image">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                                <div class="select_align">
                                                                    <span class="btn btn-primary btn-file">
                                                                    <span class="fileinput-new">Selectionner une image</span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    <input input type="file" name="image" id="image" >

                                                                    </span>
                                                                    <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="nom"> Nom <span class='require'>*</span></label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-user-md text-primary"></i>
                                                            </span>
                                                            <input type="text" class="form-control" id="nomuser" placeholder="Nom" name="nomuser" value="<?PHP echo $nom ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="email"> Email <span class='require'>*</span></label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-envelope text-primary"></i>
                                                            </span>
                                                            <input type="email" placeholder="Email Address" class="form-control" id="email" name="email" value="<?PHP echo $email ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="addr"> Mot de passe <span class='require'>*</span></label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-plus text-primary"></i>

                                                            </span>
                                                            <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="mdp" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="contact"> Telephone <span class='require'>*</span></label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-phone text-primary"></i>
                                                            </span>
                                                            <input type="text" placeholder="Phone Number" id="tel" class="form-control" name="tel" value="<?PHP echo $tel ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <input type="submit" class="btn btn-primary" value="Modifier" name="Modifier" id="Modifier">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-md-6 -->
                <!--row -->
                <!--row ends-->
            </div>
            <!-- /.content -->
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- /.right-side -->
    <!-- ./wrapper -->
    <!-- global js -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="vendors/iCheck/icheck.js" type="text/javascript"></script>
    <script src="vendors/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <script src="js/custom_js/update_users.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <script>
    </script>
</body>


<!-- Mirrored from demo.lorvent.com/fitness/add_users.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 14:42:28 GMT -->
</html>
