<div class="blog_cal"><strong><?php the_time('M') ?></strong><em><?php the_time('j') ?></em><p><?php the_time('Y') ?></p></div>
<h3><em><span><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><span></em></h3>
  
  <div class="video_wrap">
    <!-- <span class="icon_post_format">This post consists of a video.</span> -->
    <?php ribbon_new() ?>   
    <?php
      $video_url = get_post_meta( $post->ID, 'video_url', true );
      echo "$video_url"
    ?>
  </div>