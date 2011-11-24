<?php 
/**
  * The functions file
  *
  * @package WordPress
  * @subpackage Tom Wahlin V3
  * @since Tom Wahlin 2009
  */

?>

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
  echo "$thumb";
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

//de-bloat and remove wordpress clutter
function disable_default_dashboard_widgets() {  
  // remove_meta_box('dashboard_right_now', 'dashboard', 'core');  
  // remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');  
  remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');  
  remove_meta_box('dashboard_plugins', 'dashboard', 'core');  
  remove_meta_box('dashboard_quick_press', 'dashboard', 'core');  
  // remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');  
  remove_meta_box('dashboard_primary', 'dashboard', 'core');  
  remove_meta_box('dashboard_secondary', 'dashboard', 'core');  
}  
add_action('admin_menu', 'disable_default_dashboard_widgets');
//end de-bloat and remove wordpress clutter

// remove default wordpress menu items
function remove_menus () {  
  global $menu;  
  $restricted = array(__('Links'), __('Media'), __('Posts'));  
  end ($menu);  
  while (prev($menu)){  
    $value = explode(' ',$menu[key($menu)][0]);  
    if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}  
  }  
}  
add_action('admin_menu', 'remove_menus');
// end remove default wordpress menu items

// Customize footer text
function modify_footer_admin () {  
  echo 'Created by <a href="http://www.tomwahlin.com/">Tom Wahlin</a>. Powered by <a href="http://www.wordpress.org">WordPress</a>.  •
  <a href="http://codex.wordpress.org/">Documentation</a> •
  <a href="http://twimac.local:8888/V3/wp-admin/freedoms.php">Freedoms</a> •
  <a href="http://wordpress.org/support/forum/4">Feedback</a> •
  <a href="http://twimac.local:8888/V3/wp-admin/credits.php">Credits</a>';  
}  

add_filter('admin_footer_text', 'modify_footer_admin');
// End Customize footer text

/*-----------------------------------------------------------------------------------
  Includes
  -----------------------------------------------------------------------------------*/

//Add custom post types
include("includes/admin/custom_post_types.php");

//Add custom meta boxes
include("includes/admin/custom_meta_boxes.php");

?>