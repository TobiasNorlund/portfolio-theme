<?php
/**
 * Template file for the home (static) page

 */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style-home.css">
</head>

<body <?php body_class(); ?>>
<div id="top-header-menu-container">
    <?php wp_nav_menu( array( 'theme_location' => 'top-header-menu', 'menu_id' => 'top-header-menu' ) ); ?>
</div>

<div id="page" class="hfeed site">

    <div id="logo-container"></div>

    <div id="content" class="site-content">
        Content....

<?php get_footer(); ?>
