<?php 
    global $fr_options;
?>
    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="footer-top">
                <!-- <a class="logo">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo-white.png" alt="Logo">
                </a> -->
                <?php if( $fr_options['logo-footer_on-off']) : ?> 
                    <a href="<?= home_url()?>" class="logo">
                        <img src="<?= $fr_options['logo-footer_01']['url'] ?>" alt="Logo">
                    </a>
                <?php endif; ?>
                <div class="widget__menu">
                    <div class="menus">
                        <div class="menu">
                            <?php if( $fr_options['navigate-footer_on-off']) : ?> 
                            <h3>Navigate</h3>
                                <?php 
                                    $defaults = array(
                                      'theme_location'  => 'main_left',
                                      'container'       => 'ul',
                                      'menu_class'      => 'no-style fr-menu',
                                    );
                                    wp_nav_menu($defaults); 
                                ?>
                            <?php endif; ?>
                            <!-- <ul>
                                <li>
                                    <a href="#" title="">Home</a>
                                </li>
                                <li>
                                    <a href="#" title="">Designers</a>
                                </li>
                                <li>
                                    <a href="#" title="">Bridal Gowns</a>
                                </li>
                                <li>
                                    <a href="#" title="">Bridemaids</a>
                                </li>
                                <li>
                                    <a href="#" title="">Accessories</a>
                                </li>
                                <li>
                                    <a href="#" title="">About us</a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="menu">
                            <?php if( $fr_options['needhelp-footer_on-off']) : ?> 
                            <!-- <h3>NEED HELP?</h3> -->
                            <h3><?php echo $fr_options['footer_field_09'] ?> </h3>

                            <ul>
                                <li>
                                    <!-- <a href="#" title="">Questions & Answer</a> -->
                                    <a href="<?= $fr_options['footer_field_10']?>" title=""><?php echo $fr_options['footer_field_11'] ?></a>
                                </li>
                                <li>
                                    <!-- <a href="#" title="">Customer Service</a> -->
                                    <a href="<?= $fr_options['footer_field_12']?>" title=""><?php echo $fr_options['footer_field_13'] ?></a>
                                </li>
                                <li>
                                    <!-- <a href="#" title="">Store Locator</a> -->
                                    <a href="<?= $fr_options['footer_field_14']?>" title=""><?php echo $fr_options['footer_field_15'] ?></a>
                                </li>
                            </ul>

                            <?php endif; ?>
                        </div>
                        <div class="menu">
                            <?php if( $fr_options['social-footer_on-off']) : ?> 
                            <!-- <h3>Social</h3> -->
                            <h3><?php echo $fr_options['footer_field_16'] ?> </h3>
                            <ul class="social">
                                <li>
                                    <a href="<?= $fr_options['footer_field_05']?>" title="">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $fr_options['footer_field_06']?>" title="">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $fr_options['footer_field_07']?>" title="">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $fr_options['footer_field_08']?>" title="">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="circle__logo">
                        <?php if( $fr_options['logo-footer_02_on-off']) : ?> 
                                <img src="<?= $fr_options['logo-footer_02']['url'] ?>" alt="">
                        <?php endif; ?>
                        <!-- <img src="<?php bloginfo('template_url'); ?>/images/bg__logo__gray.png" alt=""> -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">
                    <?php echo $fr_options['footer_field_01'] ?> 
                </div>
                <a class="other">
                    <?php if( $fr_options['logo-footer_03_on-off']) : ?> 
                                <img src="<?= $fr_options['logo-footer_03']['url'] ?>" alt="">
                        <?php endif; ?>
                    <span> <?php echo $fr_options['footer_field_02'] ?> </span>
                </a>
                <div class="auth">
                    <!-- website by <a href="http://3conn.net/">3conn.</a> -->
                    <?php echo $fr_options['footer_field_04'] ?> 
                </div>
            </div>
        </div>
    </footer> <!-- /Footer -->

    <div class="go-to-top"></div>

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
                    <img src="<?= $fr_options['logo-footer_04']['url'] ?>" alt="Logo">
                </a>

            <div class="menu-mobile">
                <div class="language-mobile">                   
                    <span data-toggle="dropdown">ENG</span>

                    <ul class="no-style">
                        <li class="current">
                            <span>
                                ENG
                            </span>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                VNI
                            </a>
                        </li>
                    </ul>       
                </div>

                <div class="clearfix"></div>
                <?php 
                    $defaults = array(
                      'theme_location'  => 'main_left',
                      'container'       => 'ul',
                      'menu_class'      => 'no-style fr-menu',
                    );
                    wp_nav_menu($defaults); 
                ?>
                <!-- <ul class="no-style fr-menu">
                    <li>
                        <a href="#" title="">
                            DESIGNERS AND CAMPAIGN PHOTOS
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            BRIDAL GOWNS
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            BRIDESMAIDS
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            ACCESSORIES
                        </a>
                    </li>
                </ul -->>
            </div>
        </div>
    </div><!-- /header -->
    
    <div id="dark-shadow"></div>
</body>
</html>