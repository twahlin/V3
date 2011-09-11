<div <?php post_class(post_wrap); ?> id="post-<?php the_ID(); ?>">
    <aside>
        <em>This post consists of a quote.</em>
    </aside>
        <div class="quote_content">
        <?php ribbon_new() ?>   
    <?php


    	$quote = get_post_meta( $post->ID, 'quote_content', true );
    	$author = get_post_meta( $post->ID, 'quote_author', true ); 
        $url = get_post_meta( $post->ID, 'quote_url', true );
        
        echo "<p>$quote</p><a href='$url' title='Quote author link'>&mdash;$author</a>"


    ?>

    </div>


        
        
        
        
        
        
        
</div>