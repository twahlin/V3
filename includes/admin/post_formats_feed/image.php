<div class="blog_cal"><strong><?php the_time('M') ?></strong><em><?php the_time('j') ?></em><p><?php the_time('Y') ?></p></div>
<h3><em><span><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><span></em></h3>

<a title="View <?php the_title(); ?>" class="img_border" href="<?php the_permalink(); ?>" style="background-image: url(<?php bloginfo('template_directory'); ?>/scripts/php/timthumb/timthumb.php?src=<?php echo PostThumbURL(); ?>&w=850)">
  <?php ribbon_new() ?>
  <span class="icon_post_format">This is a standard post</span>
  <div class="img_wrap">
    <img src="<?php bloginfo('template_directory'); ?>/scripts/php/timthumb/timthumb.php?src=<?php echo PostThumbURL(); ?>&w=850" />
  </div>
</a>