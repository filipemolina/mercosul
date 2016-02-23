<?php

// Carregar o jQuery sem criar conflitos com o Wordpress

function my_init() {
	if (!is_admin()) {
		wp_deregister_script('jquery');

		// load the local copy of jQuery in the footer
		wp_register_script('jquery', '/wp-includes/js/jquery/jquery.js', false, '1.11.3', true);

		wp_enqueue_script('jquery');
	}
}
add_action('init', 'my_init');