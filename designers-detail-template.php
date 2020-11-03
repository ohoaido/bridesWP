<?php 
    global $fr_options;
?>
<?php    
    /*
        Template Name: Designers Detail Template
    */
?>
<?php get_header() ?>
	<!-- Content -->
	<!-- Content -->
	<main id="content">
		<!-- Content Designers Detail -->
		<section class="content-designers-detail">
			<div class="content_top">				
				<div class="container">
					<div class="content_box">						
						<div class="category"><?= rwmb_meta('category_designers_detail') ?></div>

						<h2 class="name"><?= rwmb_meta('name_designers_detail') ?></h2>

						<div class="text">
							<?= rwmb_meta('text_designers_detail') ?>
						</div>
					</div>
				</div>
			</div>
			<div class="content_collections">
				<?php 
				$imagesdesignersdetail = rwmb_meta('group_fwov5uwj76');
				foreach ($imagesdesignersdetail as $imagesdd): 
					$bgdd = wp_get_attachment_image_url( $imagesdd['image_collections'], 'full' );
					$Textdd = $imagesdd['text_collections'];
					$previewdd = $imagesdd['preview_collections'];
					$Linkdd = $imagesdd['url_collections'];
					?>						
					<div class="item" style="background-image: url(<?=  $bgdd ?>);">
						<div class="container">
							<h3 class="item__name">
								<?=  $Textdd ?> 
							</h3>

							<a href="#" class="item__more">
								<span></span>
								<?=  $previewdd ?> 
							</a>						
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="content_bottom">
				<div class="container">			
					<div class="bottom__box">							
						<div class="detail__back"><?= rwmb_meta('back_collections') ?></div>

						<div class="detail__book md-trigger" data-modal="#book">
							REQUEST AN APPOINTMENT
						</div>

						<div class="detail__share">
							<ul class="social">
				                <?php if($fr_options['footer_field_06']) :?>
				                <li>
				                    <a href="<?= $fr_options['footer_field_06']?>" title="">
				                        <i class="fa fa-instagram"></i>
				                    </a>
				                </li>
				                <?php endif;?>
				                <?php if($fr_options['footer_field_08']) :?>
				                <li>
				                    <a href="<?= $fr_options['footer_field_08']?>" title="">
				                        <i class="fa fa-twitter"></i>
				                    </a>
				                </li>
				                <?php endif;?>
								<?php if($fr_options['footer_field_05']) :?>
				                <li>
				                    <a href="<?= $fr_options['footer_field_05']?>" title="">
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