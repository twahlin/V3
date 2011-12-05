<?php
// Removed shortcodes from the content
add_filter('the_content', 'strip_shortcodes');

// Get attached images & spits out a list of them.
function nerdy_get_images($size = 'thumbnail', $limit = '0', $offset = '0') {
    global $post;
    $images = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );
    if ($images) {
        $num_of_images = count($images);
        if ($offset > 0) : $start = $offset--; else : $start = 0; endif;
        if ($limit > 0) : $stop = $limit+$start; else : $stop = $num_of_images; endif;
        $i = 0;
        foreach ($images as $image) {
            if ($start <= $i and $i < $stop) {
            $img_title = $image->post_title;   // title.
            $img_description = $image->post_content; // description.
            $img_caption = $image->post_excerpt; // caption.
            $img_url = wp_get_attachment_url($image->ID); // url of the full size image.
            $preview_array = image_downsize( $image->ID, $size );
            $img_preview = $preview_array[0]; // thumbnail or medium image to use for preview.
            ?>
            <li>
                <a class="img_border" href="<?php the_permalink(); ?>" style="background-size: 100%; background-image: url('<?php bloginfo('template_directory'); ?>/scripts/php/timthumb/timthumb.php?src=<?php echo $img_preview ?>&w=340&h=340')">
                  <div class="img_wrap">
                    <img src="<?php bloginfo('template_directory'); ?>/scripts/php/timthumb/timthumb.php?src=<?php echo $img_preview ?>&w=340&h=340" alt="<?php echo $img_caption; ?>" title="<?php echo $img_title; ?>">
                  </div>
                </a>
            </li>
            <?
            }
            $i++;
        }
    }
}

?>

<div class="blog_cal"><strong><?php the_time('M') ?></strong><em><?php the_time('j') ?></em><p><?php the_time('Y') ?></p></div>
<h3><em><span><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><span></em></h3>

<ul class="img_list">
    <?php nerdy_get_images('full','4','0'); ?>
</ul>