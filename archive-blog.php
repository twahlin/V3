<?php
/**
 * @package WordPress
 * @subpackage Tom Wahlin V3
 * @since Tom Wahlin 2009
 */

get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php
    
        // The following determines what the post format is and shows the correct file accordingly
        $format = get_post_format();
        get_template_part( 'includes/post_formats/'.$format );
        
        if($format == '')
        get_template_part( 'includes/post_formats/standard' );
        
    ?>

	<?php comments_template('', true); ?>

	<?php endwhile; else: ?>

	<!--BEGIN #post-0-->
	<div id="post-0" <?php post_class() ?>>
	
		<h1 class="entry-title"><?php _e('Error 404 - Not Found', 'framework') ?></h1>
	
		<!--BEGIN .entry-content-->
		<div class="entry-content">
			<p><?php _e("Sorry, but you are looking for something that isn't here.", "framework") ?></p>
		<!--END .entry-content-->
		</div>
	
	<!--END #post-0-->
	</div>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>



