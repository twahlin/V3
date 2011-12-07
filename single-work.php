<?php
/**
 * @package WordPress
 * @subpackage Tom Wahlin V3
 * @since Tom Wahlin 2009
 */

get_header(); ?>

<?php //this aggregates all the solitary projects of the client ?>

<!-- Page header, consistent on all home pages except home page -->
<section class="page_heading">
  <h2>Work</h2> 
  <p>the portfolio of Tom Wahlin</p>
</section>
<!-- End Page header, consistent on all home pages except home page -->

<div class="work_post" id="<?php $slug = basename(get_permalink()); echo $slug; ?>">
    <?php
        $project = get_post_meta( $post->ID, 'work_project', true );
        $role = get_post_meta( $post->ID, 'work_role', true );
        $technology_used = get_post_meta( $post->ID, 'work_technology_used', true );
        $company = get_post_meta( $post->ID, 'work_company', true );
        $description = get_post_meta( $post->ID, 'work_description', true );
    ?>
    <aside>
        <ul>
            <li>
                <h4>Project:</h4>
                <p><?php echo "$project" ?></p>
            </li>
            <li>
                <h4>Role:</h4>
                <p><?php echo "$role" ?></p>
            </li>
            <li>
                <h4>Technology Used:</h4>
                <p><?php echo "$technology_used" ?></p>
            </li>
            <li>
                <h4>Company:</h4>
                <p><?php echo "$company" ?></p>
            </li>
            <li>
                <h4>Description:</h4>
                <p><?php echo "$description" ?></p>
            </li>
        </ul>    
    </aside>
    <section>      
      <?php
      // Removed shortcodes from the content
      add_filter('the_content', 'strip_shortcodes');

      // Get attached images & spits out a list of them.
      function nerdy_get_images($size = 'thumbnail', $limit = '0', $offset = '0') {
          global $post;
          $images = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );
          if ($images) {
              $num_of_images = count($images);
              if ($offset > 0) : $start = $offset--; else : $start = 0; endif;
              if ($limit > 0) : $stop = $limit+$start; else : $stop = $num_of_images; endif;
              $i = 0;
              foreach ($images as $image) {
                  if ($start <= $i and $i < $stop) {
                  $img_title = $image->post_title;   // title.
                  $img_description = $image->post_content; // description.
                  $img_caption = $image->post_excerpt; // caption.
                  $img_url = wp_get_attachment_url($image->ID); // url of the full size image.
                  $preview_array = image_downsize( $image->ID, $size );
                  $img_preview = $preview_array[0]; // thumbnail or medium image to use for preview.
                  ?>
                  <li>
                    <img src="<?php bloginfo('template_directory'); ?>/scripts/php/timthumb/timthumb.php?src=<?php echo $img_preview ?>&w=850" alt="<?php echo $img_caption; ?>" title="<?php echo $img_title; ?>">
                  </li>
                  <?
                  }
                  $i++;
              }
          }
      }

      ?>
      
      <ul class="img_list">
          <?php nerdy_get_images('full','0','0'); ?>
      </ul>

    </section>    
</div>


<?php get_footer(); ?>
