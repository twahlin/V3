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

//begin custom meta box for link in blog post type
add_action( 'add_meta_boxes', 'metabox_link_add' );  
function metabox_link_add()  
{  
    add_meta_box( 'format_blog_link', 'Link', 'metabox_link', 'blog', 'normal', 'high' );  
}

function metabox_link( $post )  
{  
    $link_url = get_post_meta( $post->ID, 'link_url', true ); 
    $link_content = get_post_meta( $post->ID, 'link_content', true );   
    wp_nonce_field( 'save_link_meta', 'link_nonce' );  
    ?>  
        <p>
            <label for="link_url">Link URL</label>  
            <input type="text" class="widefat" id="link_url" name="link_url" value="<?php echo $link_url; ?>" />
        <em>Please use http:// (this will go directly to the href)</em>
        </p>    
        <p>
            <label for="link_content">Link Information</label>  
            <textarea class="widefat" id="link_content" name="link_content"><?php echo $link_content; ?></textarea>  
        </p>
    <?php  
  
}

add_action( 'save_post', 'metabox_link_save' );  
function metabox_link_save( $id )  
{  
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;  
  
    if( !isset( $_POST['link_nonce'] ) || !wp_verify_nonce( $_POST['link_nonce'], 'save_link_meta' ) ) return;  
  
    if( !current_user_can( 'edit_post' ) ) return;  
    
    if( isset( $_POST['link_url'] ) )  
        update_post_meta( $id, 'link_url', esc_attr( strip_tags( $_POST['link_url'] ) ) );
  
    if( isset( $_POST['link_content'] ) )  
        update_post_meta( $id, 'link_content', esc_attr( strip_tags( $_POST['link_content'] )) );  
}
//end custom meta box for link in blog post type

//begin custom meta box for video in blog post type
add_action( 'add_meta_boxes', 'metabox_video_add' );  
function metabox_video_add()  
{  
    add_meta_box( 'format_blog_video', 'Video', 'metabox_video', 'blog', 'normal', 'high' );  
}

function metabox_video( $post )  
{  
    $video_url = get_post_meta( $post->ID, 'video_url', true ); 
    wp_nonce_field( 'save_video_meta', 'video_nonce' );  
    ?>  
        <p>
            <label for="video_url">Video Embed Code</label>  
            <textarea class="widefat" id="video_url" name="video_url"><?php echo $video_url; ?></textarea>  
        </p>
    <?php  
  
}

add_action( 'save_post', 'metabox_video_save' );  
function metabox_video_save( $id )  
{  
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;  
  
    if( !isset( $_POST['video_nonce'] ) || !wp_verify_nonce( $_POST['video_nonce'], 'save_video_meta' ) ) return;  
  
    if( !current_user_can( 'edit_post' ) ) return;  
    
    if( isset( $_POST['video_url'] ) )  
        update_post_meta( $id, 'video_url', ( $_POST['video_url'] ) );
}
//end custom meta box for vido in blog post type
   
    
// NOT COMPLETE!!!!    
    
//begin custom meta box work posts
//Begin custom Meta Info per work piece
add_action( 'add_meta_boxes', 'metabox_work_add' );  
function metabox_work_add()  
{  
    add_meta_box( 'work_type', 'Work Information', 'metabox_work', 'work', 'normal', 'high' );  
}

function metabox_work( $post )  
{  
    $work_project = get_post_meta( $post->ID, 'work_project', true );  
    $work_role = get_post_meta( $post->ID, 'work_role', true );  
    $work_technology_used = get_post_meta( $post->ID, 'work_technology_used', true ); 
    $work_company = get_post_meta( $post->ID, 'work_company', true );  
    $work_description = get_post_meta( $post->ID, 'work_description', true );   
    wp_nonce_field( 'save_work_meta', 'work_nonce' );  
    ?>  
    <p>
        <label for="work_project">Project</label>  
        <input type="text" class="widefat" id="work_project" name="work_project" value="<?php echo $work_project; ?>" />
    </p>
    <p>
        <label for="work_role">Role</label>  
        <input type="text" class="widefat" id="work_role" name="work_role" value="<?php echo $work_role; ?>" />
    </p>
    <p>
        <label for="work_technology_used">Technology Used</label>  
        <input type="text" class="widefat" id="work_technology_used" name="work_technology_used" value="<?php echo $work_technology_used; ?>" />
    </p>
    <p>
        <label for="work_company">Company</label>  
        <input type="text" class="widefat" id="work_company" name="work_company" value="<?php echo $work_company; ?>" />
    </p>
    <p>
        <label for="work_description">Description</label>  
        <textarea class="widefat" id="work_description" name="work_description"><?php echo $work_description; ?></textarea>  
    </p>  
    <?php  
  
}

add_action( 'save_post', 'metabox_work_save' );  
function metabox_work_save( $id )  
{  
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;  
  
    if( !isset( $_POST['work_nonce'] ) || !wp_verify_nonce( $_POST['work_nonce'], 'save_work_meta' ) ) return;  
  
    if( !current_user_can( 'edit_post' ) ) return;  
  
    if( isset( $_POST['work_project'] ) )  
        update_post_meta( $id, 'work_project', esc_attr( strip_tags( $_POST['work_project'] )) );  
  
    if( isset( $_POST['work_role'] ) )  
        update_post_meta( $id, 'work_role', esc_attr( strip_tags( $_POST['work_role'] ) ) );  
  
    if( isset( $_POST['work_technology_used'] ) )  
        update_post_meta( $id, 'work_technology_used', esc_attr( strip_tags( $_POST['work_technology_used'] ) ) );  
        
    if( isset( $_POST['work_company'] ) )  
        update_post_meta( $id, 'work_company', esc_attr( strip_tags( $_POST['work_company'] ) ) );
        
    if( isset( $_POST['work_description'] ) )  
        update_post_meta( $id, 'work_description', esc_attr( strip_tags( $_POST['work_description'] ) ) );                
  
}
//End custom Meta Info per work piece
//end custom meta box for work posts   
    
    
    
    
    
    

    
    
    

    
//start JS for toggling meta boxes    
    // function toggle_meta_box_per_post_format() {
    //    wp_register_script('toggle_meta_box_per_post_format', get_template_directory_uri() . '/scripts/admin/toggle_meta_box_per_post_format.js');
    //    wp_enqueue_script('toggle_meta_box_per_post_format');
    // }
    // add_action('admin_enqueue_scripts', 'toggle_meta_box_per_post_format');
//end JS for toggling meta boxes
    
    
    
    
    
    

?>