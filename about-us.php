<?php 
    global $fr_options;
?>
<?php    
    /*
        Template Name: About Us Template
    */
?>
<?php get_header() ?>
	<!-- Content -->
	<main id="content">
		<!-- Content Banner About Us -->
		<section class="content-banner-about" style="background-image: url(<?= rwmb_meta('image_content_banner_about',array("size" => "full"))['url']?>);">
			<h1>About Us</h1>
		</section> <!-- /Content Banner About Us -->

		<section class="content-about1">
			<div class="section_1">
				<div class="box__left">
					<div class="box__img" style="background-image: url(<?= rwmb_meta('image_section_1',array("size" => "full"))['url'] ?>);">
						<img src="<?=  rwmb_meta('image_section_1')['full_url'] ?>" alt="Image">	
					</div>					
				</div>
				<div class="box__right">					
					<div class="box__text">
						<?=  rwmb_meta('text_section_1') ?>
					</div>
				</div>
			</div>

			<div class="section_2">
				<div class="box__right">
					<div class="box__img"  style="background-image: url(<?= rwmb_meta('image_section_2',array("size" => "full"))['url'] ?>);">
						<img src="<?=  rwmb_meta('image_section_2')['full_url'] ?>" alt="Image">
					</div>
				</div>
				<div class="box__left">
					<div class="box__text">
						<?=  rwmb_meta('text_section_2') ?>
					</div>
				</div>
			</div>

			<div class="section_3">
				<div class="box__left">
					<div class="box__img" style="background-image: url(<?= rwmb_meta('image_section_3',array("size" => "full"))['url'] ?>);">						
						<img src="<?=  rwmb_meta('image_section_3')['full_url'] ?>" alt="Image">
					</div>
				</div>
				<div class="box__right">
					<div class="box__small">
						<div class="box__text">
							<?=  rwmb_meta('text_section_3') ?>
						</div>

						<div class="box__img">
							<img src="<?=  rwmb_meta('Image_About_3')['full_url'] ?>" alt="Image">
						</div>
					</div>
				</div>
			</div>

			<div class="section_4">
				<div class="box__left">
					<div class="box__info">
						<img src="<?=  rwmb_meta('image_section_4')['full_url'] ?>" alt="Logo" class="box__circle">
						<?=  rwmb_meta('text_section_4') ?>
					</div>
				</div>

				<div class="box__right">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4409088812968!2d106.69669761526038!3d10.777503562119772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f38116cb5a7%3A0x18aecabfdb1c1565!2zOTUgUGFzdGV1ciwgQuG6v24gTmdow6ksIFF14bqtbiAxLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1606722269653!5m2!1svi!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>

		</section>
		
		<!-- Content About 2 -->
		<section class="content-about2" style="background-image: url(<?= rwmb_meta('image_about_2',array("size" => "full"))['url'] ?>);">
			<div class="container">
				<h2><?=  rwmb_meta('text_about_2') ?></h2>

				<div class="book md-trigger" data-modal="#book">
					REQUEST AN APPOINTMENT
				</div>
			</div>
		</section> <!-- /Content About 2 -->
	</main>  <!-- /Content -->

	<div class="clearfix"></div>
<?php get_footer() ?>