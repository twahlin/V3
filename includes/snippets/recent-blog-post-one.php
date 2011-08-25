<?php
$args = array( 'numberposts' => 1, 'post_type' => 'blog' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?> 
	<div class="home_excerpt">
		<h6><?php the_title(); ?></h6> 
		<?php the_excerpt(); ?>
	</div>
	<a class="button" href="<?php the_permalink(); ?>">Read Post</a>
<?php endforeach; ?>