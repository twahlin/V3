<?php
/**
 * @package WordPress
 * @subpackage Tom Wahlin V3
 * @since Tom Wahlin 2009
 */

get_header(); ?>

<?php //this aggregates all the solitary projects of the client ?>

<div class="single_work_header">
    <h2><?php the_title();?></h2>
</div>

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
      <ul>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();          
        
       $args = array(
         'post_type' => 'attachment',
         'numberposts' => -1,
         'post_status' => null,
         'post_parent' => $post->ID,
         'order' => 'ASC',
         'orderby' => 'title'
        );

        $attachments = get_posts( $args );
           if ( $attachments ) {
              foreach ( $attachments as $attachment ) {
                $img_attach = wp_get_attachment_url( $attachment->ID);
                $alt = $attachment->post_title;
                ?>
                  <li><img src="<?php echo $img_attach ?>" alt="<?php echo $alt ?>" /></li>
                <?php
                }
           }

       endwhile; endif; ?>
      </ul>

    </section>    
</div>
    <div class="hr"><a href="#top" title="Back to Top">Back to Top</a></div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
