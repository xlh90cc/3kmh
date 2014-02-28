<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package base
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php /* foundation */ ?>
<script src="<?php echo get_template_directory_uri(); ?>/foundation-5.0.2/js/modernizr.js"></script>
<?php /* foundation */ ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <?php do_action( 'before' ); ?>
    <header id="masthead" class="site-header" role="banner">
        <div class="headerInner row">
            <div class="site-branding large-12 columns">
                <div class="h1AndNavOuter">
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                </div>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <h1 class="menu-toggle"><?php _e( 'Menu', 'base' ); ?></h1>
                    <!-- <a class="skip-link screen-reader-text" href="#content"> --><?php /* _e( 'Skip to content', 'base' ); */ ?><!-- </a> -->
                    <?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'inline-list' ) ); ?>
                </nav><!-- #site-navigation -->
            </div>
        </div><!-- headerInner -->
    </header><!-- #masthead -->
<!-- スマホ用 -->
    <div class="off-canvas-wrap docs-wrap">
        <div class="inner-wrap">
            <nav class="tab-bar">
                <section class="left-small">
                    <a class="left-off-canvas-toggle menu-icon"><span></span></a>
                </section>
                <section class="right tab-bar-section">
                    <!-- <h1 class="title">Foundation</h1> -->
                </section>
            </nav>
            <aside class="left-off-canvas-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'off-canvas-list' ) ); ?>
<!--
      <ul class="off-canvas-list">
        <li><label>Foundation</label></li>
        <li><a href="#">The Psychohistorians</a></li>
        <li><a href="#">The Encyclopedists</a></li>
        <li><a href="#">The Mayors</a></li>
        <li><a href="#">The Traders</a></li>
        <li><a href="#">The Merchant Princes</a></li>
        <li><label>Foundation and Empire</label></li>
        <li><a href="#">The General</a></li>
        <li><a href="#">The Mule</a></li>
        <li><label>Second Foundation</label></li>
        <li><a href="#">Search by the Mule</a></li>
        <li><a href="#">Search by the Foundation</a></li>
      </ul>
-->
            </aside>
            <section class="main-section">
                <?php get_template_part('breadCrumbOuter'); ?>
<!-- スマホ用 -->
                    <div id="content" class="site-content row">
