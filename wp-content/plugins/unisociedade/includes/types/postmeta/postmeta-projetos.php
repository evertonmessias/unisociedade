<?php

// Data **********************************

function field_box_projetos_date()
{
    add_meta_box('projetos_date_id', 'Date da Reunião', 'field_projetos_date', 'projetos','projetos_date','high',null);
}
add_action('add_meta_boxes', 'field_box_projetos_date');

function field_projetos_date($post)
{
    $value = get_post_meta($post->ID, 'projetos_date', true);
?>
    <input type="datetime-local" name="projetos_date" value="<?php echo $value; ?>">
<?php
}

function move_postmeta_to_top() {
    global $post, $wp_meta_boxes;
    do_meta_boxes( get_current_screen(), 'projetos_date', $post );
    unset($wp_meta_boxes['post']['projetos_date']);
}
add_action('edit_form_after_title', 'move_postmeta_to_top');


// SAVE ALL **********************************

function save_postmeta_projetos($post_id)
{
    if (isset($_POST['projetos_date'])) {
        $projetos_date = sanitize_text_field($_POST['projetos_date']);
        update_post_meta($post_id, 'projetos_date', $projetos_date);
    }   
}
add_action('save_post', 'save_postmeta_projetos');
