<?php
/**
 * @package WordPress
 * @subpackage Tom Wahlin V3
 * @since Tom Wahlin 2009
 */

get_header(); ?>


<?php query_posts(array('post_type' => 'work')); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="post">

<!-- Display the Title as a link to the Post's permalink. -->
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

 <div class="entry">
     <?php the_content('View Project'); ?>
     
     <?php if ( get_post_meta($post->ID, 'my_meta_box_text', true) ) : ?>
         <a href="<?php the_permalink() ?>" rel="bookmark">
             <?php echo get_post_meta($post->ID, 'my_meta_box_text', true) ?>
         </a>
     <?php endif; ?>

     
          
 </div>

</div> <!-- closes the first div box -->

<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>



