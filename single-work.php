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
    <aside>
        <ul>
            <li>
                <h4>Project:</h4>
                <p>Various</p>
            </li>
            <li>
                <h4>Role:</h4>
                <p>Design &amp; front-end development</p>
            </li>
            <li>
                <h4>Technology Used:</h4>
                <p>xhtml, css, scss, Visual Design, jQuery.</p>
            </li>
            <li>
                <h4>Description:</h4>
                <p>Many projects have been completed with American Express during my time at space150. American Express prefers that I do not show this work in a public setting. Get in touch if you would like to view the projects.</p>
            </li>
            <li>
                <h4>Agency:</h4>
                <p>space150</p>
            </li>
            <li>
                <h4>Related Posts:</h4>
                <ol>
                    <li><a href="#">American Express Process</a></li>
                    <li><a href="#">Getting jQuery cycle plugin without multiple instances </a></li>    
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
