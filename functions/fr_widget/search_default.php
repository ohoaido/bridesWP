<?php
/**
 * General template tags that can go anywhere in a template.
 *
 * @package WordPress
 * @subpackage Template
 */

function my_search_form( $form ) {
    $form = '<div id="search"><form role="search" method="get" id="form-search" class="searchform" action="' . home_url( '/' ) . '" >
    
    <input type="text" value="' . get_search_query() . '" name="s" id="s" class="search" placeholder="Tìm kiếm"/>
    <input type="hidden" name="post_type" value="post">
    <input type="submit" id="searchsubmit" value="" />
    </form>
    </div>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form', 100 );