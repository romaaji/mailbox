<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login/');
}
include('../include/db.php');
$query="SELECT * FROM smtp_setup,admin_users";
$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>AJ-Email Application</title>
        <link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico"/>
        <link href="assets/css/loader.css" rel="stylesheet" type="text/css"/>
        <script src="assets/js/loader.js"></script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link
            href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap"
            rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN CUSTOM STYLE FILE -->
        <link rel="stylesheet" type="text/css" href="plugins/dropify/dropify.min.css">
        <link
            href="assets/css/users/account-setting.css"
            rel="stylesheet"
            type="text/css"/>
        <!-- END CUSTOM STYLE FILE -->
        <!-- BEGIN CUSTOM STYLE FILE -->
        <link
            rel="stylesheet"
            type="text/css"
            href="plugins/editors/quill/quill.snow.css">
        <link href="assets/css/apps/mailbox.css" rel="stylesheet" type="text/css"/>

        <script src="plugins/sweetalerts/promise-polyfill.js"></script>
        <link
            href="plugins/sweetalerts/sweetalert2.min.css"
            rel="stylesheet"
            type="text/css"/>
        <link
            href="plugins/sweetalerts/sweetalert.css"
            rel="stylesheet"
            type="text/css"/>
        <!-- END CUSTOM STYLE FILE -->
    </head>
    <body class="alt-menu sidebar-noneoverflow">

        <!-- BEGIN LOADER -->
        <div id="load_screen">
            <div class="loader">
                <div class="loader-content">
                    <div class="spinner-grow align-self-center"></div>
                </div>
            </div>
        </div>
        <!-- END LOADER -->
        <?php
    $query="SELECT * FROM admin_users"; 
      $queryrun=mysqli_query($db,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>
        <!-- BEGIN NAVBAR -->
        <div class="header-container">
            <header class="header navbar navbar-expand-sm">

                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewbox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </a>

                <div class="nav-logo align-self-center">
                    <a class="navbar-brand" href="./"><img alt="logo" src="<?=$data['logo']?>">
                        <span class="navbar-brand-name">AJ-Mail</span></a>
                </div>
                <?php }?>
                <ul class="navbar-item topbar-navigation">

                    <!-- BEGIN TOPBAR -->
                    <div class="topbar-nav header navbar" role="banner">
                        <nav id="topbar">

                            <ul class="list-unstyled menu-categories" id="topAccordion">

                                <li class="menu single-menu">
                                    <a
                                        href="./"
                                        data-toggle="collapse"
                                        aria-expanded="false"
                                        class="dropdown-toggle autodroprown">
                                        <div class="">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewbox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewbox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-home shadow-icons">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>
                                            <span>Dashboard</span>
                                        </div>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewbox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-chevron-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- END TOPBAR -->

            </ul>

            <ul class="navbar-item flex-row ml-auto">
                <li class="nav-item align-self-center search-animated">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewbox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-search toggle-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input
                                type="text"
                                class="form-control search-form-control  ml-lg-auto"
                                placeholder="Search...">
                        </div>
                    </form>
                </li>
            </ul>

            <ul class="navbar-item flex-row nav-dropdowns">
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown custom-dropdown-icon">
                        <a
                            class="dropdown-toggle btn"
                            href="#"
                            role="button"
                            id="customDropdown"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"><img src="assets/img/id.png" class="flag-width" alt="flag">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
                            24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6
                            9 12 15 18 9"></polyline></svg> -->
                        </a>
                    </div>
                </li>

                <li class="nav-item dropdown message-dropdown">
                    <a
                        href="javascript:void(0);"
                        class="nav-link dropdown-toggle"
                        id="messageDropdown"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewbox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-mail">
                            <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span class="badge badge-primary">1</span>
                    </a>
                    <div
                        class="dropdown-menu position-absolute e-animated e-fadeInUp"
                        aria-labelledby="messageDropdown">
                        <div class="">

                            <a class="dropdown-item">
                                <div class="">
                                    <div class="media notification-new">
                                        <div class="notification-icon">
                                            <div class="icon-svg mr-3">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewbox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-mail">
                                                    <path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                        <?php
    $query="SELECT * FROM contact ORDER BY id DESC LIMIT 1"; 
      $queryrun=mysqli_query($db,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>
                                        <div class="media-body">
                                            <p class="meta-title mr-3">1 new email</p>
                                            <p class="message-text"><?=@htmlentities($data['cemail'])?></p>
                                            <p class="meta-time align-self-center mb-0"><?=@htmlentities($data['ctime'])?></p>
                                        </div>
                                        <?php
                                                    $count++;
                                            }
                                            if($count==0){ ?>
                                        <h1 class="text-center">
                                            Tidak Ada Pesan Masuk</h1>
                                        <?php }
                                                ?>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a
                        href="javascript:void(0);"
                        class="nav-link dropdown-toggle"
                        id="notificationDropdown"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewbox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                        <span class="badge badge-success"></span>
                    </a>
                    <div
                        class="dropdown-menu position-absolute animated fadeInUp"
                        aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewbox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-server">
                                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                        <line x1="6" y1="6" x2="6" y2="6"></line>
                                        <line x1="6" y1="18" x2="6" y2="18"></line>
                                    </svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Server Rebooted</h6>
                                            <p class="">Now</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewbox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
                <?php
    $query="SELECT * FROM admin_users"; 
      $queryrun=mysqli_query($db,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>
                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a
                        href="javascript:void(0);"
                        class="nav-link dropdown-toggle user"
                        id="user-profile-dropdown"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <div class="media">
                            <img src="<?=$data['image']?>" class="img-fluid" alt="admin-profile">

                        </div>
                    </a>
                    <div
                        class="dropdown-menu position-absolute animated fadeInUp"
                        aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <img src="<?=$data['image']?>" class="img-fluid mr-2" alt="avatar">
                                <div class="media-body">
                                    <h5><?=$data['username']?></h5>
                                    <p>Developer</p>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="?users">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewbox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span>My Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="./">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewbox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path
                                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                </svg>
                                <span>My Inbox</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="?smtp">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewbox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path
                                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                </svg>
                                <span>SMTP Settings</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="php/logout.php">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewbox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>

                </li>
            </ul>
        </header>
    </div>
    <!-- END NAVBAR -->

    <!-- BEGIN MAIN CONTAINER -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!-- BEGIN CONTENT AREA -->
        <!-- BEGIN CONTENT AREA -->
    <?php 
     if(isset($_GET['smtp'])){ 
     include('php/set.php'); //home
    
    
    }else if(isset($_GET['users'])){ ?>

        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="account-settings-container layout-top-spacing">
                    <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
                    <div class="alert btn-primary mb-4" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewbox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-x close"
                                data-dismiss="alert">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                        <strong>Success!</strong>
                        Profil Berhasil DiUpdate!.
                    </div>

                    <?php
  }  
 } 
