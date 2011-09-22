<?php
/**
 * @package WordPress
 * @subpackage Tom Wahlin V3
 * @since Tom Wahlin 2009
 */

get_header(); ?>

<?php //this aggregates all the solitary projects of the client ?>

<div class="single_work_header">
    <h2>Buffalo Wild Wings</h2>
    <?php //subnav of individual projects can go here ?>
</div>

<div class="work_post">
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
                <h4>Description:</h4>
                <p><?php echo "$company" ?></p>
            </li>
            <li>
                <h4>Company:</h4>
                <p><?php echo "$description" ?></p>
            </li>
            <li>
                <h4>Related Blog Posts:</h4>
                <ol>
                    <li><a href="#">FPO American Express Process</a></li>
                    <li><a href="#">FPO Getting jQuery cycle plugin without multiple instances </a></li>    
                </ol>    
            </li>
        </ul>    
    </aside>
    <section>
        <ul>
            <li><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" alt=""/></li>
            <li><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" alt=""/></li>
            <li><img src="<?php bloginfo('template_directory'); ?>/images/tmp/fpo_800.png" alt=""/></li>   
        </ul>    
    </section>    
</div>
    <div class="hr"><a href="#top" title="Back to Top">Back to Top</a></div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
