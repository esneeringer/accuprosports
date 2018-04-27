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
	
	<!-- Script for countdown clock - needs to be above the elements in header -->
	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("Apr 26, 2018 20:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // If the count down is finished, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
        }, 1000);
	</script>
	<!-- Header Image -->
	<!-- TO-DO: Depending on Page, change header Image -->
	<div class="header-image">
		<img src="/wp-content/uploads/2018/01/APS-draft-stage-2610x866.jpg" alt="Smiley face">
	</div>

	<!--Countdown Clock -->
	<div class="countdown-box">	
		<div class="inner-countdown-box">
			<div class="countdown-text">
				<div class="inner-countdown-text">
					<b>2018 NFL Draft</b> Countdown
				</div>
			</div>
			<div class="countdown">
				<div class="inner-countdown">
					<span id="days" class="days"></span><span id="hours" class="hours"></span><span id="minutes" class="minutes"></span><span id="seconds" class="seconds"></span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<script>
			
		</script>
	</div>

	<div id="page" class="hfeed site grid-container container grid-parent">
		<div id="content" class="site-content">
			<?php do_action( 'generate_inside_container' ); ?>