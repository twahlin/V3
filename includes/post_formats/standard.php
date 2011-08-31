<!--BEGIN .hentry -->
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">				
    <h3>FPO: Standard Post Format Get this into the main loop and not repeat in other templates</h3>
    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

     <div class="entry">
         <?php the_content('View Project'); ?>
     </div>
<!--END .hentry-->  
</div>