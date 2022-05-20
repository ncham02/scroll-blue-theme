 <?php

function load_stylesheets(){

  // Skeleton CDN
  // wp_enqueue_style( 'skeleton', 'https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css' );

    // Regular Stylesheet
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');

?>
