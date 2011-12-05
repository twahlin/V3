<div class="blog_cal"><strong><?php the_time('M') ?></strong><em><?php the_time('j') ?></em><p><?php the_time('Y') ?></p></div>
<h3><em><span><?php the_title(); ?><span></em></h3>
  
  <div class="video_wrap">
    <?php ribbon_new() ?>   
    <?php
      $video_url = get_post_meta( $post->ID, 'video_url', true );
      echo "$video_url"
    ?>
  </div>