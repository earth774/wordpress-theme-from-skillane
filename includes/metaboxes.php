<?php

add_action('add_meta_boxes', 'wordpressthemecourse_register_slide_metabox');
function wordpressthemecourse_register_slide_metabox()
{
    add_meta_box(
        'wordpressthemecourse_slide_metabox_id',                 // Unique ID
        'Slide Options',      // Box title
        'wordpressthemecourse_slide_metabox',  // Content callback, must be of type callable
        'slide'                            // Post type
    );
}

function wordpressthemecourse_slide_metabox($post)
{
    $slide = get_post_meta($post->ID, 'slide', true);
    $tagline = get_post_meta($post->ID, 'tagline', true);
    $url = get_post_meta($post->ID, 'url', true);
    ?>
    <table class="form-table">
        <tr>
            <td><label for="slide">Slide image url</label></td>
            <td><input type="text" class="regular-text" name="slide" value="<?php echo $slide; ?>"></td>
        </tr>
        <tr>
            <td><label for="slide">Tagline</label></td>
            <td><input type="text" class="regular-text" name="tagline" value="<?php echo $tagline; ?>"></td>
        </tr>
        <tr>
            <td><label for="slide">URL</label></td>
            <td><input type="text" class="regular-text" name="url" value="<?php echo $url; ?>"></td>
        </tr>
    </table>
    <?php
}

add_action('save_post_slide', 'wordpressthemecourse_save_slide_meta');
function wordpressthemecourse_save_slide_meta($post_id)
{
    update_post_meta( $post_id, 'slide', $_POST['slide']);
    update_post_meta( $post_id, 'tagline', $_POST['tagline']);
    update_post_meta( $post_id, 'url', $_POST['url']);
}
