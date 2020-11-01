<?php get_header() ?>
	<main id="content">
		<?php 
            the_post();            
        ?>
		
		<?= the_content() ?>
	</main>

<?php get_footer() ?>