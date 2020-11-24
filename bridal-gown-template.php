<?php 
    global $fr_options;
?>
<?php    
    /*
        Template Name: Bridal gown Template
    */
?>
<?php get_header() ?>
	<!-- Content -->
	<main id="content">
		<!-- Content Banner Type -->
		<section class="content-banner-type" style="background-image: url(<?= rwmb_meta('image_banner_bridal_gown',array("size" => "full"))['url'] ?>;" alt="Image">
			<div class="container">
				<div class="content_box">
					<div class="box__small"><?=  rwmb_meta('category_bridalgown') ?></div>
					<h1 class="box__heading"><?=  rwmb_meta('text_bridal_gown') ?></h1>
				</div>
			</div>
		</section> <!-- /Content Banner Type -->

		<!-- Content  -->
		<section class="content-collections">
			<div class="container-fluid">
				<div class="content_box">
					<div class="box__sidebar">
						 <?php 
                            $defaults = array(
                              'theme_location'  => 'bride_maid',
                              'container'       => 'ul',
                              'menu_class'      => 'no-style filter__category',
                            );
                            wp_nav_menu($defaults); 
                        ?>

						<div class="box__share">
							<div class="share__button">
								<span></span>
								share
							</div>
							<ul class="share__social">
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

					<?php
					wp_reset_query();
                    $bridalgowns_post=array(
                        'post_type' => 'bridalgown',
                        'post_status' => 'publish',     
	                    'order' => 'DESC',
	                    'paged' =>  get_query_var('paged'),
	                    'tax_query' => array(
                            array(
                                'taxonomy' => 'bridalgown-category',
                                'field' => 'id',
                                'terms' => rwmb_meta('taxonomy_ct')->term_id,
                            ),
                        )
                    );
                    $parentId = $post->post_parent;
                    query_posts($bridalgowns_post);    
                    ?>               
					<div class="box__list">
						<div class="box__action">			
							<?php fr_pagenavi(); ?>						
							<div class="box__more">
								<span></span>
								<a href="<?php echo get_permalink($parentId); ?>">xem toàn bộ</a>
							</div>
						</div>
						<div class="items">    
	                        <?php while (have_posts()) : the_post();  ?>
								<div class="item">
									<a class="item__img">
										<div class="img" style="background-image: url(<?= rwmb_meta('image_bridemaids_group',array("size" => "full"))['url'] ?>;">
											<img src="<?=  rwmb_meta('image_bridemaids_group')['full_url'] ?>" alt="Image">
										</div>
										<div class="img" style="background-image: url(<?= rwmb_meta('image_bridemaids_hover_group',array("size" => "full"))['url'] ?>;">
											<img src="<?=  rwmb_meta('image_bridemaids_hover_group')['full_url'] ?>" alt="Image">
										</div>
									</a>
									<div class="item__caption">
									<h3 class="item__name">
										<a href="#" title=""><?= rwmb_meta('name_bridemaids_group') ?></a>
									</h3>
									<div class="item__auth">
										by <span><?= rwmb_meta('text_bridemaids_group') ?></span>
									</div>
								</div>
								</div>    
	                        <?php endwhile; ?>
						</div>

						<div class="box__bottom">							
							<div class="box__action__2">							
								<?php fr_pagenavi(); ?>	
								<div class="box__more">
									<span></span>
									<a href="<?php echo get_permalink($parentId); ?>">xem toàn bộ</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Content Albums -->
		<section class="content-albums">
			<div class="container">
				<div class="content_box">
					<div class="box__small"><?= rwmb_meta('text_15') ?></div>
					<div class="box__rela">						
						<h2 class="box__heading"><?= rwmb_meta('text_16') ?></h2>
						<div class="box__control">
							<div class="control__arrow">
								<div class="arrow__prev"></div>
								<div class="arrow__number">/</div>
								<div class="arrow__next"></div>
							</div>
							<a class="control__more">
								<span></span>
								<?= rwmb_meta('text_17') ?>
							</a>
						</div>
					</div>
					<div class="box__sliders owl-carousel">
						<?php
							wp_reset_query();
                            $args1=array(
                                'post_type' => 'bridalgown',
                                'post_status' => 'publish',     
			                    'order' => 'DESC'
                            );
                            query_posts($args1);    
                        ?>                   
                        <?php while (have_posts()) : the_post();  ?>
							<div class="item">
								<a href="#" title="">
									<div class="item__img">
										<img src="<?= vt_resize(rwmb_meta('image_bridemaids_group',array("size" => "full"))['ID'], '', 300, 450, true)['url']?>" alt="Image">
										<img src="<?= vt_resize(rwmb_meta('image_bridemaids_hover_group',array("size" => "full"))['ID'], '', 300, 450, true)['url']?>" alt="Image">
										
									</div>
									<div class="item__caption">
										<h3 class="item__name"><?= rwmb_meta('name_bridemaids_group') ?></h3>
										<div class="item__auth">by <span><?= rwmb_meta('text_bridemaids_group') ?></span></div>
									</div>
								</a>
							</div>    
                        <?php endwhile; ?>
					</div>

					<div class="box__book md-trigger" data-modal="#book">
						REQUEST AN APPOINTMENT
					</div>
				</div>
			</div>
		</section> <!-- /Content Albums -->
	</main>  <!-- /Content -->

	<div class="clearfix"></div>
<?php get_footer() ?>