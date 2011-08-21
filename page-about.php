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
<div class="feed_twitter"><p class="js_off">Oops! JavaScript needs to be enabled to view <a href="http://www.twitter.com/twahlin">twitter feed.</a></p></div>
<div class="feed_lastfm"><p class="js_off">Oops! JavaScript needs to be enabled to view <a href="http://www.last.fm/user/twahlin">last.fm feed.</a></p></div>
<div class="feed_flickr"><p class="js_off">Oops! JavaScript needs to be enabled to view <a href="http://www.flickr.com/photos/twahlin">flickr feed.</a></p></div>

<div class="col_left">
    <div class="outer_link_icon outer_link_icon_cv"><a href="#">CV</a></div>
    <h3>Skillset</h3>
    <ul>
        <li><p>XHTML &amp; CSS:</p><div class="progress_bar"><em>Skill score: 89 out of 100</em></div></li>
        <li><p>XHTML &amp; CSS:</p><div class="progress_bar"><em>Skill score: 89 out of 100</em></div></li>  
        <li><p>XHTML &amp; CSS:</p><div class="progress_bar"><em>Skill score: 89 out of 100</em></div></li>      
    </ul>
    <?php
    $completeurl =
    "http://ws.audioscrobbler.com/2.0/?method=&user=xgayax" .
    "&api_key=b25b959554ed76058ac220b7b2e0a026";
    $xml = simplexml_load_file($completeurl);
    
    



    
    
    
    ?>
    
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h3 class="entry-title"><?php the_title(); ?></h3>
        <?php the_content(); ?>

    <?php endwhile; // end of the loop. ?>
</div>      

<?php get_sidebar(); ?>
<?php get_footer(); ?>