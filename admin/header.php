<?php
  require("classes/database.php");
  require("classes/user.php");
  $user = new User();
  $id = isset($_SESSION['uid'])? $_SESSION['uid']:'';
  $user->setuid($id);
  $data_list = $user->user_info();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADMIN</title>
    <!-- Bootstrap -->
    <link href="includes/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="includes/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <!--Custom Theme Style -->
    <link href="includes/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>ADMIN</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <span>Nischal</span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="dashboard.php?page=dashboard"><i class="fa fa-home"></i>Home</span></a>
                  </li>
                  <li><a href="dashboard.php?page=blog"><i class="fa fa-edit"></i> BLOG <span class="fa fa-cog"></span></a>
                  </li>
                  <li><a href="dashboard.php?page=about"><i class="fa fa-desktop"></i> Homepage Elements <span class="fa fa-cog"></span></a>
                  </li>
                  <li><a href="dashboard.php?page=champion"><i class="fa fa-table"></i> Champion of the month <span class="fa fa-cog"></span></a>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-cog"></span></a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.0jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i>Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->