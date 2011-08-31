<?php

/*-----------------------------------------------------------------------------------
Functions
-----------------------------------------------------------------------------------*/

//Adding post formats for global use if needed
add_theme_support( 'post-formats', array( 'gallery', 'link', 'image', 'quote', 'status', 'video' ) );
//End Adding post formats for global use if needed

//post type to custom format blog
add_post_type_support( 'blog', 'post-formats' );
//end post type to custom format blog

// adds body classes to respective pages
function add_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_body_class' );
//end adds body classes to respective pages

// Hides posts in admin menu
add_action('admin_head', 'hide_menus');

function hide_menus() {
    echo
    '<style>
        #menu-posts{ display:none; }
    </style>';
}
// End hides posts in admin menu

/*-----------------------------------------------------------------------------------
Includes
-----------------------------------------------------------------------------------*/

//Add custom post types
include("includes/admin/custom_post_types.php");

//Add custom meta boxes
include("includes/admin/custom_meta_boxes.php");



?>