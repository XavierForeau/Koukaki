<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">

            <!-- URL site + Menu Burger -->
            <ul>
            <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
            </ul>

            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

            <!-- Menu plein écran --> 
            <div id="menu-fullscreen" >

                <!-- images -->
                <img class="logo-menu" src="<?php echo get_theme_file_uri() . '/assets/images/logo_menu.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                <img class="random-flower" src="<?php echo get_theme_file_uri() . '/assets/images/random_flower.png'; ?> " alt="random_flower">
                <img class="sun-flower"  src="<?php echo get_theme_file_uri() . '/assets/images/Sunflower.png'; ?> " alt="Sunflower">
                <img class="orchid" src="<?php echo get_theme_file_uri() . '/assets/images/orchid.png'; ?> " alt="orchid">
                <img class="flower" src="<?php echo get_theme_file_uri() . '/assets/images/flower.png'; ?> " alt="another flower">
                <img class="hibiscus" src="<?php echo get_theme_file_uri() . '/assets/images/hibiscus.png'; ?> " alt="hibiscus">
                <img class="yellow-cat" src="<?php echo get_theme_file_uri() . '/assets/images/cat-yellow.png'; ?> " alt="yellow cat">
                <img class="black-cat" src="<?php echo get_theme_file_uri() . '/assets/images/cat-black.png'; ?> " alt="black cat">
                <img class="blue-cat" src="<?php echo get_theme_file_uri() . '/assets/images/cat-blue.png'; ?> "alt="blue cat">

                <!-- liens -->
                <ul>
                    <li><a href="#story" class="title"><span>Histoire</span></a></li>
                    <li><a href="#characters" class="title"><span>Personnages</span></a></li>
                    <li><a href="#place">Lieu</a></li>
                    <li><a href="#studio">Studio Koukaki</a></li>
                </ul>
                <p class="menuP">STUDIO KOUKAKI</p>          
            </div>

        </nav><!-- #site-navigation -->
 	</header><!-- #masthead -->
