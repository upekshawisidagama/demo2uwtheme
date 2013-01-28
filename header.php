<?php
/**
 * The Header for UW Theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package UW
 * @subpackage UW Theme
 * @since UW Theme 1.0
 */
?><!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    
<head>
    
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>     
<div id="page" class="hfeed site">
 
	<header id="masthead" class="row">      
            
		<nav id="top-navigation">
			<?php global $uwtheme; echo $uwtheme->menus->get_menu('top'); ?>
		</nav><!-- #site-navigation -->    
                
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
                                              
	</header><!-- #masthead -->                

	<div id="main" class="wrapper row">
            
        <nav id="site-navigation" class="main-navigation">
                <?php global $uwtheme; echo $uwtheme->menus->get_menu('main'); ?>  
        </nav><!-- #site-navigation -->                 