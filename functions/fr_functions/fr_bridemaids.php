<?php
/*ADD CUSTOM POST TYPE*/
add_theme_support( 'post-thumbnails' );
function codex_custom_init_bridemaids() {
  $labels = array(
    'name' => 'Bridemaids',
    'singular_name' => 'Bridemaids',
    'add_new' => 'Add new bridemaid',
    'add_new_item' => 'Add new bridemaid',
    'edit_item' => 'Edit bridemaid',
    'new_item' => 'Add new bridemaid',
    'all_items' => 'View all bridemaid',
    'view_item' => 'View all bridemaid',
    'search_items' => 'Search bridemaid',
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
?>