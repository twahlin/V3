<div>
  <aside>
    <em>This post consists of a quote.</em>
  </aside>
  <div class="quote_content">
  <?php ribbon_new() ?>   
  <?php
    $quote = get_post_meta( $post->ID, 'quote_content', true );
    $author = get_post_meta( $post->ID, 'quote_author', true ); 
    $url = get_post_meta( $post->ID, 'quote_url', true );
    echo "<p>$quote<a href='$url' rel='external' title='Quote author link'>&mdash;$author</a></p>"
  ?>
  </div>
</div>

    