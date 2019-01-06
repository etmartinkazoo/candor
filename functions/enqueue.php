<?php
  function candor_scripts() {
    // Main Stylesheet
    wp_enqueue_style( 'candor_main', get_stylesheet_uri() );
    // Google Fonts
    wp_enqueue_style( 'candor-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Playfair+Display:400,700', false );
    // Minified Bootstrap 4.2.0
    wp_enqueue_style( 'candor_bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    // Custom Stylesheet compiled from SASS files in SASS directory
    wp_enqueue_style( 'candor_custom', get_template_directory_uri() . '/assets/sass/style.css');
    // Minified jQuery
    wp_enqueue_script( 'candor_bootstrap_jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js');
    // Font Awesome 5
    wp_enqueue_script( 'candor_fontawesome', get_template_directory_uri() . '/assets/js/fontawesome-all.min.js');
    // Popper.js (Bootstrap Dependency)
    wp_enqueue_script( 'candor_popper_javascript', get_template_directory_uri() . '/assets/js/popper.min.js'); 
    // Minified Bootstrap 4.2.0 Javascript
    wp_enqueue_script( 'candor_bootstrap_javascript', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    // Custom Javascript
    wp_enqueue_script( 'candor_custom_javascript', get_template_directory_uri() . '/assets/js/scripts.js');
  }

  add_action( 'wp_enqueue_scripts', 'candor_scripts' );