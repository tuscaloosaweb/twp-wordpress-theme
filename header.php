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
    <a href="#twp-content" id="skip-to-content">Skip to Content</a>

    <div id="twp-wrapper">

        <div id="twp-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo get_bloginfo( 'url' ); ?>">
                            <h1 class="screen-reader-text"><?php echo get_bloginfo( 'title' ); ?></h1>
                            <img class="twp-logo" src="<?php echo "{$theme_dir}/images/logos/twp-logo.svg"; ?>" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- #twp-header -->

        <div id="twp-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div id="twp-content">
                            <p>Tuscaloosa Web Professionals is a community and meetup group for anyone in the Tuscaloosa (and surrounding) area who makes a living building the world wide web. Whether you're a designer, coder, writer, sysadmin, or other web-related specialist, we invite you to join us to network, collaborate, learn, and share your expertise.</p>
                            <p><strong>For more information, <a href="http://www.meetup.com/Tuscaloosa-Web-Professionals/">visit Tuscaloosa Web Professionals on meetup.com</a>.</strong></p>
                            <div class="twp-social-media-buttons">
                                <a href="https://twitter.com/tuscaloosaweb" class="btn btn-primary btn-twitter" title="Follow Tuscaloosa Web Professionals on Twitter"><span>Twitter</span></a>
                                <a href="https://github.com/tuscaloosaweb" class="btn btn-primary btn-github" title="Follow Tuscaloosa Web Professionals on GitHub"><span>GitHub</span></a>
                                <a href="http://www.meetup.com/Tuscaloosa-Web-Professionals/" class="btn btn-primary btn-meetup" title="Join Tuscaloosa Web Professionals on meetup.com"><span>Join us on meetup.com</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>