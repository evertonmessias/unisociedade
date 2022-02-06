<?php

// Descrição **********************************

function field_box_projetos_descricao()
{
    add_meta_box('projetos_descricao_id', 'Breve descrição e objetivo', 'field_projetos_descricao', 'projetos');
}
add_action('add_meta_boxes', 'field_box_projetos_descricao');

function field_projetos_descricao($post)
{
?>
    <p><input type="text" name="projetos_descricao" value="<?php echo get_post_meta($post->ID, 'projetos_descricao', true); ?>"></p>        
<?php
}

// Data **********************************

function field_box_projetos_date()
{
    add_meta_box('projetos_date_id', 'Período de excecução (anos específicos, ex. 2016)', 'field_projetos_date', 'projetos');
}
add_action('add_meta_boxes', 'field_box_projetos_date');

function field_projetos_date($post)
{    
?>
    <input type="text" name="projetos_date" value="<?php echo get_post_meta($post->ID, 'projetos_date', true); ?>">
<?php
}

// Área **********************************

function field_box_projetos_area()
{
    add_meta_box('projetos_area_id', 'Área do Froproex', 'field_projetos_area', 'projetos');
}
add_action('add_meta_boxes', 'field_box_projetos_area');

function field_projetos_area($post)
{
?>
    <p><input type="text" name="projetos_area" value="<?php echo get_post_meta($post->ID, 'projetos_area', true); ?>"></p>        
<?php
}

// Unidade **********************************

function field_box_projetos_unidade()
{
    add_meta_box('projetos_unidade_id', 'Unidade (faculdade/instituto etc.)', 'field_projetos_unidade', 'projetos');
}
add_action('add_meta_boxes', 'field_box_projetos_unidade');

function field_projetos_unidade($post)
{
?>
    <p><input type="text" name="projetos_unidade" value="<?php echo get_post_meta($post->ID, 'projetos_unidade', true); ?>"></p>        
<?php
}

// Comunidade **********************************

function field_box_projetos_comunidade()
{
    add_meta_box('projetos_comunidade_id', 'Comunidade/local da atuação', 'field_projetos_comunidade', 'projetos');
}
add_action('add_meta_boxes', 'field_box_projetos_comunidade');

function field_projetos_comunidade($post)
{
?>
    <p><input type="text" name="projetos_comunidade" value="<?php echo get_post_meta($post->ID, 'projetos_comunidade', true); ?>"></p>        
<?php
}

// Cidade **********************************

function field_box_projetos_cidade()
{
    add_meta_box('projetos_cidade_id', 'Cidade de execução do projeto', 'field_projetos_cidade', 'projetos');
}
add_action('add_meta_boxes', 'field_box_projetos_cidade');

function field_projetos_cidade($post)
{
?>
    <p><input type="text" name="projetos_cidade" value="<?php echo get_post_meta($post->ID, 'projetos_cidade', true); ?>"></p>        
<?php
}

// Beneficiados **********************************

function field_box_projetos_beneficiados()
{
    add_meta_box('projetos_beneficiados_id', 'Beneficiados (extramuros, ex. estudantes, idosos, etc.)', 'field_projetos_beneficiados', 'projetos');
}
add_action('add_meta_boxes', 'field_box_projetos_beneficiados');

function field_projetos_beneficiados($post)
{
?>
    <p><input type="text" name="projetos_beneficiados" value="<?php echo get_post_meta($post->ID, 'projetos_beneficiados', true); ?>"></p>        
<?php
}

// Coordenador **********************************

function field_box_projetos_coordenador()
{
    add_meta_box('projetos_coordenador_id', 'Coordenador', 'field_projetos_coordenador', 'projetos');
}
add_action('add_meta_boxes', 'field_box_projetos_coordenador');

function field_projetos_coordenador($post)
{
?>
    <p><input type="text" name="projetos_coordenador" value="<?php echo get_post_meta($post->ID, 'projetos_coordenador', true); ?>"></p>        
<?php
}

// E-mail **********************************

function field_box_projetos_email()
{
    add_meta_box('projetos_email_id', 'E-mail', 'field_projetos_email', 'projetos');
}
add_action('add_meta_boxes', 'field_box_projetos_email');

function field_projetos_email($post)
{
?>
    <p><input type="email" name="projetos_email" value="<?php echo get_post_meta($post->ID, 'projetos_email', true); ?>"></p>        
<?php
}