?>
                    <div class="account-content">
                        <div
                            class="scrollspy-example"
                            data-spy="scroll"
                            data-target="#account-settings-scroll"
                            data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form
                                        id="general-info"
                                        class="section general-info"
                                        method="post"
                                        action="php/uprofile.php">
                                        <div class="info">

                                            <?php
    $query="SELECT * FROM admin_users"; 
      $queryrun=mysqli_query($db,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>
                                            <h6 class="">Admin Menu</h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="userna">Name</label>
                                                                            <input
                                                                                type="text"
                                                                                class="form-control mb-4"
                                                                                name="username"
                                                                                id="ptitle"
                                                                                placeholder="Romadhon Aji"
                                                                                value="<?=$data['username']?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="password">Admin Password</label>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control mb-4"
                                                                            name="userpass"
                                                                            value="<?=$data['user_pass']?>"
                                                                            id="psubtitle"
                                                                            placeholder="romaa123">

                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input
                                                                        type="email"
                                                                        class="form-control mb-4"
                                                                        name="userid"
                                                                        value="<?=$data['user_id']?>"
                                                                        id="psubtitle"
                                                                        placeholder="romaa@admin.com">
                                                                </div>
                                                                <input
                                                                    type="submit"
                                                                    name="uprofile"
                                                                    class="btn btn-primary"
                                                                    value="Save Changes">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php }?>

                    <?php }else{
         include('php/mailbox.php');
     } ?>
                        <!-- END CONTENT AREA -->

                    </div>
                    <!-- END MAIN CONTAINER -->
                    <script src="assets/js/users/account-settings.js"></script>
                    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
                    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
                    <script src="bootstrap/js/popper.min.js"></script>
                    <script src="bootstrap/js/bootstrap.min.js"></script>
                    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
                    <script src="assets/js/app.js"></script>

                    <script>
                        $(document).ready(function () {
                            App.init();
                        });
                    </script>
                    <script src="assets/js/custom.js"></script>
                    <!-- END GLOBAL MANDATORY SCRIPTS -->
                    <script src="assets/js/ie11fix/fn.fix-padStart.js"></script>
                    <script src="plugins/editors/quill/quill.js"></script>
                    <script src="plugins/sweetalerts/sweetalert2.min.js"></script>
                    <script src="assets/js/apps/custom-mailbox.js"></script>
                </body>
            </html>