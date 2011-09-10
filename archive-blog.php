<?php
/**
 * @package WordPress
 * @subpackage Tom Wahlin V3
 * @since Tom Wahlin 2009
 */

get_header(); ?>


<div class="col_left">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
	<?php
    
        // The following determines what the post format is and shows the correct file accordingly
        $format = get_post_format();
        get_template_part( 'includes/post_formats/'.$format );
        
        if($format == '')
        get_template_part( 'includes/post_formats/standard' );
        
    ?>

	<?php endwhile; else: ?>

        No post here, 404 page

<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>



