<?php
    $link_url = get_post_meta( $post->ID, 'link_url', true );
    $link_content = get_post_meta( $post->ID, 'link_content', true );
?>

<a rel="external" href="<?php echo $link_url; ?>" title="Link to <?php the_title_attribute(); ?>">
  <aside><span class="icon_post_format">This post consists of a link.</span></aside>
  <em><?php echo "$link_content" ?></em>
</a>