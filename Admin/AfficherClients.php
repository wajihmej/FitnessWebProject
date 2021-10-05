<?php session_start();

if($_SESSION['login']=="")
{

    header("location: LoginAdmin.php");
}

include  "../Model/client.php";
include  "../Controller/ClientC.php";

$clientc= new ClientC();

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 14:42:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Listes des Clients</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- global css -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" rel="stylesheet" href="css/custom_css/panel.css" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/news.css" rel="stylesheet" />
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
            <section class="content-header">
                <!--section starts-->
                <h2>Liste clients</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="AfficherClients.php">Clients</a>
                    </li>
                    <li>
                        <a href="AfficherClients.php">Liste clients</a>
                    </li>
                </ol>
            </section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i> Admins
                            </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered text-center" id="fitness-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Prenom</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Mot de passe</th>
                                            <th class="text-center">Telephone</th>
                                            <th class="text-center">Adresse</th>
                                            <th class="text-center">Sexe</th>
                                            <th class="text-center">Date de naissance</th>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Delete/Cancel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $liste=$clientc->afficherClients();
                                        foreach($liste as $row){
                                        ?>

                                        <tr>
                                            <td><?php echo $row['nom']; ?></td>
                                            <td><?php echo $row['prenom']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['mdp']; ?></td>
                                            <td><?php echo $row['tel']; ?></td>
                                            <td><?php echo $row['adresse']; ?></td>
                                            <td><?php echo $row['sexe']; ?></td>
                                            <td><?php echo $row['date_nais']; ?></td>
                                            <td><img src="../Views/<?php echo $row['image']; ?>" heigth="200" width=150></td>
                                            <td>
                                               <form method="POST" action="supprimerClient.php">
                                                    <input type="submit" class="btn btn-danger" value= "supprimer">
                                                    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                </form>
                                            </td>
                                      </tr>
                                <?php
                                }
                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <!--section ends-->
    <!-- /.content -->
    <!-- ./wrapper -->
    <!-- global js -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="js/custom_js/news.js" type="text/javascript"></script>
</body>


<!-- Mirrored from demo.lorvent.com/fitness/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 14:42:11 GMT -->
</html>
