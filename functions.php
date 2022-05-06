	<?php
add_filter( 'show_admin_bar', '__return_false' );

function my_scripts() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/public/css/style.css', false, '1.0', 'all' );
	//wp_enqueue_script("script", get_template_directory_uri() . '/public/js/script.js');
}

add_action( 'wp_enqueue_scripts', 'my_scripts');

function woodwood_theme_setup() {
  register_nav_menus( array(
    'header' => 'Header menu',
    'mobile_header' => 'Header menu - Mobile',
    'footer' => 'Footer menu',
    'sidebar' => 'Sidebar'
  ) );
 }

add_action( 'after_setup_theme', 'woodwood_theme_setup' );