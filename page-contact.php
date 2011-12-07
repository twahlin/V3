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

<!-- Page header, consistent on all home pages except home page -->
<section class="page_heading">
  <h2>Contact</h2> 
  <p>get in touch with me</p>
</section>
<!-- End Page header, consistent on all home pages except home page -->
<div class="cols_wrap clearfix">
<div class="col_left">
<p class="page_explainer"> Interested in getting in touch? Fill out the contact form below. Not a contact form person? Feel free to find me on <a rel="external" href="http://www.facebook.com/twahlin">Facebook</a>, <a rel="external" href="http://www.linkedin.com/in/tomwahlin">Linkedin</a>, or <a rel="external" href="http://twitter.com/twahlin">Twitter</a>.</p>  
<div class="hr"><a href="#top" title="Back to Top">Back to Top</a></div>

<div class="contact_form">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; else: ?>
      <p>Sorry, the contact form does not seem to be working.</p>
    <?php endif; ?>
  </div>
  <div class="hr"><a href="#top" title="Back to Top">Back to Top</a></div>   
</div>

<aside class="col_right">
  <div class="global_sidebar">
    <?php get_template_part( 'includes/snippets/sidebar/tom' ); ?> 
    <?php get_template_part( 'includes/snippets/sidebar/twitter' ); ?>
    <?php get_template_part( 'includes/snippets/sidebar/dribbble' ); ?>
    <?php get_template_part( 'includes/snippets/sidebar/connections' ); ?>
  </div>
</aside>

</div>



<?php get_footer(); ?>