<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}
// add_action( 'pre_get_posts', 'extraire_cours' );
// function extraire_cours( $query ) {
//     if ($query->is_category('cours'))
//     {
//        $query->set( 'posts_per_page', 30 );
//        $query->set( 'orderby', 'title' );
//        $query->set( 'order', 'ASC' );
//     }
//  }

// show_admin_bar( true );