<?php
/**
  * The template file to hold a collection of Work Posts
  *
  * @package WordPress
  * @subpackage Tom Wahlin V3
  * @since Tom Wahlin 2009
  */

get_header(); ?>

<!-- Page header, consistent on all home pages except home page -->
<section class="page_heading">
  <h2>Work</h2> 
  <p>the portfolio of Tom Wahlin</p>
</section>
<!-- End Page header, consistent on all home pages except home page -->

<div id="masonry_responsive_grid" class="masonry_responsive_grid">

<?php $args = array( 'post_type' => 'work', 'numberposts' => 100, ); $postslist = get_posts( $args ); foreach ($postslist as $post) :  setup_postdata($post); ?> 
<div class="masonry_item">
  <a title="View <?php the_title(); ?>" class="img_border" href="<?php the_permalink(); ?>" style="background-image: url(<?php bloginfo('template_directory'); ?>/scripts/php/timthumb/timthumb.php?src=<?php echo PostThumbURL(); ?>&w=400)">
    <?php ribbon_new() ?>
    <div class="img_wrap">
      <em><?php the_title(); ?></em>
      <img src="<?php bloginfo('template_directory'); ?>/scripts/php/timthumb/timthumb.php?src=<?php echo PostThumbURL(); ?>&w=400" />
    </div>
  </a>
</div>
<?php endforeach; ?>

</div>

<?php get_footer(); ?>



