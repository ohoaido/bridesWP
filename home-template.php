
<?php    
    /*
        Template Name: Home Page Template
    */
?>
<?php get_header() ?>
<!-- Content -->
	<main id="content">
		<?php wp_reset_query();?>
		<!-- Content Banner -->
		<section class="content-banner">
			<?php
				$images = rwmb_meta('group_srhijqh02zs');
				$count = count($images);
			?>
			<div class="box_caption">				
				<div class="container">
					<div class="box__center">
						<div class="caption">
							<div class="slider__arrow">
								<div class="arrow__prev"></div>
								<div class="arrow__number">
									<span class="number__current">1</span> / <span class="number__max"><?= $count ?></span>
								</div>
								<div class="arrow__next"></div>
							</div>
							<div class="title">
								<?= rwmb_meta('text_1') ?>
							</div>

							<div class="text">
								<?= rwmb_meta('text_2') ?>
							</div>
							<a href="<?= rwmb_meta('url_3') ?>" class="read__more">
								<span></span>
								<?= rwmb_meta('text_3') ?>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="box_sliders owl-carousel">	
				<?php 
					foreach ($images as $image): 
						$bg = wp_get_attachment_image_url( $image['background_1'], 'full' );
						?>						
						<div class="banner_child" style="background-image: url(<?=  $bg ?>);">
						</div>	
					<?php endforeach; ?>
			</div>
		</section> <!-- /Content Banner -->
		<?php wp_reset_query();?>
		<!-- Content Gallery -->
		<section class="content-gallery">
			<div class="container">
				<div class="content_box">
					<div class="box__images owl-carousel">
					<?php 
						$images_gallery = rwmb_meta('group_gallery');
						$count_gallery = count($images_gallery);

						foreach ($images_gallery as $index=> $image_gallery): 
							$cg = wp_get_attachment_image_url( $image_gallery['background_2'], 'full' );
							?>						
								<div class="image__child" style="background-image: url(<?=  $cg ?>);">
								</div>	
						<?php endforeach; ?>
					</div>
						<div class="box__gray">						
							<div class="box__captions owl-carousel">								
								<?php
									foreach ($images_gallery as $index=> $image_gallery): 
										$Category = $image_gallery['text_4'];
										$Name = $image_gallery['text_5'];
										$Text = $image_gallery['text_6'];
										$Prevew = $image_gallery['text_7'];
										$Link = $image_gallery['url_7'];
										?>
										<div class="caption__child">
											<div class="child__category"><?=  $Category ?> </div>

											<div class="child__name"><?= $Name ?></div>

											<div class="child__text">
												<?= $Text ?>
											</div>
											<a class="child__more">
												<span></span>
												<?= $Prevew ?>
											</a>
										</div>

									<?php endforeach; ?>
							</div>
							<div class="box__arrow">							
								<div class="arrow__prev"></div>
								<div class="arrow__number">
									<span class="number__current">1</span> / <span class="number__max"><?= $count_gallery ?></span>
								</div>
								<div class="arrow__next"></div>
							</div>
						</div>
				</div>
			</div>
		</section> <!-- /Content Gallery -->
		<?php wp_reset_query();?>
		<!-- Content About -->
		<section class="content-about">

			<?php
				$images_about = rwmb_meta('group_mjejvl6xzyj');
			?>
			<div class="container">
				<div class="content_box">
					<div class="box__small"><?= rwmb_meta('text_8') ?></div>
					<h2 class="box__heading"><?= rwmb_meta('text_9') ?></h2>
					<div class="box__text">
						<?= rwmb_meta('text_10') ?>
					</div>
				</div>	
			</div>

			<?php 
				foreach ($images_about as $image_about): 
					$bg3 = wp_get_attachment_image_url( $image_about['background_3'], 'full' );
					$bg4 = wp_get_attachment_image_url( $image_about['background_4'], 'full' );
					$bg5 = wp_get_attachment_image_url( $image_about['background_5'], 'full' );
					$bg6 = wp_get_attachment_image_url( $image_about['background_6'], 'full' );
					$text_11 = $image_about['text_11'];
					$text_12 = $image_about['text_12'];
					$text_13 = $image_about['text_13'];
					$text_14 = $image_about['text_14'];

					?>					
				<div class="box__left">
					<div class="box__img1" style="background-image: url(<?=  $bg3 ?>);">					
					</div>
					<div class="box__quote">
						<div class="box__img2" style="background-image: url(<?=  $bg4 ?>);">
						</div>
						<div class="quote__text">
							<?= $text_11 ?>
						</div>

						<div class="quote__more">
							<span></span>
							<?= $text_12 ?>
						</div>
					</div>
				</div>

				<div class="box__right">
					<div class="box__caption">
						<div class="caption__circle">
							<img src="<?php echo $bg5; ?>" alt="Logo">
						</div>
						<div class="caption__text">
							<?= $text_13 ?>
						</div>
						<a class="caption__more">
							<span></span>
							<?= $text_14 ?>
						</a>
					</div>
					<div class="box__img3" style="background-image: url(<?=  $bg6 ?>);">					
					</div>

				</div>	
				<?php endforeach; ?>

			<script>
				jQuery(document).ready(function($) {
					if(jQuery(window).width() > 992){	
						var height = jQuery('.content-about .box__left').outerHeight();
						jQuery('.content-about .box__right .box__img3').height(height - jQuery('.content-about .box__right .box__caption').outerHeight() - 55);
					}

					jQuery(window).resize(function(event) {
						/* Act on the event */
						if(jQuery(window).width() > 992){	
							var height = jQuery('.content-about .box__left').outerHeight();
							jQuery('.content-about .box__right .box__img3').height(height - jQuery('.content-about .box__right .box__caption').outerHeight() - 55);
						}
					});
				});
			</script>
		</section> <!-- /Content About -->
		<?php wp_reset_query();?>
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
                                'post_type' => 'bridalgowns',
                                'post_status' => 'publish',     
                                'posts_per_page' => 10,
			                    'order' => 'DESC'
                            );
                            query_posts($args1);    
                        ?>                   
                        <?php while (have_posts()) : the_post();  ?>
							<div class="item">
								<a href="#" title="">
									<div class="item__img">
										<img src="<?=  rwmb_meta('background_8')['full_url'] ?>" alt="Image">
										<img src="<?=  rwmb_meta('background_9')['full_url'] ?>" alt="Image">
										
									</div>
									<div class="item__caption">
										<h3 class="item__name">Cassids</h3>
										<div class="item__auth">by <span>Anne Barge</span></div>
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

		<?php wp_reset_query();?>

		<!-- Content Background and Text -->
		<section class="content-btext">
			<div class="content_img" style="background-image: url(<?=  rwmb_meta('background_10')['full_url'] ?>)"></div>
			<div class="container">
				<div class="content_box">
					<div class="box__flex">
						<?= rwmb_meta('textarea_1') ?>
					</div>
				</div>
			</div>
		</section> <!-- /Content Background and Text -->
	</main>  <!-- /Content -->

	<div class="clearfix"></div>
<?php get_footer() ?>