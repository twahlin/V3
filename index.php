<?php
/**
* This is the homepage
*
* @package WordPress
* @subpackage Tom Wahlin V3
* @since Tom Wahlin 2009
*/
get_header(); ?>

<div class="hero_slider_wrap">
    <ul class="hero_slider">
        <li class="first pane">
            <div class="slide_wrap">
                <div class="slide_inner_wrap">
                    <h2>Version 3 has launched</h2>
                </div>
            </div>
        </li>
        <li class="second pane">
            <div class="slide_wrap">
                <div class="slide_inner_wrap">
                    <p>hi</p>
                </div>
            </div>
        </li>
        <li class="third pane">
            <div class="slide_wrap">
                <div class="slide_inner_wrap">
                    <p>hi</p>
                </div>
            </div>
        </li>  
    </ul>
    <div class="dummy_slide"><!-- sets height for responsive slideshow --></div>
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
        <a class="button" href="http://www.twitter.com/twahlin" rel="external">Visit Twitter</a>
    </section>
    <section class="home_connections">
        <h5>Connections</h5>
        <?php include "includes/snippets/links-social.php" ?> 
    </section>    
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>