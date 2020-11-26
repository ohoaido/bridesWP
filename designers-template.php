<?php 
    global $fr_options;
?>
<?php    
    /*
        Template Name: Designers Template
    */
?>
<?php get_header() ?>
	<!-- Content -->
	<main id="content">
		<!-- Content Designers -->
		<?php 
		$images = rwmb_meta('group_wp2txdulpxi');
		foreach ($images as $image): 
			$bg = wp_get_attachment_image_url( $image['content_designers'], 'full' );
			$Category = $image['category_designers'];
			$Name = $image['name_designers'];
			$Text = $image['text_designers'];
			$preview = $image['preview_designers'];
			$Link = $image['url_designers'];
			?>						
			<section class="content-designers">
			<div class="box__image" style="background-image: url(<?=  $bg ?>);"></div>
			<div class="box__caption">
				<div class="container">
					<div class="caption__category"><?=  $Category ?> </div>

					<h3 class="caption__name"><?=  $Name ?> </h3>

					<div class="caption__text">
						<?=  $Text ?> 
					</div>
					<a href="<?= $Link?>" class="caption__more">
						<span></span>
						<?=  $preview ?> 
					</a>					
				</div>
			</div>
		</section> 	
		<?php endforeach; ?>
		<!-- /Content Designers -->
		<?php wp_reset_query();?>
		<!-- Content Single Gallery -->
		<section class="content-single-gallery">
			<div class="container">
				<div class="content_box">
					<div class="box__images">
						<div class="image__child" style="background-image: url(<?= rwmb_meta('images_single_gallery',array("size" => "full"))['url'] ?>;" alt="Image">
							<img src="<?=  rwmb_meta('images_single_gallery')['full_url'] ?>" alt="Image">
						</div>
					</div>

					<div class="box__gray">						
						<div class="box__captions">
							<div class="caption__child">
								<div class="child__category"><?= rwmb_meta('category_single_gallery') ?></div>

								<h3 class="child__name"><?=  rwmb_meta('name_single_gallery') ?></h3>

								<div class="child__text">
									<?=  rwmb_meta('text_single_gallery') ?> 
								</div>
								<a href="<?= rwmb_meta('url_single_gallery') ?>" class="child__more">
									<span></span>
									<?= rwmb_meta('preview_single_gallery') ?> 
								</a>

								<div class="child__book md-trigger" data-modal="#book">
									<?=  rwmb_meta('book_single_gallery') ?> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- /Content Gallery -->

		<!-- Content Grid 2 Slider -->
		<section class="content-grid2-slider">
			
			<div class="content__left">	

					<div class="left__slider owl-carousel">			
						<?php 
						$GridSliders = rwmb_meta('group_z51mty6u3w');
						foreach ($GridSliders as $GridSlider): 
							$bgGS = wp_get_attachment_image_url( $GridSlider['bg_Gridslider'], 'full' );
							?>				
							<div class="item" style="background-image: url(<?= $bgGS ?>;">
								<img src="<?= $bgGS ?>" alt="Image">
							</div>
						<?php endforeach; ?>
					</div>

			</div>
			<div class="content__right">
				<div class="right__slider owl-carousel">
					<?php 
					foreach ($GridSliders as $GridSlider): 
					$logobrownGS = wp_get_attachment_image_url( $GridSlider['logobrown_Gridslider'], 'full' );
					$CategoryGS  = $GridSlider['category_Gridslider'];
					$NameGS  = $GridSlider['name_Gridslider'];
					$TextGS  = $GridSlider['text_Gridslider'];
					$previewGS  = $GridSlider['preview_Gridslider'];
					$LinkGS  = $GridSlider['url_Gridslider'];
					?>			
					<div class="item">	
						<div class="item__box">	
							<div class="item__circle">
								<img src="<?php echo $logobrownGS; ?>" alt="Circle">
							</div>
							<div class="clearfix"></div>
							<div class="item__category"><?= $CategoryGS ?></div>

							<div class="item__name">
								<h3><?= $NameGS ?></h3>
								<div class="item__arrow">
									<div class="arrow__prev"></div>
									<div class="arrow__next"></div>
								</div>							
							</div>

							<div class="item__text">
								<?= $TextGS ?>
							</div>
							<a href="<?=$LinkGS?>" class="item__more">
								<span></span>
								<?= $previewGS ?>
							</a>

							<div class="item__book md-trigger" data-modal="#book">
								REQUEST AN APPOINTMENT
							</div>
						</div>
					</div>
					
					<?php endforeach; ?>
				</div>
			</div>
		</section> <!-- Content Grid 2 Slider -->

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
								<a href="<?php echo get_permalink(); ?>" title="">
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