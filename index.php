<?php
/**
  * The main index file
  *
  * @package WordPress
  * @subpackage Tom Wahlin V3
  * @since Tom Wahlin 2009
  */

get_header(); ?>

<div class="hero_slider_wrap">
  <ul class="hero_slider">
    <li class="hero_first pane">
      <div class="slide_wrap">
        <div class="slide_inner_wrap">
          <p>hi</p>
          <div class="slide_ribbon">
            <a href="#">Hi there, here is the ribbon link</a>
          </div>
        </div>
      </div>
    </li>
    <li class="hero_second pane">
      <div class="slide_wrap">
        <div class="slide_inner_wrap">
          <p>hi</p>
          <div class="slide_ribbon">
            <a href="#">Hi there, here is the ribbon link</a>
          </div>
        </div>
      </div>
    </li>
    <li class="hero_third pane">
      <div class="slide_wrap">
        <div class="slide_inner_wrap">
          <p>hi</p>
          <div class="slide_ribbon">
            <a href="#">Hi there, here is the ribbon link</a>
          </div>
        </div>
      </div>
    </li>  
  </ul>
  <div class="dummy_slide"><!-- sets height for responsive slideshow --></div>
  <div id="slider_prev"></div>
  <div id="slider_next"></div>
  <ol id="slidesNav" class="slides_nav"></ol>
</div>

<div class="feed_home">
  <section class="home_recent_post">
    <h5>Recent Post</h5>
    <?php include "includes/snippets/recent-blog-post-one.php" ?>
  </section>
  <section class="home_dribbble_shots">
    <h5>Dribbble</h5>
    <?php include "includes/snippets/dribbble-shots-two.php" ?>
  </section>
  <div class="hr"><a href="#top" title="Back to Top">Back to Top</a></div>
  <section class="home_tweets">
    <h5>Tweets</h5>
    <div id="tweet">
      <p>Please wait while my tweets load</p>
    </div>
    <a class="button" href="http://twitter.com/twahlin" rel="external">Visit Twitter</a>
  </section>
  <section class="home_connections">
    <h5>Connections</h5>
    <?php include "includes/snippets/links-social.php" ?> 
  </section>    
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>