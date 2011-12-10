<?php
/**
  * @package WordPress
  * @subpackage Tom Wahlin V3
  * @since Tom Wahlin 2009
  */
/*
  Template Name: About
  */

get_header(); ?>

<!-- Page header, consistent on all home pages except home page -->
<section class="page_heading">
  <h2>About</h2> 
  <p>a couple things about me</p>
</section>
<!-- End Page header, consistent on all home pages except home page -->
<div class="cols_wrap clearfix">
  <div class="col_left">
    <p class="page_explainer">Welcome to the portfolio of Tom Wahlin, a student of the aesthetically pleasing. Currently employed at <a href="http://www.space150.com/" rel="external">space150</a> focusing on design and front-end development. I believe in great ideas, but also following though on them and producing them. Would you like to get in touch? Find me on <a rel="external" href="http://twitter.com/twahlin">Twitter</a>, <a rel="external" href="http://www.facebook.com/twahlin">Facebook</a> and <a rel="external" href="http://www.linkedin.com/in/tomwahlin">Linkedin</a>.</p>
    <?php get_template_part('includes/snippets/hr'); ?>
  
    <section class="content_block">
      <h3 class="cv"><a rel="external" href="#"><em class="button">cv icon<span></span></em>Skillset</a></h3>
      <ul class="skills_graph">
        <li class="skill_graph_visual_design"><p>Visual Design</p><div class="progress_bar"><em>70 out of 100</em></div></li>
        <li class="skill_graph_mobile_design"><p>Mobile Design</p><div class="progress_bar"><em>65 out of 100</em></div></li>
        <li class="skill_graph_xhtml"><p>XHTML &amp; CSS (SCSS)</p><div class="progress_bar"><em>85 out of 100</em></div></li>
        <li class="skill_graph_jquery"><p>Javascript (jQuery)</p><div class="progress_bar"><em>55 out of 100</em></div></li>  
        <li class="skill_graph_php"><p>PHP (Wordpress)</p><div class="progress_bar"><em>30 out of 100</em></div></li>                            
        <li class="skill_graph_ux"><p>UX</p><div class="progress_bar"><em>40 out of 100</em></div></li>
      </ul>
    </section>
    <?php get_template_part('includes/snippets/hr'); ?>
  
    <section class="content_block">
      <h3 class="cv"><a rel="external" href="#"><em class="button">cv icon<span></span></em>Experience</a></h3>
      <ul class="workplaces">
        <li>
          <div class="workplace_logo_wrap"><img src="<?php bloginfo('template_directory'); ?>/images/workplace_logos/logo_space150_v28.png" alt="space150 logo" /></div>
          <a rel="external" href="http://space150.com">
            <h4>space150</h4>
            <em>Associate Designer</em>
          </a>
          <p>Destroy convention to create demand.</p>
        </li>
      </ul>
    </section>
    <?php get_template_part('includes/snippets/hr'); ?>
    <section class="content_block">
      <h3 class="lastfm"><a rel="external" href="http://last.fm/user/twahlin"><em class="button">lastfm icon<span></span></em>Currently Listening To</a></h3>
      <div class="feed_lastfm"><p class="js_off">Oops! JavaScript needs to be enabled to view <a href="http://last.fm/user/twahlin">last.fm feed.</a></p></div>
    </section>
    <?php get_template_part('includes/snippets/hr'); ?>
  </div>
  <aside class="col_right">
    <div class="global_sidebar">
      <?php get_template_part( 'includes/snippets/sidebar/tom' ); ?>      
      <?php get_template_part( 'includes/snippets/sidebar/twitter' ); ?>
      <?php get_template_part( 'includes/snippets/sidebar/dribbble' ); ?>
      <?php get_template_part( 'includes/snippets/sidebar/connections' ); ?>
      <div class="faux_sidebar"></div>
    </div>
  </aside>

  </div>   

<?php get_footer(); ?>