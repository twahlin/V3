<?php
// Start Custom Meta Boxes
add_action( 'add_meta_boxes', 'cd_meta_box_add' );
function cd_meta_box_add()
{
    add_meta_box( 'my-meta-box-id', 'My First Meta Box', 'cd_meta_box_cb', 'work', 'normal', 'high' );
}
function cd_meta_box_cb( $post )
{
    // $post is already set, and contains an object: the WordPress post
    global $post;
    $values = get_post_custom( $post->ID );
    $text = isset( $values['my_meta_box_text'] ) ? esc_attr( $values['my_meta_box_text'][0] ) : '';
    $selected = isset( $values['my_meta_box_select'] ) ? esc_attr( $values['my_meta_box_select'][0] ) : '';
    $check = isset( $values['my_meta_box_check'] ) ? esc_attr( $values['my_meta_box_check'][0] ) : '';

    // We'll use this nonce field later on when saving.
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
    ?>
    <p>
        <label for="my_meta_box_text">Text Label</label>
        <input type="text" name="my_meta_box_text" id="my_meta_box_text" value="<?php echo $text; ?>" />
    </p>
    <p>
        <label for="my_meta_box_select">Color</label>
        <select name="my_meta_box_select" id="my_meta_box_select">
            <option value="red" <?php selected( $selected, 'red' ); ?>>Red</option>
            <option value="blue" <?php selected( $selected, 'blue' ); ?>>Blue</option>
        </select>
    </p>
    <p>
        <input type="checkbox" id="my_meta_box_check" name="my_meta_box_check" <?php checked( $check, 'on' ); ?> />
        <label for="my_meta_box_check">Do not check this</label>
    </p>
    <?php
}

add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id )
{
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;

    // now we can actually save the data
    $allowed = array(
    'a' => array( // on allow a tags
        'href' => array() // and those anchors can only have href attribute
        )
            );

        // Make sure your data is set before trying to save it
        if( isset( $_POST['my_meta_box_text'] ) )
            update_post_meta( $post_id, 'my_meta_box_text', wp_kses( $_POST['my_meta_box_text'], $allowed ) );

        if( isset( $_POST['my_meta_box_select'] ) )
            update_post_meta( $post_id, 'my_meta_box_select', esc_attr( $_POST['my_meta_box_select'] ) );

        // This is purely my personal preference for saving check-boxes
        $chk = ( isset( $_POST['my_meta_box_check'] ) && $_POST['my_meta_box_check'] ) ? 'on' : 'off';
        update_post_meta( $post_id, 'my_meta_box_check', $chk );
    }
    // End Custom Meta Boxes
    ?>