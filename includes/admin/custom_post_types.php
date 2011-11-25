<?php 

// Custom Post types
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'work',
        array(
            'labels' => array(
            'name' => __( 'Works' ),
            'singular_name' => __( 'Work' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array (
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'categories'
            ),
            'has_archive' => 'work',
            'menu_position' => 5,
            'taxonomies' => array('category'),
            'rewrite' => array('slug' => 'work')
        )
    );
    register_post_type( 'goods',
        array(
            'labels' => array(
            'name' => __( 'Goods' ),
            'singular_name' => __( 'Good' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array (
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'categories'
            ),
            'has_archive' => 'goods',
            'menu_position' => 6,
            'rewrite' => array('slug' => 'goods')
        )
    );
    register_post_type( 'blog',
        array(
            'labels' => array(
            'name' => __( 'Blog Posts' ),
            'singular_name' => __( 'Blog' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array (
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'categories'
            ),
            'has_archive' => 'blog',
            'menu_position' => 6,
            'taxonomies' => array('category'),
            'rewrite' => array('slug' => 'blog')
        )
    );
}
// End Custom Post types

?>