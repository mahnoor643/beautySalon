<?php
error_reporting(0);
include "../conn.php";

// Get the current file name without the directory path
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
    <meta name="description" content="Trim Style HTML5 Bootstrap website Template">

    <title>Rosa Salon</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/crownIcon.png">

    <!-- All CSS files -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/classic.date.css">
    <link rel="stylesheet" href="assets/css/vendor/classic.css">
    <link rel="stylesheet" href="assets/css/app.css">

</head>

<body class="ui-smooth-scroll">
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="loading loading07">
            <span data-text="R">R</span>
            <span data-text="O">O</span>
            <span data-text="S">S</span>
            <span data-text="A">A</span>
            <span data-text="S">S</span>
            <span data-text="T">T</span>
            <span data-text="Y">Y</span>
            <span data-text="L">L</span>
            <span data-text="E">E</span>
        </div>
    </div> -->
    <!-- Back To Top Start -->
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Main Wrapper Start -->
    <div id="main-wrapper" class="main-wrapper overflow-hidden">
        <div id="scroll-container">
            <!-- Header Area Start -->
            <header class="header">
                <div class="container">
                    <nav class="navbar navbar-expand-xl align-items-xl-center align-items-start p-0">
                        <div class="col-xl-4 ">
                        <a href="index.php"><img alt="" src="assets/media/logo.png" class="img-fluid" style="height:150px; !important;"></a>
                            </div>
                        <div class="col-xl-4 text-end">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#mynavbar">
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse justify-content-center text-start" id="mynavbar">
    <ul class="navbar-nav mainmenu m-0">
        <li class="menu-item-has-children">
            <a href="index.php" class="<?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">Home</a>
        </li>
        <li class="menu-item-has-children">
            <a href="about.php" class="<?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">About</a>
        </li>
        <li class="menu-item-has-children">
            <a href="services.php" class="<?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>">Services</a>
        </li>
        <li class="menu-item-has-children">
            <a href="contact.php" class="<?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">Contact</a>
        </li>
    </ul>
</div>
                        </div>
                        <div class="col-xl-4 d-xl-block d-none text-end">
                            <button class="barber-btn modal-popup">Book Appointment</button>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- Header Area end -->