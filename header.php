<?php

// Set the theme directory
$theme_dir = get_stylesheet_directory_uri();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '-', true, 'left' ); ?></title>

    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body <?php body_class(); ?>>
    <a href="#" id="skip-to-content">Skip to Content</a>

    <div id="twp-wrapper">

        <div id="twp-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo get_bloginfo( 'url' ); ?>"><img class="twp-logo" src="<?php echo "{$theme_dir}/images/twp-logo.svg"; ?>" /></a>
                    </div>
                </div>
            </div>
        </div> <!-- #twp-header -->

        <div id="twp-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <p>For more information about Tuscaloosa Web Professionals, <a href="http://www.meetup.com/Tuscaloosa-Web-Professionals/">visit our meetup.com account.</p>
                    </div>
                </div>
            </div>
        </div>