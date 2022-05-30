	<?php
add_filter( 'show_admin_bar', '__return_false' );

function my_scripts() {
  wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/public/css/style.css', false, '1.0', 'all' );
	wp_enqueue_script("script", get_template_directory_uri() . '/app/js/script.js', null, true);
  wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', [], false, false);
}

add_action( 'wp_enqueue_scripts', 'my_scripts');

function enqueue_plugin_scripts() {
    wp_enqueue_script('module_handle', get_template_directory_uri() . '/app/js/modul.js');
};

add_action( 'wp_enqueue_scripts', 'enqueue_plugin_scripts' );

function set_scripts_type_attribute( $tag, $handle, $src ) {
  if ( 'module_handle' === $handle ) {
      $tag = '<script type="module" src="'. $src .'"></script>';
  }
  return $tag;
}

add_filter( 'script_loader_tag', 'set_scripts_type_attribute', 10, 3 );

function woodwood_theme_setup() {
  register_nav_menus( array(
    'header' => 'Header menu',
    'footer' => 'Footer menu',
    'footer_secondary' => 'Secondary footer',
    'profile' => 'Profile'
  ) );
 }

add_action( 'after_setup_theme', 'woodwood_theme_setup' );

// DEFER
function mind_defer_scripts( $tag, $handle, $src ) {
  $defer = array(
    'script'
  );
  if ( in_array( $handle, $defer ) ) {
     return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
  }

    return $tag;
}
add_filter( 'script_loader_tag', 'mind_defer_scripts', 10, 3 );