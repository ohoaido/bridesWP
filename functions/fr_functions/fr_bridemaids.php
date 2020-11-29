<?php
/*ADD CUSTOM POST TYPE*/
add_theme_support( 'post-thumbnails' );
function codex_custom_init_bridemaids() {
  $labels = array(
    'name' => 'Bridemaids',
    'singular_name' => 'Bridemaids',
    'add_new' => 'Add new Bridemaids',
    'add_new_item' => 'Add new Bridemaids',
    'edit_item' => 'Edit Bridemaids',
    'new_item' => 'Add new Bridemaids',
    'all_items' => 'View all Bridemaids',
    'view_item' => 'View all Bridemaids',
    'search_items' => 'Search Bridemaids',
    'not_found' =>  'Not found',
    'not_found_in_trash' => 'Empty',
    'parent_item_colon' => '',
    'menu_name' => 'Bridemaids',    
  );
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'bridemaids' ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'thumbnail'),    
    'menu_icon' => 'dashicons-store',
  );

  register_post_type( 'bridemaids', $args );
}
add_action( 'init', 'codex_custom_init_bridemaids' );

/*ADD TAXONOMIES*/
function add_custom_taxonomies_bridemaids() {
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('bridemaids-category', 'bridemaids', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => _x( 'Bridemaids Category', 'taxonomy general name' ),
            'singular_name' => _x( 'Bridemaids Category', 'taxonomy singular name' ),
            'search_items' =>  __( 'Find Bridemaids Category' ),
            'all_items' => __( 'Bridemaids Category' ),
            'parent_item' => __( 'Type Parent' ),
            'parent_item_colon' => __( 'Type Parent:' ),
            'edit_item' => __( 'Edit Bridemaids Category' ),
            'update_item' => __( 'Edit Bridemaids Category' ),
            'add_new_item' => __( 'Add Bridemaids Category' ),
            'new_item_name' => __( 'Add Bridemaids Category' ),
            'menu_name' => __( 'Bridemaids Category' ),
        ),
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'bridemaids-category', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
}

add_action( 'init', 'add_custom_taxonomies_bridemaids', 0 );

?>