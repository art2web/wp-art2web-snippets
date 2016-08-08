<?php
/*------------------------------------------------------------------------------------------------------------------
Plugin Name: WP Art2web Snippets
Description: Plugin com diversas funções para agilizar o desenvolvimento de temas personalizados
Version: 1.0.0
Author: Art2web Studio
Author URI: http://art2web.com.br
---------------------------------------------------------------------------------------------------------------------*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Sair se for acessado diretamente.
}

define('ART2WEB_PLUGIN_URL', plugins_url('', __FILE__));
define('ART2WEB_PLUGIN_DIR', plugin_dir_path(__FILE__));

if (is_admin()){
	require_once( ART2WEB_PLUGIN_DIR . '/inc/load-plugins.php');
}
	require_once( ART2WEB_PLUGIN_DIR . '/inc/load-scripts.php');
	require_once( ART2WEB_PLUGIN_DIR . '/inc/load-functions.php');
?>
