<?php
/**
 * @package WordPress
 * @subpackage Tom Wahlin V3
 * @since Tom Wahlin 2009
 */
 
/*
Template Name: Contact
*/

get_header(); ?>
    
<?php echo do_shortcode( '[contact-form 1 "Contact form 1"]' ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
    <h3 class="entry-title"><?php the_title(); ?></h3>
    <?php the_content(); ?>
    
<?php endwhile; // end of the loop. ?>



<?php get_sidebar(); ?>
<?php get_footer(); ?>