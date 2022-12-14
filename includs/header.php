<?php
//print_r($_SERVER);
//echo ($_SERVER['PHP_SELF']);
$link = explode('/', $_SERVER['PHP_SELF']);
//print_r($link);
$page = $link[3];
//echo $page;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fox University - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="css/open-iconic-bootstrap.min.css%2banimate.css%2bowl.carousel.min.css%2bowl.theme.default.min.css%2bmagnific-popup.css%2baos.css%2bionicons.min.css%2bflaticon.css%2bicomoon.css%2bstyle" />
</head>

<body>
    <div class="bg-top navbar-light">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center align-items-stretch">
                <div class="col-md-4 d-flex align-items-center py-4">
                    <a class="navbar-brand" href="index.html">Fox. <span>University</span></a>
                </div>
                <div class="col-lg-8 d-block">
                    <div class="row d-flex">
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <div class="text">
                                <span>Email</span>
                                <span><a href="#" class="__cf_email__"
                                        data-cfemail="6a13051f180f070b03062a0f070b030644090507">info@university.com</a></span>
                            </div>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <div class="text">
                                <span>Call</span>
                                <span>Call Us: + 1235 2355 98</span>
                            </div>
                        </div>
                        <div class="col-md topper d-flex align-items-center justify-content-end">
                            <p class="mb-0">
                                <a href="#"
                                    class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
                                    <span>Apply now</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center px-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <form action="#" class="searchform order-lg-last">
                <div class="form-group d-flex">
                    <input type="text" class="form-control pl-3" placeholder="Search">
                    <button type="submit" placeholder="" class="form-control search"><span
                            class="ion-ios-search"></span></button>
                </div>
            </form>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if ($page == 'index.php') {
                                            echo 'active';
                                        } ?>"><a href="index.php" class="nav-link pl-0">Home</a></li>
                    <li class="nav-item <?php if ($page == 'about.php') {
                                            echo 'active';
                                        } ?>"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item <?php if ($page == 'courses.php') {
                                            echo 'active';
                                        } ?>"><a href="courses.php" class="nav-link">Courses</a></li>
                    <li class="nav-item <?php if ($page == 'teacher.php') {
                                            echo 'active';
                                        } ?>"><a href="teacher.php" class="nav-link">Staff</a></li>
                    <li class="nav-item <?php if ($page == 'blog.php') {
                                            echo 'active';
                                        } ?>"><a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item <?php if ($page == 'contact.php') {
                                            echo 'active';
                                        } ?>"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>