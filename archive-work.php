<?php
/**
  * The template file to hold a collection of Work Posts
  *
  * @package WordPress
  * @subpackage Tom Wahlin V3
  * @since Tom Wahlin 2009
  */

get_header(); ?>

<h2>[FPO: Representative pieces of work.]</h2>

<div id="masonry_responsive_grid" class="masonry_responsive_grid">

<?php
$args = array( 'post_type' => 'work' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?> 
<div class="masonry_item">
  <a title="View <?php the_title(); ?>" class="img_border" href="<?php the_permalink(); ?>" style="background-image: url(<?php bloginfo('template_directory'); ?>/scripts/php/timthumb/timthumb.php?src=<?php echo PostThumbURL(); ?>&w=400)">
    <div class="img_wrap">
      <em><?php the_title(); ?></em>
      <img src="<?php bloginfo('template_directory'); ?>/scripts/php/timthumb/timthumb.php?src=<?php echo PostThumbURL(); ?>&w=400" />
    </div>
  </a>
</div>
<?php endforeach; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>



