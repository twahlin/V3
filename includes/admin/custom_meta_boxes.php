<?php

//begin custom meta box for quote in blog post type
add_action( 'add_meta_boxes', 'metabox_quote_add' );  
function metabox_quote_add()  
{  
    add_meta_box( 'format_blog_quote', 'Quote', 'metabox_quote', 'blog', 'normal', 'high' );  
}

function metabox_quote( $post )  
{  
    $quote_content = get_post_meta( $post->ID, 'quote_content', true );  
    $quote_author = get_post_meta( $post->ID, 'quote_author', true );  
    $quote_url = get_post_meta( $post->ID, 'quote_url', true );  
    wp_nonce_field( 'save_quote_meta', 'quote_nonce' );  
    ?>  
        <p>
            <label for="quote_content">Quote</label>  
            <textarea class="widefat" id="quote_content" name="quote_content"><?php echo $quote_content; ?></textarea>  
        </p>
        <p>
            <label for="quote_author">Author</label>  
            <input type="text" class="widefat" id="quote_author" name="quote_author" value="<?php echo $quote_author; ?>" />   
        </p>
        <p>
            <label for="quote_url">Author URL (if any)</label>  
            <input type="text" class="widefat" id="quote_url" name="quote_url" value="<?php echo $quote_url; ?>" />
        <em>Please use http://</em>
        </p>   
    <?php  
  
}

add_action( 'save_post', 'metabox_quote_save' );  
function metabox_quote_save( $id )  
{  
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;  
  
    if( !isset( $_POST['quote_nonce'] ) || !wp_verify_nonce( $_POST['quote_nonce'], 'save_quote_meta' ) ) return;  
  
    if( !current_user_can( 'edit_post' ) ) return;  
  
    if( isset( $_POST['quote_content'] ) )  
        update_post_meta( $id, 'quote_content', esc_attr( strip_tags( $_POST['quote_content'] )) );  
  
    if( isset( $_POST['quote_author'] ) )  
        update_post_meta( $id, 'quote_author', esc_attr( strip_tags( $_POST['quote_author'] ) ) );  
  
    if( isset( $_POST['quote_url'] ) )  
        update_post_meta( $id, 'quote_url', esc_attr( strip_tags( $_POST['quote_url'] ) ) );  
  
}
//end custom meta box for quote in blog post type
    
    
    
    
    
    
    
    

    
    
    

    
    
    function toggle_meta_box_per_post_format() {
       wp_register_script('toggle_meta_box_per_post_format', get_template_directory_uri() . '/scripts/admin/toggle_meta_box_per_post_format.js');
       wp_enqueue_script('toggle_meta_box_per_post_format');
    }
    add_action('admin_enqueue_scripts', 'toggle_meta_box_per_post_format');
    
    
    
    
    
    

?>