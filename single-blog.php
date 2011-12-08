<?php 
/**
  * The template file to hold a collection of Blog Posts
  *
  * @package WordPress
  * @subpackage Tom Wahlin V3
  * @since Tom Wahlin 2009
  */

get_header(); ?>

<!-- Page header, consistent on all home pages except home page -->
<section class="page_heading">
  <h2>Blog</h2> 
  <p>everyday activities &amp; projects</p>
</section>
<!-- End Page header, consistent on all home pages except home page -->
<div class="cols_wrap clearfix">
<div class="col_left">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div <?php post_class(post_wrap); ?> id="post-<?php the_ID(); ?>">
    <div class="post_wrap_inner clearfix">
    <?php
    // The following determines what the post format is and shows the correct file accordingly
    $format = get_post_format();
    get_template_part( 'includes/admin/post_formats_single/'.$format );
    if($format == '')
      get_template_part( 'includes/admin/post_formats_single/standard' );
    ?>
  </div>
</div>
<?php get_template_part('includes/snippets/hr'); ?>
<?php get_template_part('includes/snippets/comments'); ?>
<?php endwhile; else: ?>

  No post here, 404 page

<?php endif; ?>

</div>

<aside class="col_right">
  <div class="global_sidebar">
    <?php get_template_part( 'includes/snippets/sidebar/twitter' ); ?>
    <?php get_template_part( 'includes/snippets/sidebar/dribbble' ); ?>
    <?php get_template_part( 'includes/snippets/sidebar/categories' ); ?>
    <?php get_template_part( 'includes/snippets/sidebar/connections' ); ?>
    <div class="faux_sidebar"></div>
  </div>
</aside>

</div>

<?php get_footer(); ?>