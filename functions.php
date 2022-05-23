 <?php

//Stylesheet Function
function load_stylesheets(){

  //Skeleton CDN
  wp_enqueue_style( 'skeleton', 'https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css' );
  // style.css
  wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('stylesheet');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// Javascript Function
function loadjs(){

  wp_register_script('customjs', get_template_directory_uri() . '/scripts.js', '', 1, true);
  wp_enqueue_script('customjs');

}
add_action('wp_enqueue_scripts', 'loadjs');

?>
