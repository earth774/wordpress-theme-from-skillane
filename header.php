<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="amiearth.com">
    <meta name="format-detection" content="telephone=no">
    <title><?php bloginfo('name'); ?></title>
    <!--Favicon-->
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body class="layout-weightloss shop-page">
    <!--header-->
    <header class="header">
        <div class="header-quickLinks js-header-quickLinks d-lg-none">
            <div class="quickLinks-top js-quickLinks-top"></div>
            <div class="js-quickLinks-wrap-m">
            </div>
        </div>
        <div class="header-topline header-topline--compact d-none d-lg-flex">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-auto d-flex align-items-center">
                        <div class="header-info"><i class="icon-placeholder2"></i><?php echo get_option('wordpressthemecourse_address');?></div>
                        <div class="header-phone"><i class="icon-telephone"></i><a href="tel:<?php echo get_option('wordpressthemecourse_mobile');?>"><?php echo get_option('wordpressthemecourse_mobile');?></a></div>
                        <div class="header-info"><i class="icon-black-envelope"></i><a href="mailto:<?php echo get_option('wordpressthemecourse_email');?>"><?php echo get_option('wordpressthemecourse_email');?></a></div>
                    </div>
                    <div class="col-auto ml-auto d-flex align-items-center">
                        <span class="header-social">
                            <?php if(!empty(get_option('wordpressthemecourse_facebook'))): ?> 
                                <a href="<?php echo get_option('wordpressthemecourse_facebook');?>" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
                            <?php endif;?>
                            <?php if(!empty(get_option('wordpressthemecourse_twitter'))): ?> 
                                <a href="<?php echo get_option('wordpressthemecourse_twitter');?>" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
                            <?php endif;?>
                            <?php if(!empty(get_option('wordpressthemecourse_googleplus'))): ?> 
                                <a href="<?php echo get_option('wordpressthemecourse_googleplus');?>" class="hovicon"><i class="icon-google-plus-circle"></i></a>
                            <?php endif;?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-content">
            <div class="container">
                <div class="row align-items-lg-center">
                    <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
                        <span class="icon-menu"></span>
                    </button>
                    <div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
                        <a href="<?php echo home_url(); ?>" class="header-logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col-lg ml-auto header-nav-wrap">
                        <div class="header-nav js-header-nav">
                            <nav class="navbar navbar-expand-lg btco-hover-menu">
                                <?php
                                    wp_nav_menu([
                                        'theme_location' => 'main-menu',
                                        'container_class' => 'collapse navbar-collapse justify-content-center',
                                        'container_id' => 'navbarNavDropdown',
                                        'menu_class' => 'navbar-nav',
                                    ]);
                                ?>
                                <!--<div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                                     <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="services.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="services.html">All Services</a></li>
                                                <li><a class="dropdown-item" href="service-page.html">Service Page</a></li>
                                                <li><a class="dropdown-item" href="prices.html">Prices</a></li>
                                                <li><a class="dropdown-item" href="shop-listing.html">Online Shop</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.html">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="before-after.html" class="nav-link">Success Stories</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="gallery.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Gallery</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="gallery.html">Creative Gallery</a></li>
                                                <li><a class="dropdown-item" href="gallery-simple.html">Simple Gallery</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="our-specialist.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Specialists</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="our-specialist.html">All Specialists</a></li>
                                                <li><a class="dropdown-item" href="doctor-page.html">Doctor Page</a></li>
                                                <li><a class="dropdown-item" href="schedule.html">Schedule Table</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="blog.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="blog.html">Blog Posts</a></li>
                                                <li><a class="dropdown-item" href="blog-grid.html">Blog Grid Posts</a></li>
                                                <li><a class="dropdown-item" href="blog-post-page.html">Blog Single Post</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Contacts</a>
                                        </li>
                                    </ul> 
                                </div>-->
                            </nav>
                        </div>
                        <div class="header-search">
                            <form id="form-search" action="<?php echo home_url()?>" class="form-inline">
                                <i class="icon-search" onclick="javascript:document.getElementById('form-search').submit()"></i>
                                <input name="s" type="text" placeholder="Search">
                                <button type="submit"><i class="icon-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--//header-->
    <?php //if(is_home()) : ?>
        <!-- <h1>zzzzz</h1> -->
    <?php //endif; ?>
    <div class="page-content">