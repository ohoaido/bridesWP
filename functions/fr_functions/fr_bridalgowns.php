<?php
/*ADD CUSTOM POST TYPE*/
add_theme_support( 'post-thumbnails' );
function codex_custom_init_bridalgowns() {
  $labels = array(
    'name' => 'Bridalgowns',
    'singular_name' => 'Bridalgowns',
    'add_new' => 'Add new bridal gowns',
    'add_new_item' => 'Add new bridal gowns',
    'edit_item' => 'Edit bridal gowns',
    'new_item' => 'Add new bridal gowns',
    'all_items' => 'View all bridal gowns',
    'view_item' => 'View all bridal gowns',
    'search_items' => 'Search bridal gowns',
    'not_found' =>  'Not found',
    'not_found_in_trash' => 'Empty',
    'parent_item_colon' => '',
    'menu_name' => 'Bridalgowns',    
  );
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'bridalgowns' ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'thumbnail'),    
    'menu_icon' => 'dashicons-store',
  );

  register_post_type( 'bridalgowns', $args );
}
add_action( 'init', 'codex_custom_init_bridalgowns' );
?>