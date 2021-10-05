<?php  session_start();


if($_SESSION['coach']=="")
{

    header("location: LoginCoach.php");
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/admin_userprofile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 14:42:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Mon profil</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="../../oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.html"></script>
    <script src="../../oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <!--[endif]-->
    <!-- global css -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="vendors/vertical-timeline/css/style.css">
    <link rel="stylesheet" href="vendors/vertical-timeline/css/reset.css">
    <link type="text/css" href="vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/x-editable/css/bootstrap-editable.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/single_user.css" rel="stylesheet" />
    <!--end of page level css-->
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <header class="header">
        <?php include 'headerCoach.php'; ?>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <aside class="right-side strech">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2 class="section_h2_margin_top">Profile Coach</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Coach</a>
                    </li>
                    <li>
                        <a href="admin_userprofile.html">Profile Coach</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h5 class="panel-title">Profile Coach</h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="text-center">
                                            <img src="<?php echo $_SESSION['imagecoach']; ?>" alt="img" width="200" height="200" class="img-bor" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Utilisateur</th>
                                                    <th>Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-primary">Nom</td>
                                                    <td><?php echo $_SESSION['coach']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Email</td>
                                                    <td><?php echo $_SESSION['emailcoach']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Telephone</td>
                                                    <td><?php echo $_SESSION['telcoach']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Dernier accès</td>
                                                    <td><?php echo $_SESSION['dernier_acccoach']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Status</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="vendors/vertical-timeline/js/main.js"></script>
    <script src="vendors/vertical-timeline/js/modernizr.js"></script>
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="vendors/x-editable/jquery.mockjax.js" type="text/javascript"></script>
    <script src="vendors/x-editable/bootstrap-editable.js" type="text/javascript"></script>
    <script src="js/custom_js/single_user.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/admin_userprofile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 14:42:26 GMT -->
</html>
