<?php 
    global $fr_options;
?>
<?php get_header() ?>
<?php    
    /*
        Template Name: Home Page Template 1
    */
?>
	<!-- Content -->
	<main id="content">
		<!-- Content Banner -->
		<section class="content-banner" style="background-image: url(<?php the_field('image_1') ?>);">
			<div class="container">
				<div class="content-banner_box">
					<h2 class="heading"><?php the_field('title_1') ?></h2>
					<h3 class="paragraph"><?php the_field('text_1') ?></h3>

					<div class="clearfix"></div>

					<div class="items">
						<?php if(get_field('services')) { while(the_repeater_field('services')) { ?>
							<a href="<?php the_field('url') ?>" class="item">
								<div class="item__img">
									<img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('name') ?>">
								</div>
								<div class="item__name"><?php the_sub_field('name') ?></div>
							</a>
	                    <?php } } ?>
					</div>

					<div class="items__slider owl-carousel">
						<?php if(get_field('services')) { while(the_repeater_field('services')) { ?>
							<a href="<?php the_field('url') ?>" class="item">
								<div class="item__img">
									<img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('name') ?>">
								</div>
								<div class="item__name"><?php the_sub_field('name') ?></div>
							</a>
	                    <?php } } ?>
					</div>

					<div class="clearfix"></div>

					<?php if(get_field('link_button')) { ?>
						<a href="<?php the_field('link_button') ?>" class="more">
							<?php the_field('text_button') ?>
						</a>
					<?php } ?>
				</div>
			</div>
		</section> <!-- /Content Banner -->

		<!-- Content About Us -->
		<section class="content-about">
			<div class="container">
				<div class="content-about_box">
					<div class="content-about_box__left">
						<img src="<?php the_field('image_2') ?>" alt="">
					</div>
					<div class="content-about_box__right">
						<h2 class="heading">
							<b><?php the_field('title_black') ?></b><br/>
							<?php the_field('title_green') ?>
						</h2>

						<div class="paragraph">
							<?php the_field('text_2') ?>
						</div>	

						<div class="other">
							<?php the_field('strong_green') ?>
						</div>

						<?php if(get_field('link_button_2')) { ?>
							<a href="<?php the_field('link_button_2') ?>" class="more">
								<?php the_field('text_button_2') ?>
							</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</section> <!-- /Content About Us -->
	</main>  <!-- /Content -->
<?php get_footer() ?>