<?php
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
    			'custom-fields',
    			'categories'
    		),
    		'taxonomies' => array('category', 'post_tag'),
    		'has_archive' => 'work',
    		'menu_position' => 5,
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
    			'custom-fields',
    			'categories'
    		),
    		'taxonomies' => array('category', 'post_tag'),
    		'has_archive' => 'goods',
    		'menu_position' => 6,
    		'rewrite' => array('slug' => 'goods')
        )
    );
}
?>