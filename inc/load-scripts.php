<?php

	function art2web_init() {
		if (!is_admin()) {

		    wp_register_script('art2web-plugin-js', ART2WEB_PLUGIN_URL.'/inc/assets/js/art2web-plugin.js', array('jquery'), false, false);
	        wp_enqueue_script( 'art2web-plugin-js' );

		}
}
add_action('init', 'art2web_init');
?>
