

<?php //single ?>
<div class="blog_cal"><strong><?php the_time('M') ?></strong><em><?php the_time('j') ?></em><p><?php the_time('Y') ?></p></div>
<h3><em><span><?php the_title(); ?><span></em></h3>
  
  <div class="img_border" style="background-image: url(<?php bloginfo('template_directory'); ?>/scripts/php/timthumb/timthumb.php?src=<?php echo PostThumbURL(); ?>&w=850)">
    <?php ribbon_new() ?>
    <span class="icon_post_format">This is a standard post</span>
    <div class="img_wrap">
      <img src="<?php bloginfo('template_directory'); ?>/scripts/php/timthumb/timthumb.php?src=<?php echo PostThumbURL(); ?>&w=850" />
    </div>
  </div>
  
  <?php the_content(); ?>