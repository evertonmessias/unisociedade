<?php

/**
 * Plugin Name: Uni.sociedade
 * Plugin URI: https://ic.unicamp.br/~everton
 * Description: Plugin Uni.sociedade para inclusão de Projetos
 * Author: EvM.
 * Version: 1.0
 * Text Domain: Uni.sociedade
 * Plugin Uni.sociedade
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// FUNCTIONS ************************************************
include ABSPATH . '/wp-content/plugins/unisociedade/includes/functions.php';

// TYPES ************************************************
include ABSPATH . '/wp-content/plugins/unisociedade/includes/types/projetos.php';

// SETTINGS ************************************************
include ABSPATH . '/wp-content/plugins/unisociedade/includes/settings.php';

// POSTMETA POST ************************************************
include ABSPATH . '/wp-content/plugins/unisociedade/includes/types/postmeta/postmeta-post.php';

// OBJECTS *************************************************
$projetos = new projetos();

register_activation_hook(__FILE__, array(    
    $projetos, 'activate'
));

register_deactivation_hook(__FILE__, array(
    $projetos, 'deactivate'   
));
