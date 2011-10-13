<?php
/**
 * @package WordPress
 * @subpackage Tom Wahlin V3
 * @since Tom Wahlin 2009
 */

get_header(); ?>

<h2>[FPO: Representative pieces of work.]</h2>

<div id="masonry_responsive_grid" class="masonry_responsive_grid">
<?php
    for ($i = 1; $i <= 23; $i++) {
    ?>  
    <div class="masonry_item"><a class="img_border" href="#" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/tmp/fpo-<?php echo $i; ?>.jpg)"><div class="img_wrap"><em>Here is the image title</em><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo-<?php echo $i; ?>.jpg" /></div></a></div>  
<?php
}
?>                
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>



