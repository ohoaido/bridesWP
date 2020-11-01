<?php
    include 'fr_widget/recent_post.php';
    include 'fr_widget/social.php';
    include 'fr_widget/search.php';
    include 'fr_widget/search_default.php';



    if(function_exists('register_sidebar')){  

        register_sidebar(array('name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div id="%1$s" class="fr_widget  %2$s">',  
            'after_widget' => '</div>',  
            'before_title' => '<h3>',  
            'after_title' => '</h3>',  
        )); 
    }


    register_sidebar(array('name' => 'Footer 1',
        'id' => 'footer-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',  
        'after_widget' => '</div>',  
        'before_title' => '<h3>',  
        'after_title' => '</h3>',  
    ));

    register_sidebar(array('name' => 'Footer 2',
        'id' => 'footer-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',  
        'after_widget' => '</div>',  
        'before_title' => '<h3>',  
        'after_title' => '</h3>',  
    )); 

    register_sidebar(array('name' => 'Footer 3',
        'id' => 'footer-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',  
        'after_widget' => '</div>',  
        'before_title' => '<h3>',  
        'after_title' => '</h3>',  
    ));
?>