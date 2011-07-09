<?php
add_action( 'init', 'create_post_type' );

function create_post_type() {
    register_post_type( 'wahlin-work',
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
    		'menu_position' => 5,
        )
    );
}
?>