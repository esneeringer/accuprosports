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
			<h1>Grades</h1>
			<p>Our innovative grading system is the first of its kind. We calculate and grade the accuracy of each expert mock draft.</p>
		</div>
	</div>
	
	<!--Countdown Clock -->
	<div class="countdown-box">
		<img src="http://accuprosports.com/wp-content/uploads/2018/01/Draft-of-the-year_2017-1.jpg" >
	</div>
	<!--	
		<div class="inner-countdown-box last-year">
			<div class="countdown-text">
				<div class="inner-countdown-text">
					2017 <b>Draft of the Year</b>
				</div>
			</div>
			<div class="countdown">
				<div class="inner-countdown">
					<div class="name">
						CONGRATULATIONS <span>Jason La Confora</span>
					</div>
					<div class="winning-scores">
						<span class="aps-score">72.44</span><span class="number-correct">8/32</span><span class="total-error">238</span><span class="avg-error">7.44</span><span class="diff-pts">90</span><span class="team-matching">8</span>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div> -->

	<div id="page" class="hfeed site grid-container container grid-parent">
		<div id="content" class="site-content">
			<?php do_action( 'generate_inside_container' ); ?>