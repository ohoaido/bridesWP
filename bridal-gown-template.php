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
                              'theme_location'  => 'bridal_gown',
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
								<li>
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?= get_permalink()?>" onclick='window.open(this.href, "mywin","left=50,top=50,width=600,height=350,toolbar=0"); return false;' title=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/share?text=<?php the_title() ?>&url=<?= get_permalink()?>" onclick='window.open(this.href, "mywin","left=50,top=50,width=600,height=350,toolbar=0"); return false;' title=""><i class="fa fa-twitter"></i></a>
                                 </li>
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
									<a href="<?php echo get_permalink($pr); ?>"class="item__img">
										<?php 
											$ptbridals = rwmb_meta('group_content_gallery_bridalgown');
											foreach ($ptbridals as $index => $ptbridal): 
												$gs =  wp_get_attachment_image_url( $ptbridal['simage_details'], 'full' );
												if ($index == 2) {
													break;
												}
											?>	
											<div class="img" style="background-image: url(<?=  $gs ?>);">
												<img src="<?=$gs?>" alt="Image">
											</div>
											<?php endforeach; ?>
									</a>
									<div class="item__caption">
										<h3 class="item__name">
											<a href="<?php echo get_permalink($pr); ?>" title=""><?= rwmb_meta('text_info_auth') ?></a>
										</h3>
										<div class="item__auth">
											by <span><?= rwmb_meta('text_info_heading') ?></span>
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
					<div class="box__small">BRIDAL GOWNS</div>
					<div class="box__rela">						
						<h2 class="box__heading">New Arrival Dress</h2>
						<div class="box__control">
							<div class="control__arrow">
								<div class="arrow__prev"></div>
								<div class="arrow__number">/</div>
								<div class="arrow__next"></div>
							</div>
							<a href="<?php echo get_permalink($parentId); ?>" class="control__more">
								<span></span>
								See details
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
                            $pr = $post->post_parent;
                            query_posts($args1);    
                        ?>                   
                        <?php while (have_posts()) : the_post();  ?>
							<div class="item">
								<a href="<?php echo get_permalink($pr); ?>" title="">
									<div class="item__img">
										<?php 
										$ptbridals = rwmb_meta('group_content_gallery_bridalgown');
										foreach ($ptbridals as $index => $ptbridal): 
											$gs = $ptbridal['simage_details'];
											if ($index == 2) {
												break;
											}
											?>		
											<img src="<?= vt_resize($gs, '', 300, 450, true)['url']?>" alt="Image">
										<?php endforeach; ?>
									</div>
									<div class="item__caption">
										<h3 class="item__name"><?= rwmb_meta('text_info_heading') ?></h3>
										<div class="item__auth">by <span><?= rwmb_meta('text_info_auth') ?></span></div>
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