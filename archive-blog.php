<?php
/**
 * @package WordPress
 * @subpackage Tom Wahlin V3
 * @since Tom Wahlin 2009
 */

get_header(); ?>



<?php query_posts(array('post_type' => 'blog')); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="post">

<!-- Display the Title as a link to the Post's permalink. -->
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

 <div class="entry">
     <?php the_content('View Project'); ?>
 </div>

</div> <!-- closes the first div box -->

<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>