// Telefone **********************************

function field_box_projetos_telefone()
{
    add_meta_box('projetos_telefone_id', 'Telefone da secretaria de extensão da unidade', 'field_projetos_telefone', 'projetos');
}
add_action('add_meta_boxes', 'field_box_projetos_telefone');

function field_projetos_telefone($post)
{
?>
    <p><input type="text" name="projetos_telefone" value="<?php echo get_post_meta($post->ID, 'projetos_telefone', true); ?>"></p>        
<?php
}

// Status **********************************

function field_box_projetos_status()
{
    add_meta_box('projetos_status_id', 'Status do projeto em 2022 (ativo, encerrado, sem informação)', 'field_projetos_status', 'projetos');
}
add_action('add_meta_boxes', 'field_box_projetos_status');

function field_projetos_status($post)
{
?>
    <p><input type="text" name="projetos_status" value="<?php echo get_post_meta($post->ID, 'projetos_status', true); ?>"></p>        
<?php
}

// Texto ********************************

function field_box_projetos_texto()
{
    add_meta_box('projetos_texto_id', 'Outras informações', 'field_projetos_texto', 'projetos');
}
add_action('add_meta_boxes',  'field_box_projetos_texto');

function field_projetos_texto($post)
{
    $value2 = get_post_meta($post->ID, 'projetos_texto', true);
    wp_editor($value2, 'field_projetos_texto_id', array('textarea_name' => 'projetos_texto'));
}

// SAVE ALL **********************************

function save_postmeta_projetos($post_id)
{
    if (isset($_POST['projetos_descricao'])) {
        $projetos_descricao = sanitize_text_field($_POST['projetos_descricao']);
        update_post_meta($post_id, 'projetos_descricao', $projetos_descricao);
    }
    if (isset($_POST['projetos_date'])) {
        $projetos_date = sanitize_text_field($_POST['projetos_date']);
        update_post_meta($post_id, 'projetos_date', $projetos_date);
    }
    if (isset($_POST['projetos_area'])) {
        $projetos_area = sanitize_text_field($_POST['projetos_area']);
        update_post_meta($post_id, 'projetos_area', $projetos_area);
    }
    if (isset($_POST['projetos_unidade'])) {
        $projetos_unidade = sanitize_text_field($_POST['projetos_unidade']);
        update_post_meta($post_id, 'projetos_unidade', $projetos_unidade);
    }
    if (isset($_POST['projetos_comunidade'])) {
        $projetos_comunidade = sanitize_text_field($_POST['projetos_comunidade']);
        update_post_meta($post_id, 'projetos_comunidade', $projetos_comunidade);
    }
    if (isset($_POST['projetos_cidade'])) {
        $projetos_cidade = sanitize_text_field($_POST['projetos_cidade']);
        update_post_meta($post_id, 'projetos_cidade', $projetos_cidade);
    }
    if (isset($_POST['projetos_beneficiados'])) {
        $projetos_beneficiados = sanitize_text_field($_POST['projetos_beneficiados']);
        update_post_meta($post_id, 'projetos_beneficiados', $projetos_beneficiados);
    }
    if (isset($_POST['projetos_coordenador'])) {
        $projetos_coordenador = sanitize_text_field($_POST['projetos_coordenador']);
        update_post_meta($post_id, 'projetos_coordenador', $projetos_coordenador);
    }
    if (isset($_POST['projetos_email'])) {
        $projetos_email = sanitize_text_field($_POST['projetos_email']);
        update_post_meta($post_id, 'projetos_email', $projetos_email);
    }
    if (isset($_POST['projetos_telefone'])) {
        $projetos_telefone = sanitize_text_field($_POST['projetos_telefone']);
        update_post_meta($post_id, 'projetos_telefone', $projetos_telefone);
    }
    if (isset($_POST['projetos_status'])) {
        $projetos_status = sanitize_text_field($_POST['projetos_status']);
        update_post_meta($post_id, 'projetos_status', $projetos_status);
    }
    if (isset($_POST['projetos_texto'])) {
        $projetos_texto = sanitize_text_field($_POST['projetos_texto']);
        update_post_meta($post_id, 'projetos_texto', $projetos_texto);
    }         
}
add_action('save_post', 'save_postmeta_projetos');
