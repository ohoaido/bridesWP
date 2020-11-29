<?php
/*ADD CUSTOM POST TYPE*/
add_theme_support( 'post-thumbnails' );
function codex_custom_init_accessories() {
  $labels = array(
    'name' => 'Accessories',
    'singular_name' => 'Accessories',
    'add_new' => 'Add new Accessories',
    'add_new_item' => 'Add new Accessories',
    'edit_item' => 'Edit Accessories',
    'new_item' => 'Add new Accessories',
    'all_items' => 'View all Accessories',
    'view_item' => 'View all Accessories',
    'search_items' => 'Search Accessories',
    'not_found' =>  'Not found',
    'not_found_in_trash' => 'Empty',
    'parent_item_colon' => '',
    'menu_name' => 'Accessories',    
  );
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'accessories' ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'thumbnail'),    
    'menu_icon' => 'dashicons-store',
  );

  register_post_type( 'accessories', $args );
}
add_action( 'init', 'codex_custom_init_accessories' );

/*ADD TAXONOMIES*/
function add_custom_taxonomies_accessories() {
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('accessories-category', 'accessories', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => _x( 'Accessories Category', 'taxonomy general name' ),
            'singular_name' => _x( 'Accessories Category', 'taxonomy singular name' ),
            'search_items' =>  __( 'Find Accessories Category' ),
            'all_items' => __( 'Accessories Category' ),
            'parent_item' => __( 'Type Parent' ),
            'parent_item_colon' => __( 'Type Parent:' ),
            'edit_item' => __( 'Edit Accessories Category' ),
            'update_item' => __( 'Edit Accessories Category' ),
            'add_new_item' => __( 'Add Accessories Category' ),
            'new_item_name' => __( 'Add Accessories Category' ),
            'menu_name' => __( 'Accessories Category' ),
        ),
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'accessories-category', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
}

add_action( 'init', 'add_custom_taxonomies_accessories', 0 );

?>