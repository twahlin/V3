<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="quote_link_wrap">
  <aside>
    <em>This post consists of a quote.</em>
  </aside>
  <div class="quote_content">
  <?php ribbon_new() ?>   
  <?php
    $quote = get_post_meta( $post->ID, 'quote_content', true );
    $author = get_post_meta( $post->ID, 'quote_author', true ); 
    $url = get_post_meta( $post->ID, 'quote_url', true );
    echo "<p>$quote<em>&mdash;$author</em></p>"
  ?>
  </div>
</a>