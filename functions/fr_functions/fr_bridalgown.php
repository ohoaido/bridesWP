<?php
/*ADD CUSTOM POST TYPE*/
add_theme_support( 'post-thumbnails' );
function codex_custom_init_bridalgown() {
  $labels = array(
    'name' => 'Bridalgown',
    'singular_name' => 'Bridalgown',
    'add_new' => 'Add new Bridalgown',
    'add_new_item' => 'Add new Bridalgown',
    'edit_item' => 'Edit Bridalgown',
    'new_item' => 'Add new Bridalgown',
    'all_items' => 'View all Bridalgown',
    'view_item' => 'View all Bridalgown',
    'search_items' => 'Search Bridalgown',
    'not_found' =>  'Not found',
    'not_found_in_trash' => 'Empty',
    'parent_item_colon' => '',
    'menu_name' => 'Bridalgown',    
  );
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'bridalgown' ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'thumbnail'),    
    'menu_icon' => 'dashicons-store',
  );

  register_post_type( 'bridalgown', $args );
}
add_action( 'init', 'codex_custom_init_bridalgown' );

/*ADD TAXONOMIES*/
function add_custom_taxonomies_bridalgown() {
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('bridalgown-category', 'bridalgown', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => _x( 'Bridalgown Category', 'taxonomy general name' ),
            'singular_name' => _x( 'Bridalgown Category', 'taxonomy singular name' ),
            'search_items' =>  __( 'Find Bridalgown Category' ),
            'all_items' => __( 'Bridalgown Category' ),
            'parent_item' => __( 'Type Parent' ),
            'parent_item_colon' => __( 'Type Parent:' ),
            'edit_item' => __( 'Edit Bridalgown Category' ),
            'update_item' => __( 'Edit Bridalgown Category' ),
            'add_new_item' => __( 'Add Bridalgown Category' ),
            'new_item_name' => __( 'Add Bridalgown Category' ),
            'menu_name' => __( 'Bridalgown Category' ),
        ),
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'bridalgown-category', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
}

add_action( 'init', 'add_custom_taxonomies_bridalgown', 0 );

?>