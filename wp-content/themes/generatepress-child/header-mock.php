<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package GeneratePress
 */
 
// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php generate_body_schema();?> <?php body_class(); ?>>
	<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'generatepress' ); ?>"><?php _e( 'Skip to content', 'generatepress' ); ?></a>
	<?php do_action( 'generate_before_header' ); ?>
	<?php do_action( 'generate_header' ); ?>
	<?php do_action( 'generate_after_header' ); ?>

	<!-- Header Image -->
	<!-- TO-DO: Depending on Page, change header Image -->
	<div class="header-image">
		<img class="shadow" src="/wp-content/uploads/2018/01/APS-goodell-2610x866.jpg">
		<div class="overlay">
			<h3>2018 <span>NFL Draft</span></h3>
			<h1>Mock Drafts</h1>
			<p>This is our complete list of NFL draft experts. We update daily to provide the most current mocks available.</p>
		</div>
	</div>

	<div id="page" class="hfeed site grid-container container grid-parent">
		<div id="content" class="site-content">
			<?php do_action( 'generate_inside_container' ); ?>