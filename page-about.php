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

<div class="col_left">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h3 class="entry-title"><?php the_title(); ?></h3>
    <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>

    <div class="outer_link_icon outer_link_icon_cv"><a href="#">CV</a></div>
        <h3>Skillset</h3>
        <ul>
            <li><p>XHTML &amp; CSS:</p><div class="progress_bar"><em>Skill score: 89 out of 100</em></div></li>
            <li><p>XHTML &amp; CSS:</p><div class="progress_bar"><em>Skill score: 89 out of 100</em></div></li>  
            <li><p>XHTML &amp; CSS:</p><div class="progress_bar"><em>Skill score: 89 out of 100</em></div></li>      
        </ul>
    <div class="feed_lastfm"><p class="js_off">Oops! JavaScript needs to be enabled to view <a href="http://www.last.fm/user/twahlin">last.fm feed.</a></p></div>
    
    <!-- <h5>Tweets</h5>
    <div id="tweet">
        <p>Please wait while my tweets load</p>
    </div>
    <a class="button" href="http://www.twitter.com/twahlin" rel="external">Visit Twitter</a> -->
    
    <!-- <div class="feed_flickr"><p class="js_off">Oops! JavaScript needs to be enabled to view <a href="http://www.flickr.com/photos/twahlin">flickr feed.</a></p></div> -->
</div>   
   
<?php get_sidebar(); ?>
<?php get_footer(); ?>