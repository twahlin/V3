<div <?php post_class(post_wrap); ?> id="post-<?php the_ID(); ?>">
    

        
        
        
        
    <?php


    	$quote = get_post_meta( $post->ID, 'quote_content', true );
    	$author = get_post_meta( $post->ID, 'quote_author', true ); 
        $url = get_post_meta( $post->ID, 'quote_url', true );

        
        echo $quote;
        echo $author;
        echo $url;


    ?>


        
        
        
        
        
        
        
</div>