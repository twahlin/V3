<?php
/**
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
                    <h2>Version 3 had launched</h2>
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
        <?php
        $args = array( 'numberposts' => 1, 'post_type' => 'blog' );
        $postslist = get_posts( $args );
        foreach ($postslist as $post) :  setup_postdata($post); ?> 
        	<div class="home_excerpt">
        		<h6><?php the_title(); ?></h6> 
        		<?php the_excerpt(); ?>
        	</div>
        	<a class="button" href="<?php the_permalink(); ?>">Read Post</a>
        <?php endforeach; ?>
    </section>
    <section class="home_dribbble_shots">
        <h5>Dribbble Shots</h5>
        <?php 
            if(function_exists('fetch_feed')):
                $rss = fetch_feed("http://dribbble.com/twahlin/shots.rss");
                add_filter( 'wp_feed_cache_transient_lifetime', create_function( '$a', 'return 1800;' ) );
            if (!is_wp_error( $rss ) ) :
                $items = $rss->get_items(0, $rss->get_item_quantity(2));
            endif;
            endif;
            if (!empty($items)): ?>
            <ol>
                <?php
                    foreach ( $items as $item ):
                        $title = $item->get_title();
                        $link = $item->get_permalink();
                        $date = $item->get_date('F d, Y');
                        $description = $item->get_description();
                        preg_match("/src=\"(http.*(jpg|jpeg|gif|png))/", $description, $image_url);
                        $image = $image_url[1];
                ?>
                <li>
                    <a href="<?php echo $link; ?>" rel="external">
                        <div class="dribbble_img_wrap" style="background-size: 100%; background-image: url(<?php echo $image; ?>)"><span><em><?php echo $title; ?></em></span><img src="<?php echo $image; ?>" alt="<?php echo $title;?>"/></div>
                    </a>
                </li>    
            <?php endforeach;?>
        </ol>
        <a class="button" href="http://dribbble.com/twahlin/" rel="external">Visit Dribbble</a>
        <?php endif;
        ?>
    </section>
    <section class="home_tweets">
        <h5>Tweets</h5>
        <div class="feed_twitter"><p class="js_off">Oops! JavaScript needs to be enabled to view <a href="http://www.twitter.com/twahlin">twitter feed.</a></p></div>
        <a class="button" href="http://www.twitter.com/twahlin" rel="external">Visit Twitter</a>
    </section>
    <section class="home_connections">
        <h5>Connections</h5>
        <?php include "includes/snippets/links-social.php" ?> 
    </section>    
</div>


<!-- <div class="FPO_individual_port">
<aside>
    <h3>Basilica Block Party</h3>
        <ul>
            <li>
                <h4>Client</h4>
                <p>Ai School Project</p>
            </li>
            <li>
                <h4>My Role</h4>
                <p>Sole project member.</p>
            </li>
            <li>
                <h4>Description</h4>
                <p>Created a poster advertising campaign where each style of music was unique. Concepted and created logo for Twin Cities Metro.</p>
            </li>
            <li>
                <h4>More Details</h4>
                <p>Download PDF</p>
            </li>
        </ul>
</aside>
<section>
    <ul>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/work/tom-wahlin-basilica-block-party-hip-hop.jpg"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/work/tom-wahlin-basilica-block-party-pop-rock.jpg"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/work/tom-wahlin-basilica-block-party-jazz.jpg"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/work/tom-wahlin-basilica-block-party-family.jpg"></li>
    </ul>
</section>           
</div> -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
