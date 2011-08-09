<?php
/**
 * @package WordPress
 * @subpackage Tom Wahlin V3
 * @since Tom Wahlin 2009
 */
 
/*
Template Name: Contact
*/

get_header(); ?>
    
<?php echo do_shortcode( '[contact-form 1 "Contact form 1"]' ); ?>

<?php $page = get_page_by_title( 'contact' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>