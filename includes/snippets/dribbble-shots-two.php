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
            <a class="img_border" href="<?php echo $link; ?>" rel="external" style="background-image: url(<?php echo $image; ?>)"><div class="img_wrap"><em><?php echo $title; ?></em><img src="<?php echo $image; ?>" alt="<?php echo $title;?>"/></div></a> 
        </li>    
    <?php endforeach;?>
</ol>
<a class="button" href="http://dribbble.com/twahlin/" rel="external">Visit Dribbble</a>
<?php endif;
?>