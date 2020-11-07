<?php 
    global $fr_options;
?>
<?php    
    /*
        Template Name: Designers Collection Detail Template
    */
?>
<?php get_header() ?>
	<!-- Content -->
	<main id="content">
		<!-- Content Designers Collection Detail -->
		<section class="content-designers-cdetail">
			<div class="content_top">				
				<div class="container">
					<div class="content_box">						
						<div class="category"><?= rwmb_meta('category_content_designers_cdetail') ?></div>

						<h2 class="name"><?= rwmb_meta('name_content_designers_cdetail') ?></h2>

						<div class="auth">
							by <span><?= rwmb_meta('auth_content_designers_cdetail') ?></span>
						</div>

						<div class="text">
							<?= rwmb_meta('text_content_designers_cdetail') ?>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="content_collections">
					<?php 
					$imagesccs = rwmb_meta('group_e6p0kistl4');
					foreach ($imagesccs as $imagescc): 
						$bgcc = wp_get_attachment_image_url( $imagescc['gallery_1_content_designers_cdetail'], 'full' );
						$Namecc = $imagescc['name_gallery_content_designers_cdetail'];
						$Dtfancyboxcc = $imagescc['data_fancybox'];
						?>						
						<div class="item">
							<div class="item__image" data-fancybox="<?= $Dtfancyboxcc ?>" href="<?= $bgcc ?>" >
								<img src="<?= $bgcc ?>" alt="">
							</div>
							<h3 class="item__name">
								<?=  $Namecc ?> 
							</h3>
							<ul class="hide">
								<?php 
								$imgpps = $imagescc['group_b2eknfvjeyf'];
								foreach ($imgpps as $imgpp): 
									$bgpopup = wp_get_attachment_image_url( $imgpp['gallery_2_cdesigners_cdetail'], 'full' );
									?>				
										<li data-fancybox="<?= $Dtfancyboxcc ?>" href="<?= $bgpopup ?>"></li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endforeach; ?>
			</div>

			<div class="container">		
				<div class="content_bottom">	
					<div class="bottom__box">							
						<div class="detail__back"><?= rwmb_meta('back_collections') ?></div>

						<div class="detail__book md-trigger" data-modal="#book">
							REQUEST AN APPOINTMENT
						</div>

						<div class="detail__share">
							<ul class="social">
				                <?php if($fr_options['footer_field_06']) :?>
				                <li>
				                    <a href="<?= $fr_options['footer_field_06']?>" title=""  target="_blank">
				                        <i class="fa fa-instagram"></i>
				                    </a>
				                </li>
				                <?php endif;?>
				                <?php if($fr_options['footer_field_08']) :?>
				                <li>
				                    <a href="<?= $fr_options['footer_field_08']?>" title=""  target="_blank">
				                        <i class="fa fa-twitter"></i>
				                    </a>
				                </li>
				                <?php endif;?>
								<?php if($fr_options['footer_field_05']) :?>
				                <li>
				                    <a href="<?= $fr_options['footer_field_05']?>" title=""  target="_blank">
				                        <i class="fa fa-facebook"></i>
				                    </a>
				                </li>
				                <?php endif;?>
							</ul>
							<div class="share">
								<span></span>
								<?= rwmb_meta('share_collections') ?>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</section> <!-- /Content Designers Detail -->
	</main>  <!-- /Content -->

	<div class="clearfix"></div>
<?php get_footer() ?>