            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar">
                <div id="menu" role="navigation">
                    <div class="nav_profile">
                        <div class="media profile-left">
                            <a class="pull-left profile-thumb" href="#">
                                <img src="<?php echo $_SESSION['image']; ?>" class="img-circle" alt="User Image">
                            </a>
                            <div class="content-profile">
                                <h4 class="media-heading"><?php echo $_SESSION['nom']; ?></h4>
                                <span class="text-default">Admin</span>
                            </div>
                        </div>
                    </div>
                    <ul class="navigation">
                        <li class="active" id="active">
                            <a href="index.php">
                                <i class="text-primary menu-icon fa fa-fw fa-dashboard"></i>
                                <span class="mm-text ">Dashboard</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li>
                            <a href="admin_clubinfo.html">
                                <i class="text-success menu-icon fa fa-fw fa-info-circle"></i>
                                <span class="mm-text">Club Info</span>
                            </a>
                        </li>
                        <li>
                            <a href="packages.html">
                                <i class="text-primary menu-icon fa fa-th fa-info-circle"></i>
                                <span class="mm-text">Packages</span>
                            </a>
                        </li>
                        <li>
                            <a href="personal_training.html">
                                <i class="text-success menu-icon fa fa-life-ring fa-info-circle"></i>
                                <span class="mm-text">Personal Training</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-info menu-icon fa fa-fw fa-newspaper-o"></i>
                                <span class="mm-text">Manage</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="topic.php">
                                        <i class="text-primary menu-icon fa fa-inbox"></i> Manage topic
                                    </a>
                                </li>
                                <li>
                                    <a href="subtopic.php">
                                        <i class="menu-icon text-success fa fa-pencil"></i> Manage Subtopic
                                    </a>
                                </li>
                                <li>
                                    <a href="messages.php">
                                        <i class="text-primary menu-icon fa fa-inbox"></i> Messages
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-warning menu-icon fa fa-fw fa-graduation-cap"></i>
                                <span class="mm-text">Course Schedule</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="admin_courseschedule.html">
                                        <i class="text-primary fa fa-fw fa-th"></i> Course Schedule
                                    </a>
                                </li>
                                <li>
                                    <a href="courses.html">
                                        <i class="text-success fa fa-fw fa-indent"></i> Courses
                                    </a>
                                </li>
                                <li>
                                    <a href="admin_rooms.html">
                                        <i class="text-info fa fa-fw fa-star"></i> Rooms
                                    </a>
                                </li>
                                <li>
                                    <a href="admin_trainers.html">
                                        <i class="text-danger fa fa-fw fa-paw"></i> Trainers
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-default menu-icon fa fa-fw fa-users"></i>
                                <span class="mm-text">Admins</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="AfficherAdmins.php">
                                        <i class="text-primary fa fa-fw fa-users"></i> Listes Admins
                                    </a>
                                </li>
                                <li>
                                    <a href="ProfilAdmin.php">
                                        <i class="text-success fa fa-fw fa-user"></i> Mon Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="AjouterAdmin.php">
                                        <i class="text-info fa fa-fw fa-user"></i> Ajouter Admin
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-default menu-icon fa fa-fw fa-users"></i>
                                <span class="mm-text">Clients</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="AfficherClients.php">
                                        <i class="text-primary fa fa-fw fa-users"></i> Listes Clients
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-default menu-icon fa fa-fw fa-users"></i>
                                <span class="mm-text">Coach</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="AfficherCoachs.php">
                                        <i class="text-primary fa fa-fw fa-users"></i> Listes Coachs
                                    </a>
                                </li>
                                <li>
                                    <a href="AjouterCoach.php">
                                        <i class="text-info fa fa-fw fa-user"></i> Ajouter Coach
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="admin_coupon.html">
                                <i class="text-primary  menu-icon fa fa-scissors"></i>
                                <span class="mm-text">Coupons</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-success menu-icon fa fa-fw fa-picture-o"></i>
                                <span class="mm-text">Gallery</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="add_gallery.html">
                                        <i class="text-primary fa fa-fw fa-cloud-upload"></i> Add Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html">
                                        <i class="text-success fa fa-fw fa-file-image-o"></i> Gallery
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="admin_timings.html">
                                <i class="text-info menu-icon fa fa-fw fa-clock-o"></i>
                                <span class="mm-text ">Class Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="admin_login.html">
                                <i class="text-danger menu-icon fa fa-sign-in"></i>
                                <span class="mm-text">Login</span>
                            </a>
                        </li>
                        <li>
                            <a href="404.html">
                                <i class="text-warning menu-icon fa fa-anchor"></i>
                                <span class="mm-text">404</span>
                            </a>
                        </li>
                        <li>
                            <a href="blank.html">
                                <i class="text-default menu-icon fa fa-file-o"></i>
                                <span class="mm-text">Blank</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-primary menu-icon fa fa-sitemap"></i>
                                <span class="mm-text">Menu Levels</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="#">
                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul class="sub-menu sub-submenu">
                                                <li>
                                                    <a href="#">
                                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-info fa fa-fw fa-sitemap"></i> Level 3
                                                        <span class="fa arrow"></span>
                                                    </a>
                                                    <ul class="sub-menu sub-submenu">
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 4
                                                                <span class="fa arrow"></span>
                                                            </a>
                                                            <ul class="sub-menu sub-submenu">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-danger fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-danger fa fa-fw fa-sitemap"></i> Level 4
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-danger fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="text-info fa fa-fw fa-sitemap"></i> Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="#">
                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-success menu-icon fa fa-fw fa-question-circle"></i>
                                <span class="mm-text">FAQ</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="faq.html">
                                        <i class="text-primary fa fa-fw fa-question-circle"></i> FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href="add_faq.html">
                                        <i class="text-success fa fa-fw fa-question"></i> Add Faq
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- / .navigation -->
                </div>
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
