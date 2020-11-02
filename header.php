
<?php 
    global $fr_options;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <!-- <title>Lemon Love</title> -->
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/wow.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.js"></script>
</head>
<body>
    <!-- Header -->
    <header id="header" class="">
        <div class="box__scroll">           
            <div class="hambuger">
                <div class="hambuger__line">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="container">             
                <div class="logo">
                    <a href="<?= home_url()?>">
                        <img src="<?= $fr_options['logo_header_01']['url'] ?>" alt="Logo">
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header_box">
                <div class="logo">
                    <a href="<?= home_url()?>">
                        <img src="<?= $fr_options['logo_header_02']['url'] ?>" alt="Logo">
                    </a>
                </div>
                <div class="menu">
                    <?php 
                        $defaults = array(
                          'theme_location'  => 'main',
                          'container'       => 'ul',
                          'menu_class'      => 'no-style box__left',
                        );
                        wp_nav_menu($defaults); 
                    ?>
                </div>
            </div>
        </div>
    </header><!-- /Header -->

    <div class="clearfix"></div>