<?php

/*-----------------------------------------------------------------------------------
Functions
-----------------------------------------------------------------------------------*/

//Adding post formats for global use if needed
add_theme_support( 'post-formats', array( 'gallery', 'link', 'image', 'quote', 'video' ) );
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

// Hides posts in admin menu and ovverides other styles
add_action('admin_head', 'override_styles');

function override_styles() {
    echo
    '<style>
        #menu-posts{ display:none; }
        textarea.widefat{ background-color: #fff; }
    </style>';
}
// End hides posts in admin menu

//post first single image
function img_first() {
$files = get_children('post_parent='.get_the_ID().'&post_type=attachment&post_mime_type=image');
  if($files) :
    $keys = array_reverse(array_keys($files));
    $j=0;
    $num = $keys[$j];
    $image=wp_get_attachment_image($num, 'large', false);
    $imagepieces = explode('"', $image);
    $imagepath = $imagepieces[1];
    $thumb=wp_get_attachment_url($num);
    echo "<img src='$thumb' alt='Post Preview Image' />";
  endif;
}
//end post first single image

//new ribbon for blog posts -- goes over image
function ribbon_new() {
    $current_date = date("Y-m-d G:i:s");
    $post_date = get_the_time("Y-m-d G:i:s");
    $date_difference = (strtotime($current_date) - strtotime($post_date));
    $days_around = $date_difference / (86400);
    $rounded_days_around = round($days_around);
    if ($rounded_days_around < 15 || $rounded_days_around == 0) 
      echo "<div class='ribbon_new'><span>New</span></div>";
}
//end new ribbon for blog posts -- goes over image

function icon_post_format(){
    
}

/*-----------------------------------------------------------------------------------
Includes
-----------------------------------------------------------------------------------*/

//Add custom post types
include("includes/admin/custom_post_types.php");

//Add custom meta boxes
include("includes/admin/custom_meta_boxes.php");

?>