<?php
/**

 * The template for displaying the header

 *

 * Displays all of the head element and everything up until the "site-content" div.

 *

 * @package WordPress

 * @subpackage Twenty_Sixteen

 * @since Twenty Sixteen 1.0

 */
$post_id = get_the_ID();
$post = get_post($post_id);
?>

<!DOCTYPE html>

<html>

    <head>

        <title><?php wp_title('|', true, 'right'); ?> Aura Capital</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Cache-control" content="public">        

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slicknav.css">

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">

        <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/settings.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/green.css" media="screen" />


        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-min.js"></script>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">                
    </head>

    <body>
    <!--Loading-->
    <div class="transition-curtains">
        <div class="transition-curtains__curtain"></div>

        <div class="loading">
            <div data-wow-iteration="10" data-wow-duration="0.15" class="wow pulse bg_img"></div>
        </div>
    </div>
    <!--End Loading-->
    <div class="oveplay"></div>
    <div class="isMobile">
        <div>
            <img src="assets/images/icon/close.png" alt="" class="closebtn"/>
        </div>
        <div class="search">
            <img src="assets/images/mobile/search-white.png" alt="" class="icon-search"/>
        </div>
        <form class="form-search-header" method="get" action="#">
            <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                <div class="input-group">
                    <input type="text" name="s" class="form-control" id="exampleInputAmount" placeholder="Search..." value="">
                    <div class="input-group-addon">
                        <button type="submit" class="fa fa-search btn-submit-search"></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <header id="header-wrap">

        <nav class="navbar navbar-expand-md">
            <div class="menu-header">
                <div class="navbar-header">
                    <div class="isDesktop">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/logo.svg" class="logo" alt="">
                        </a>
                    </div>
                    <div class="isMobile">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/mobile/logo-aura.svg" class="logo-mobile" alt="">
                        </a>
                        <img src="assets/images/mobile/navbar-toggler-white.png" class="toggle-menu" alt="">
                    </div>
                </div>

                <!--Menu Desktop-->
                <div class="isDesktop">
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="navbar-nav mr-auto w-100 justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false">
                                    Introduction
                                    <span class="sr-only">(current)</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="item-nav ">
                                        <a href="#about">About</a>
                                    </li>
                                    <li class="item-nav ">
                                        <a href="#commitment">The Commitment</a>
                                    </li>
                                    <li class="item-nav ">
                                        <a href="#milestone">Milestones</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/investment.html">Investment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/investor.html">Investors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="service.html">News</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="isMobile">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-mobile px-0">
                        <div class="sidenav" id="mySidenav">
                            <ul class="navbar-nav mr-auto">
                                <li>
                                    <a href="index.html">
                                        <img src="assets/images/mobile/logo.png" alt="" class="logo-mobile"/>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Introduction
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="item-nav ">
                                            <a href="/index.html#about">About</a>
                                        </li>
                                        <li class="item-nav ">
                                            <a href="/index.html#commitment">The Commitment</a>
                                        </li>
                                        <li class="item-nav ">
                                            <a href="/index.html#milestone">Milestones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/investment-mobile.html">Investment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/investor-mobile.html">Investors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">News</a>
                                </li>
                            </ul>
                            <div class="container">
                                <div class="d-flex flex-wrap">
                                    <div class="item item-info-foo px-3">
                                        <p class="d-flex align-items-center social_foo">
                                            <a href="#">
                                                <img src="assets/images/icon/mobile-instagram.svg" class="icon-social"/></a>
                                            <a href="#">
                                                <img src="assets/images/icon/mobile-youtube.svg" class="icon-social icon-youtube"/></a>
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/icon/mobile-facebook.svg" class="icon-social"/></a>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="contact-foo">
                                        <div class="item item-info-foo px-3 d-flex align-items-center">
                                            <p>Subscribe to our newsletter </p>
                                            <a href="#">
                                                <img src="assets/images/icon/email.svg" class="newsletter" alt="">
                                            </a>
                                        </div>
                                        <div class="item item-info-foo px-3">
                                            <p class="pt-2">
                                                <span class="pt-3">Address Aura Capital: 02 HimLam, Nguyen Van Linh, District 7, HCMC, VietNam</span>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </nav>
        <div class="banner">
            <div class="isDesktop">
                <img src="assets/images/banner-home.jpg" alt=""/>
            </div>
            <div class="isMobile">
                <img src="assets/images/mobile/banner-home.png" alt=""/>
            </div>
        </div>
    </header>