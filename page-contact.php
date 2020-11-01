<?php 
    global $fr_options;
?>
<?php get_header() ?>
<?php    
    /*
        Template Name: Contact Page Template
    */
?>
	<!-- Content -->
	<main id="content">
		<!-- Content Breadcrumbs -->
		<section class="content-breadcrumbs" style="background-image: url(<?php the_field('background') ?>);">
			<div class="container">
				<div class="content-breadcrumbs_box">
					<h1><?php the_title() ?></h1>					
				</div>
			</div>
		</section> <!-- /Content Breadcrumbs -->

		<div class="clearfix"></div>

		<!-- Content Contact -->
		<section class="content-contact">
			<div class="container">
				<div class="content-contact_box">
					<div class="box__left">
						<h2 class="heading"><?php the_field('name') ?></h2>
						<div class="text">
							<?php the_field('information') ?>
						</div>

						<ul class="no-style information">
							<?php if(get_field('address')){ ?>
								<li>
									<a href="http://maps.google.com/?q=<?php the_field('address') ?>" target="_blank">
										<div class="icon">
											<i class="fa fa-map-marker" aria-hidden="true"></i>
										</div>
										<?php the_field('address') ?>
									</a>
								</li>
							<?php } ?>
							<?php if(get_field('hotline')){ ?>
								<li>
									<a href="tel: <?php the_field('hotline') ?>">
										<div class="icon">
											<i class="fa fa-phone" aria-hidden="true"></i>
										</div>
										<?php the_field('hotline') ?>
									</a>
								</li>
							<?php } ?>
							<?php if(get_field('email')){ ?>
								<li>
									<a href="mailTo: <?php the_field('email') ?>">
										<div class="icon">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
										<?php the_field('email') ?>
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>

					<div class="box__right">
						<h2 class="heading"><?php the_field('title') ?></h2>

						<div class="form">
							<?= do_shortcode(get_field('contact_form')) ?>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- /Content Contact -->

		<div class="clearfix"></div>

		<!-- Content Gmap -->
		<section class="content-gmap">
			<div class="container">
				<div class="content-gmap_box">
					<h2 class="heading"><?php the_field('title_2') ?></h2>
					<?php the_field('gmap') ?>
				</div>
			</div>
		</section> <!-- /Content Gmap -->
	</main>  <!-- /Content -->

<?php get_footer() ?>