<?php

//begin custom meta box for quote in blog post type
add_action( 'add_meta_boxes', 'metabox_quote_add' );  
function metabox_quote_add()  
{  
    add_meta_box( 'blog_quote', 'Quote', 'metabox_quote', 'blog', 'normal', 'high' );  
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
    
    
    
    
    
    
    
    
    
    
    
    
    // //Toggle meta boxes per post format in "custom meta box type: blog"
    // function toggle_meta_box_per_post_format()
    // {
    // wp_enqueue_script( 'jquery' );
    // 
    // $script = '
    // <script type="text/javascript">
    // jQuery( document ).ready( function($)
    // {
    // $( "#post_format_box" ).addClass( "hidden" );
    // 
    // $( "input#post-format-0" ).change( function() {
    // $( "#postdivrich" ).removeClass( "hidden" );
    // $( "#post_format_box" ).addClass( "hidden" );
    // } );
    // 
    // $( "input:not(#post-format-0)" ).change( function() {
    // $( "#postdivrich" ).addClass( "hidden" );
    // $( "#post_format_box" ).removeClass( "hidden" );
    // } );
    // 
    // $( "input[name=\"post_format\"]" ).click( function() {
    // var mydiv = $(this).attr( "id" ).replace( "post-format-", "" );
    // $( "#post_format_box div.inside div" ).addClass("hidden");
    // $( "#post_format_box div.inside div#"+mydiv).removeClass( "hidden" );
    // } );
    // }
    // );
    // </script>
    // ';
    // 
    // return print $script;
    // }
    // add_action( 'admin_footer', 'toggle_meta_box_per_post_format' );
    // //End Toggle meta boxes per post format in "custom meta box type: blog"
    // 
    
    
    

?>