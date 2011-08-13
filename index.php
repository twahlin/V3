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
        	<div>
        		<?php the_date(); ?>
        		<br />
        		<?php the_title(); ?>   
        		<?php the_excerpt(); ?>
        	</div>
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
            <ol class="dribbbles">
            <?php
                foreach ( $items as $item ):
                    $title = $item->get_title();
                    $link = $item->get_permalink();
                    $date = $item->get_date('F d, Y');
                    $description = $item->get_description();
                    preg_match("/src=\"(http.*(jpg|jpeg|gif|png))/", $description, $image_url);
                    $image = $image_url[1];
            ?>
            <li class="group">
                <div class="dribbble">
                    <div class="dribbble-shot">
                        <div class="dribbble-img">
                            <a href="<?php echo $link; ?>" class="dribbble-link"><img src="<?php echo $image; ?>" alt="<?php echo $title;?>"/></a>
                            <a href="<?php echo $link; ?>" class="dribbble-over"><strong><?php echo $title; ?></strong>
                            <em><?php echo $date; ?></em>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach;?>
        </ol>
        <?php endif;
        ?>
    </section>
    <section class="home_tweets">
        <h5>Tweets</h5>
        <div class="feed_twitter"><p class="js_off">Oops! JavaScript needs to be enabled to view <a href="http://www.twitter.com/twahlin">twitter feed.</a></p></div>
    </section>
    <section class="home_connections">
        <h5>Connections</h5>
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
