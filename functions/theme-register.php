<?php	
    define('FR_DIRECTORY', get_template_directory_uri());
    
    function fr_script(){
    	wp_enqueue_script('c_bootstrap',  FR_DIRECTORY. '/js/bootstrap.js');
    	wp_enqueue_script('c_wow',  FR_DIRECTORY. '/js/wow.js');
    	wp_enqueue_script('c_owl.carousel',  FR_DIRECTORY. '/js/owl.carousel.min.js');
    	wp_enqueue_script('c_sticky',  FR_DIRECTORY. '/js/jquery.sticky.js');
    	wp_enqueue_script('c_script',  FR_DIRECTORY. '/js/script.js');
	}
	add_action('wp_enqueue_scripts', 'fr_script');

	function fr_style(){
		wp_enqueue_style('bootstrap',  FR_DIRECTORY. '/css/bootstrap.css');
		wp_enqueue_style('font-awesome',  FR_DIRECTORY. '/css/font-awesome.min.css');
		wp_enqueue_style('owl.carousel',  FR_DIRECTORY. '/css/owl.carousel.min.css');
		wp_enqueue_style('owl.theme',  FR_DIRECTORY. '/css/owl.theme.default.min.css');
		wp_enqueue_style('animate',  FR_DIRECTORY. '/css/animate.min.css');
		wp_enqueue_style('font',  FR_DIRECTORY. '/css/font.css');
		wp_enqueue_style('style',  FR_DIRECTORY. '/css/style.css');
	}
	add_action('wp_enqueue_scripts', 'fr_style');

	// function back_end_css(){
	//     wp_register_style( 'custom_wp_admin_css', get_bloginfo( 'stylesheet_directory' ) . '/css/vc_edit.css', false, '1.0.0' );
	//     // wp_register_style( 'custom_wp_admin_css_redux', get_bloginfo( 'stylesheet_directory' ) . '/css/redux.css', false, '1.0.0' );
	//     wp_enqueue_style( 'custom_wp_admin_css' );
	//     // wp_enqueue_style( 'custom_wp_admin_css_redux' );
	// }
	// add_action( 'admin_enqueue_scripts', 'back_end_css' );


	add_theme_support('menus');
	register_nav_menus(array(
		'main' => 'Main Menu',
		'link' => 'Useful link Menu',
	));
?>