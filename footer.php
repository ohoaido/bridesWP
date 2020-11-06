<?php 
    global $fr_options;
?>
    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="footer-top">
                <a href="<?= home_url()?>" class="logo">
                    <img src="<?= $fr_options['logo-footer_01']['url'] ?>" alt="Logo">
                </a>
                <div class="widget__menu">
                    <div class="menus">
                        <div class="menu">
                            <h3><?php echo $fr_options['footer_title_1'] ?></h3>
                            <?php 
                                $defaults = array(
                                  'theme_location'  => 'footer_1',
                                  'container'       => 'ul',
                                  'menu_class'      => 'no-style fr-menu',
                                );
                                wp_nav_menu($defaults); 
                            ?>
                        </div>
                        <div class="menu">
                            <h3><?php echo $fr_options['footer_title_2'] ?> </h3>

                            <?php 
                                $defaults = array(
                                  'theme_location'  => 'footer_2',
                                  'container'       => 'ul',
                                  'menu_class'      => 'no-style fr-menu',
                                );
                                wp_nav_menu($defaults); 
                            ?>

                        </div>
                        <div class="menu">
                            <h3><?php echo $fr_options['footer_field_16'] ?> </h3>
                            <ul class="social">
                                <?php if($fr_options['footer_field_05']) :?>
                                <li>
                                    <a href="<?= $fr_options['footer_field_05']?>" title="" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <?php endif;?>
                                <?php if($fr_options['footer_field_06']) :?>
                                <li>
                                    <a href="<?= $fr_options['footer_field_06']?>" title="" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <?php endif;?>
                                <?php if($fr_options['footer_field_07']) :?>
                                <li>
                                    <a href="<?= $fr_options['footer_field_07']?>" title="" target="_blank">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <?php endif;?>
                                <?php if($fr_options['footer_field_08']) :?>
                                <li>
                                    <a href="<?= $fr_options['footer_field_08']?>" title="" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>
                    <div class="circle__logo">
                        <img src="<?= $fr_options['logo-footer_02']['url'] ?>" alt="Logo">
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">
                    <?php echo $fr_options['footer_field_01'] ?> 
                </div>
                <a href="<?= $fr_options['footer_field_03'] ?>" class="other" target="_blank">
                    <img src="<?= $fr_options['logo-footer_03']['url'] ?>" alt="">
                    <span> <?php echo $fr_options['footer_field_02'] ?> </span>
                </a>
                <div class="auth">
                    <?php echo $fr_options['footer_field_04'] ?> 
                </div>
            </div>
        </div>
    </footer> <!-- /Footer -->

    <div class="go-to-top"></div>

    <div id="menu-active">
        <div class="close__menu">
            <span></span>
            <span></span>
        </div>

        <!-- <div class="languages">
            <ul>
                <li class="">
                    <span class="current">Eng</span>
                </li>
                <li>
                    <a href="#" title="">Vie</a>
                </li>
            </ul>
        </div> -->

        <div class="logo">
            <a href="<?= home_url()?>" class="logo">
                <img src="<?= $fr_options['logo_tab']['url'] ?>" alt="Logo">
            </a>
        </div>

        <div class="menu">
            <?php 
                $menus_tab = array(
                  'theme_location'  => 'menus_tab',
                  'container'       => 'ul',
                  'menu_class'      => 'no-style main__menu',
                );
                wp_nav_menu($menus_tab); 
            ?>
        </div>

        <div class="bottom">
            <div class="togger__form md-trigger" data-modal="#app">
                REQUEST AN APPOINTMENT
            </div>              

            <ul class="social">
                <?php if($fr_options['footer_field_05']) :?>
                <li>
                    <a href="<?= $fr_options['footer_field_05']?>" title="" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <?php endif;?>
                <?php if($fr_options['footer_field_06']) :?>
                <li>
                    <a href="<?= $fr_options['footer_field_06']?>" title="" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <?php endif;?>
                <?php if($fr_options['footer_field_07']) :?>
                <li>
                    <a href="<?= $fr_options['footer_field_07']?>" title="" target="_blank">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                </li>
                <?php endif;?>
                <?php if($fr_options['footer_field_08']) :?>
                <li>
                    <a href="<?= $fr_options['footer_field_08']?>" title="" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <?php endif;?>
            </ul>
        </div>
    </div>
    <!-- header -->
    <div id="header-responsive">
        <div class="bottoms">
            <div class="menu">
                <div class="toggle-action">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <a href="<?= home_url()?>" class="logo">
                <img src="<?= $fr_options['logo_tab']['url'] ?>" alt="Logo">
            </a>
        </div>
    </div><!-- /header -->
    
    <div id="dark-shadow"></div>

    <!-- Book  -->
    <div class="md-modal md-effect-1 full__width" id="book">
        <div class="md-content">
            <span class="md-close" title="Close Popup">
                <span></span>
                <span></span>
            </span>
            <div class="book__form">
                <div class="book__logo">
                    <img src="<?= $fr_options['logo-footer_02']['url'] ?>" alt="Logo">
                </div>
                <?= do_shortcode('[contact-form-7 id="<?php $fr_options['custom-form-7'] ?> " title="Request an Appointment"]') ?>
            </div>
        </div>
    </div>
    <div class="md-darknight"></div><!-- the overlay element -->
</body>
</html>