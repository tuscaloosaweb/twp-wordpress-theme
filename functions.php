<?php

// Enqueue styles and scripts
add_action( 'wp_enqueue_scripts', function() {

    // Set the theme directory
    $theme_dir = get_stylesheet_directory_uri();

    // Register our font
    wp_register_style( 'twp-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,300' );

    // Enqueue our base stylesheet
    wp_enqueue_style( 'twp', $theme_dir . '/css/style.min.css', array( 'twp-fonts' ), NULL );

    // Modernizr JS - goes in header
    wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js' );

});