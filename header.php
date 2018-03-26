<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package klever
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Wrapper -->
<div id="wrapper">
    <!-- Header -->
    <header id="header">
        <div class="inner">
            <?php $logo_img = '';
                if( $custom_logo_id = get_theme_mod('custom_logo') ){
                    $logo_img = wp_get_attachment_image( $custom_logo_id, [37, 37], false, array() );
                }
            ?>
            <!-- Logo -->
            <a href="<?php echo get_home_url();?>" class="logo">
                <span class="symbol"><?php echo $logo_img; ?></span>
                <span class="title"><?php bloginfo( 'name' ); ?></span>
            </a>

            <!-- Nav -->
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <h2>Меню:</h2>
        <?php wp_nav_menu( array( 'container' => false ) ); ?>
    </nav>
