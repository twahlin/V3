<?php include "includes/admin/custom_meta_boxes.php" ?>        
<?php include "includes/admin/custom_post_types.php" ?> 
        
        
<?php
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
    ?>
    <style>
        #menu-posts{ display:none; }
    </style>
    <?php
}
// End hides posts in admin menu
?>