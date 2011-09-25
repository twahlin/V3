<div <?php post_class(post_wrap); ?> id="post-<?php the_ID(); ?>">
    
    <div class="blog_cal">
        <strong><?php the_time('M') ?></strong>
        <em><?php the_time('j') ?></em>
        <p><?php the_time('Y') ?></p>
    </div>
    
    <h3>
        <em>
            <span>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            <span>
        </em>
    </h3>
        <div class="img_border">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <?php img_first(); ?>
            <?php ribbon_new() ?>
            </a>
        </div>
        
        
        
        
        <?php the_excerpt(); ?>
        
        
        
        


        
        
        

        
        
        
        <?php
        $content = $post->post_content;
        $searchimages = '~<img [^>]* />~';

        /*Run preg_match_all to grab all the images and save the results in $images*/

        preg_match_all( $searchimages, $content, $images );

        // Check to see if we have at least 1 image
        $iNumberOfImages = count($images[0]);

        if ( $iNumberOfImages > 0 ) {
            echo "There is an image here";
        // Your post have one or more images.
        }

        ?>
        
        
        
        
        
        
        
        
</div>