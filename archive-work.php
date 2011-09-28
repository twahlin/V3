<?php
/**
 * @package WordPress
 * @subpackage Tom Wahlin V3
 * @since Tom Wahlin 2009
 */

get_header(); ?>

<h2>[FPO: Representative pieces of work.]</h2>

<div id="masonry_responsive_grid" class="masonry_responsive_grid">
    <!-- <div class="masonry_item" ><div class="masonry_inner"><a href="#"><div class="masonry_img_wrap"><span class="img_titlebar_overlay"><em>Here is the image title</em></span><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" style="height: 210px"></div></a></div></div>
    <div class="masonry_item" ><div class="masonry_inner"><a href="#"><div class="masonry_img_wrap"><span class="img_titlebar_overlay"><em>Here is the image title</em></span><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" style="height: 250px"></div></a></div></div>  
    <div class="masonry_item" ><div class="masonry_inner"><a href="#"><div class="masonry_img_wrap"><span class="img_titlebar_overlay"><em>Here is the image title</em></span><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" style="height: 230px"></div></a></div></div>  
    <div class="masonry_item" ><div class="masonry_inner"><a href="#"><div class="masonry_img_wrap"><span class="img_titlebar_overlay"><em>Here is the image title</em></span><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" style="height: 200px"></div></a></div></div>  
    <div class="masonry_item" ><div class="masonry_inner"><a href="#"><div class="masonry_img_wrap"><span class="img_titlebar_overlay"><em>Here is the image title</em></span><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" style="height: 300px"></div></a></div></div>  
    <div class="masonry_item" ><div class="masonry_inner"><a href="#"><div class="masonry_img_wrap"><span class="img_titlebar_overlay"><em>Here is the image title</em></span><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" style="height: 150px"></div></a></div></div>  
    <div class="masonry_item" ><div class="masonry_inner"><a href="#"><div class="masonry_img_wrap"><span class="img_titlebar_overlay"><em>Here is the image title</em></span><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" style="height: 250px"></div></a></div></div>  
    <div class="masonry_item" ><div class="masonry_inner"><a href="#"><div class="masonry_img_wrap"><span class="img_titlebar_overlay"><em>Here is the image title</em></span><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" style="height: 240px"></div></a></div></div>                              
    <div class="masonry_item" ><div class="masonry_inner"><a href="#"><div class="masonry_img_wrap"><span class="img_titlebar_overlay"><em>Here is the image title</em></span><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" style="height: 500px"></div></a></div></div>  
    <div class="masonry_item" ><div class="masonry_inner"><a href="#"><div class="masonry_img_wrap"><span class="img_titlebar_overlay"><em>Here is the image title</em></span><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" style="height: 300px"></div></a></div></div>  
    <div class="masonry_item" ><div class="masonry_inner"><a href="#"><div class="masonry_img_wrap"><span class="img_titlebar_overlay"><em>Here is the image title</em></span><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" style="height: 100px"></div></a></div></div>  
    <div class="masonry_item" ><div class="masonry_inner"><a href="#"><div class="masonry_img_wrap"><span class="img_titlebar_overlay"><em>Here is the image title</em></span><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" style="height: 150px"></div></a></div></div>  
    <div class="masonry_item" ><div class="masonry_inner"><a href="#"><div class="masonry_img_wrap"><span class="img_titlebar_overlay"><em>Here is the image title</em></span><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" style="height: 167px"></div></a></div></div> -->    
    
    <!-- <div class="masonry_item">
        <div class="masonry_inner">
        </div>    
    </div>   -->  
    
    
<!-- fpo for loop -->
<?php
    for ($i = 1; $i <= 9; $i++) {
    ?>  
    <div class="masonry_item"><a class="img_border" href="#" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/tmp/fpo-<?php echo $i; ?>.jpg)"><div class="img_wrap"><em>Here is the image title</em><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo-<?php echo $i; ?>.jpg" /></div></a></div>  
<?php
}
?>        
         
         
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>



