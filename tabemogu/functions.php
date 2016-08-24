<?php
function tabemogu_scripts() {
	wp_enqueue_style( 'tabemogu-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'tabemogu_scripts' );