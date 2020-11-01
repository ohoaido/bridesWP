<?php 
    global $fr_options;
    $category = get_queried_object();
    //firstly, load data for your child category
    $terms = get_terms( 'danh-muc' );
    $x = [];
    for ($i = 0; $i < count($terms); $i++) { 
        if($terms[$i]->term_taxonomy_id == $category->term_id){
            $x = $terms[$i];
            break;
        }
    }

    $parent_cat = get_terms(
        'danh-muc',
        array(
            'orderby'    => 'count',
            'order' => 'DESC',
            'parent'     => '0', 
            'hide_empty' => 0
        )
    );
    $y = [];
    foreach ($parent_cat as $catVal) { 
        if($catVal->term_id === $x->parent){
            $y = $catVal;
            break;
        }
    }
?>
<?php get_header() ?>
    <main id="content">
        <p class="hide check"><?= $y->name ?></p>
        <script>
            jQuery(document).ready(function() {
                for (var i = 0; i < jQuery('.bottom__tabs .nav.nav-tabs li').length; i++) {
                    console.log('a', jQuery('.bottom__tabs .nav.nav-tabs li:eq('+i+') a').text().toLowerCase());
                    console.log('p', jQuery('p.check').text().toLowerCase());
                    if(jQuery('.bottom__tabs .nav.nav-tabs li:eq('+i+') a').text().toLowerCase() == jQuery('p.check').text().toLowerCase()){
                        jQuery('.bottom__tabs .nav.nav-tabs li:eq('+i+')').addClass('active');
                    }
                }
            });
        </script>
        <!-- Content Breadcrumbs -->
        <?php if (function_exists('z_taxonomy_image')) { ?>
            <section class="content-breadcrumbs" style="background-image: url(<?= z_taxonomy_image_url($y->term_id)?>);">
        <?php } else { ?>
            <section class="content-breadcrumbs">
        <?php } ?> 
                <div class="container">
                    <div class="content-breadcrumbs_box">                  
                    </div>
                </div>
            </section> <!-- /Content Breadcrumbs -->
        <?php 
            $args=array(
                'name' => 'business',
                'post_type' => 'page',                                
                'post_status' => 'publish',
                'numberposts' => 1
            );
            query_posts($args);  
            while (have_posts()) : the_post(); 
        ?>
        <!-- Content Business Activities -->
        <section class="content-business_activities">
            <div class="content-business_activities__top">
                <div class="container">
                    <h2 class="top__heading"><?php the_field('heading') ?></h2>

                    <div class="top__paragraph"><?php the_field('text') ?></div>
                </div>
            </div>
        <?php endwhile; ?>

            <div class="content-business_activities__bottom">
                <div class="container">                 
                    <div class="bottom__tabs">                        
                        <?php 
                            $defaults = array(
                              'theme_location'  => 'business',
                              'container'       => 'ul',
                              'menu_class'      => 'nav nav-tabs',
                            );
                            wp_nav_menu($defaults); 
                        ?>   
                    </div>

                    <div class="bottom__content">                       
                        <div class="tab-content">         
                            <div class="tab-pane active">
                                <div class="categories__tabs">
                                    <div class="categories__contents">
                                        <div class="contents__heading">
                                            <?= $x->name ?>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="contents__items">
                                            <?php
                                                wp_reset_query();
                                                $args=array(
                                                    'post_type' => 'products',
                                                    'post_status' => 'publish',     
                                                    'posts_per_page' => -1,
                                                    'tax_query' => array(
                                                        array(
                                                            'taxonomy' => 'danh-muc',
                                                            'field' => 'id',
                                                            'terms' => array($x->term_id),
                                                            'include_children' => true,
                                                        ),
                                                    ),
                                                    'paged' =>  get_query_var('paged')
                                                );
                                                query_posts($args);
                                                while (have_posts()) : the_post();     
                                            ?>
                                                <div class="contents__item">
                                                    <a href="<?=get_permalink()?>" class="item__box">
                                                        <div class="item__img">
                                                            <img src="<?=get_featured_img($post->ID)?>" alt="<?php the_title() ?>">
                                                        </div>
                                                        <div class="item__name"><?php the_title() ?></div>
                                                    </a>
                                                </div>                      
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- /Content Business Activities -->
    </main>

<?php get_footer() ?>  