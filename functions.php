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

//! Setup login styles
add_action( 'login_head', function() {

    ?><style type="text/css">
    body {
        background: #fff;
    }
    #login {
        padding-top: 5%;
    }
    #login h1 a {
        display: block;
        background: url( "<?php echo get_stylesheet_directory_uri(); ?>/images/twp-logo.svg" ) center bottom no-repeat;
        background-size: 100% auto;
        width: 100%;
        height: 115px;
    }
    </style><?php

});