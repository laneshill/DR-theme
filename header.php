<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-tabs');

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="header-info">	
			<h1 id="site-title">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/darkroom-logo.png" /></a>
			</h1>
			<div id="version-links">
				<a href="<?php echo home_url( '/' ); ?>buy/buy-direct/pro-edition" title="Pro Edition"><img src="<?php bloginfo('template_directory'); ?>/images/product-p.png" /></a>
				<a href="<?php echo home_url( '/' ); ?>buy/buy-direct/assembly-edition" title="Assembly Edition"><img src="<?php bloginfo('template_directory'); ?>/images/product-a.png" /></a>
				<a href="<?php echo home_url( '/' ); ?>buy/buy-direct/core-edition" title="Core Edition"><img src="<?php bloginfo('template_directory'); ?>/images/product-c.png" /></a>
			</div>
			<div id="site-description">
				<?php bloginfo( 'description' ); ?>
			</div>
		</div>
		<div id="main-nav" role="navigation">
			<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>


			<div id="facebook-link">
				<a href="http://facebook.com/" title="Like us on Facebook!"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-icon.png" /></a>
			</div>
			<div id="twitter-link">
				<a href="http://twitter.com/" title="Follow us on Twitter!"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-icon.png" /></a>
			</div>

		</div><!-- #main-nav -->
	</div><!-- #header -->
	<div id="wrapper-inner">
		<div id="main">
