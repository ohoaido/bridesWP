<?php

	// Required Plugin
	include 'core/init.php';

	// Theme
	include 'functions/theme-register.php';
	include 'functions/theme-widget.php';
    include 'functions/theme-include.php';  

	// Visual Composer

	add_theme_support( 'post-thumbnails' );
    function get_featured_img($post_id){
        $img_id = get_post_thumbnail_id($post_id); // lấy id của hình
        $images = wp_get_attachment_image_src( $img_id, false, false ); // lấy link hình featured        
        return $images[0]; // 0: link hình ; 1: width ; 2: height
    }

    function get_featured_img_name($post_id){
        $img_id = get_post_thumbnail_id($post_id); // lấy id của hình
        $img_name = get_post(get_post_thumbnail_id($post_id))->post_title;
        return $img_name;
    }

    function RandomString($length) {	
		$key = null;
    	$keys = array_merge(range(0,9), range('a', 'z'));
    	for($i=0; $i < $length; $i++) {
        	$key .= $keys[array_rand($keys)];
    	}
   		return $key;
	}

    function PTid(){
        $postids = array();
        $latest_category_posts = get_posts('post_type=pricetable&showposts=1000');
        foreach ($latest_category_posts as $catpost) {            
            $thetitle = get_the_title( $catpost->ID );
            $postids[$thetitle] = $catpost->ID;
        }
        return $postids;
    }

    function wpdocs_excerpt_more( $more ) {
        return '...';
    }
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

    function wpdocs_custom_excerpt_length( $length ) {
        return 15;
    }

    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
	
	function __search_by_title_only( $search, $wp_query )
    //function __search_by_title_only( $search, &$wp_query )
    {
        global $wpdb;
        if(empty($search)) {
            return $search; // skip processing - no search term in query
        }
        $q = $wp_query->query_vars;
        $n = !empty($q['exact']) ? '' : '%';
        $search =
        $searchand = '';
        foreach ((array)$q['search_terms'] as $term) {
            $term = esc_sql($wpdb->esc_like($term));
            $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
            $searchand = ' AND ';
        }
        if (!empty($search)) {
            $search = " AND ({$search}) ";
            if (!is_user_logged_in())
                $search .= " AND ($wpdb->posts.post_password = '') ";
        }
        return $search;
    }
    add_filter('posts_search', '__search_by_title_only', 500, 2);

    function vt_resize( $attach_id = null, $img_url = null, $width, $height, $crop = false ) {

        // this is an attachment, so we have the ID
        if ( $attach_id ) {
        
            $image_src = wp_get_attachment_image_src( $attach_id, 'full' );
            $file_path = get_attached_file( $attach_id );
        
        // this is not an attachment, let's use the image url
        } else if ( $img_url ) {
            
            $file_path = parse_url( $img_url );
            $file_path = ltrim( $file_path['path'], '/' );
            //$file_path = rtrim( ABSPATH, '/' ).$file_path['path'];
            
            $orig_size = getimagesize( $file_path );
            
            $image_src[0] = $img_url;
            $image_src[1] = $orig_size[0];
            $image_src[2] = $orig_size[1];
        }
        
        $file_info = pathinfo( $file_path );
        $extension = '.'. $file_info['extension'];

        // the image path without the extension
        $no_ext_path = $file_info['dirname'].'/'.$file_info['filename'];

        $cropped_img_path = $no_ext_path.'-'.$width.'x'.$height.$extension;

        // checking if the file size is larger than the target size
        // if it is smaller or the same size, stop right here and return
        if ( $image_src[1] > $width || $image_src[2] > $height ) {

            // the file is larger, check if the resized version already exists (for crop = true but will also work for crop = false if the sizes match)
            if ( file_exists( $cropped_img_path ) ) {

                $cropped_img_url = str_replace( basename( $image_src[0] ), basename( $cropped_img_path ), $image_src[0] );
                
                $vt_image = array (
                    'url' => $cropped_img_url,
                    'width' => $width,
                    'height' => $height
                );
                
                return $vt_image;
            }

            // crop = false
            if ( $crop == false ) {
            
                // calculate the size proportionaly
                $proportional_size = wp_constrain_dimensions( $image_src[1], $image_src[2], $width, $height );
                $resized_img_path = $no_ext_path.'-'.$proportional_size[0].'x'.$proportional_size[1].$extension;            

                // checking if the file already exists
                if ( file_exists( $resized_img_path ) ) {
                
                    $resized_img_url = str_replace( basename( $image_src[0] ), basename( $resized_img_path ), $image_src[0] );

                    $vt_image = array (
                        'url' => $resized_img_url,
                        'width' => $proportional_size[0],
                        'height' => $proportional_size[1]
                    );
                    
                    return $vt_image;
                }
            }

            // no cached files - let's finally resize it
            $new_img_path = image_resize( $file_path, $width, $height, $crop );
            $new_img_size = getimagesize( $new_img_path );
            $new_img = str_replace( basename( $image_src[0] ), basename( $new_img_path ), $image_src[0] );

            // resized output
            $vt_image = array (
                'url' => $new_img,
                'width' => $new_img_size[0],
                'height' => $new_img_size[1]
            );
            
            return $vt_image;
        }

        // default output - without resizing
        $vt_image = array (
            'url' => $image_src[0],
            'width' => $image_src[1],
            'height' => $image_src[2]
        );
        
        return $vt_image;
    }

    function fr_pagenavi($pages = '', $range = 2)    { 
        $showitems = ($range * 2)+1;  
        global $paged;
        global $fr_options;
        if(empty($paged)) $paged = 1;
        if($pages == '')
        {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if(!$pages)
            {
                $pages = 1;
            }
        }  
        if($pages != 1)
        {
            echo "<div class='fr-pagenavi'>";
            if($paged > 1) {
                echo "<a href='".get_pagenum_link(1)."page/".($paged - 1)."'><i class='fa fa-caret-left'></i></a>";
            }                
            for ($i=1; $i <= $pages; $i++)
            {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                {
                    echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
                }
            }
            if ($paged < $pages){
                echo "<a href='".get_pagenum_link($paged + 1)."'><i class='fa fa-caret-right'></i></a>";  
            }
            echo "</div>";
        }
    }

    
    //Code Visual Composer
    function flashruby_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
        if($tag=='vc_row' || $tag=='vc_row_inner') {
            $class_string = str_replace('vc_row-fluid', '', $class_string);
        }
        if($tag=='vc_column' || $tag=='vc_column_inner') {
            $class_string = preg_replace('/vc_col-sm-12/', 'col-md-12', $class_string);
            $class_string = preg_replace('/vc_col-sm-6/', 'col-md-6', $class_string);
            $class_string = preg_replace('/vc_col-sm-4/', 'col-md-4', $class_string);
            $class_string = preg_replace('/vc_col-sm-3/', 'col-md-3', $class_string);
            $class_string = preg_replace('/vc_col-sm-5/', 'col-md-5', $class_string);
            $class_string = preg_replace('/vc_col-sm-7/', 'col-md-7', $class_string);
            $class_string = preg_replace('/vc_col-sm-8/', 'col-md-8', $class_string);
            $class_string = preg_replace('/vc_col-sm-9/', 'col-md-9', $class_string);
            $class_string = preg_replace('/vc_col-sm-10/', 'col-md-10', $class_string);
            $class_string = preg_replace('/vc_col-sm-11/', 'col-md-11', $class_string);
            $class_string = preg_replace('/vc_col-sm-1/', 'col-md-1', $class_string);
            $class_string = preg_replace('/vc_col-sm-2/', 'col-md-2', $class_string);
        }
        return $class_string;
    }
    // Filter to Replace default css class for vc_row shortcode and vc_column
    add_filter('vc_shortcodes_css_class', 'flashruby_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 

    // add_filter( 'igmb_display_meta_box', 'myprefix_display_gallery_meta_box' );

    // function myprefix_display_gallery_meta_box( $display ) {
        
    //     $display = array(
    //         'title'          => __( 'Image Gallery', 'flashruby' ), // meta box title
    //         'post_type'      => array('products', 'members', 'projects'), // array of post type slugs
    //         'post_id'        => array(), // array of post IDs (any post type)
    //         'page_template'  => array(), // array of page template file names
    //         'page_on_front'  => false, // display on front page (true or false)
    //         'page_for_posts' => false, // display on posts page (true or false)
    //         'priority'       => 'high', // meta box priority
    //         );
        
    //     return $display;
    // }

    add_theme_support('menus');
    register_nav_menus(array(
        'main' => 'Main Menu',
        'link' => 'Useful link Menu',
    ));
   
?>