<?php

//! Add favicons
add_action( 'wp_head', 'tuscaloosa_web_add_favicons' );
add_action( 'admin_head', 'tuscaloosa_web_add_favicons' );
add_action( 'login_head', 'tuscaloosa_web_add_favicons' );
function tuscaloosa_web_add_favicons() {

    // Set the favicons folder
    $favicons_folder = get_stylesheet_directory_uri() . '/images/favicons/';

    // Include the favicons
    ?><link rel="shortcut icon" href="<?php echo $favicons_folder; ?>twp-favicon-60x60.png" />
    <link rel="apple-touch-icon" href="<?php echo $favicons_folder; ?>twp-favicon-60x60.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $favicons_folder; ?>twp-favicon-76x76.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $favicons_folder; ?>twp-favicon-120x120.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $favicons_folder; ?>twp-favicon-152x152.png" /><?php

}

// Enqueue styles and scripts
add_action( 'wp_enqueue_scripts', function() {

    // Set the theme directory
    $theme_dir = get_stylesheet_directory_uri();

    // Register our font
    wp_register_style( 'twp-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,300' );

    // Enqueue our base stylesheet
    wp_enqueue_style( 'tuscaloosa-web', $theme_dir . '/css/style.min.css', array( 'twp-fonts' ), NULL );

    // Modernizr JS - goes in header
    wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js' );

});

//! Hide Query Monitor stats if admin bar isn't showing
add_filter( 'qm/process', function( $show_qm, $is_admin_bar_showing ) {
    return $is_admin_bar_showing;
});

//! Filter login logo URL
add_filter( 'login_headerurl', function( $login_header_url ) {
    return get_bloginfo( 'url' );
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
        background: url( "<?php echo get_stylesheet_directory_uri(); ?>/images/logos/twp-logo.svg" ) center bottom no-repeat;
        background-size: 95% auto;
        width: 100%;
        height: 115px;
    }
    </style><?php

});