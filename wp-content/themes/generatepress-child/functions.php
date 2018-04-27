<?php
add_action( 'wp_enqueue_scripts', 'add_assets' );
function add_assets() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'aps-js', get_stylesheet_directory_uri() .'/js/aps.js');
    // Google fonts
	wp_enqueue_style( 'google-font-css', "https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800");
}

// Add Shortcode
function generate_scorecard( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'id' => '',
		),
		$atts,
		'scorecard'
	);

	return '<div class="scorecard">
		<div class="inner-scorecard">
			<div class="section">
				<div class="inner-section">
					<div class="left">
						<div class="inner-left">
							<div class="key">'.do_shortcode("[table-cell id=". esc_attr($atts["id"]) ." cell=A1 /]").'</div>
							<div class="value">'.do_shortcode("[table-cell id=". esc_attr($atts["id"]) ." cell=B1 /]").'</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="right">
						<div class="inner-right">
							<div class="description">'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=C1 /]").'</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="section">
				<div class="inner-section">
					<div class="left">
						<div class="inner-left">
							<div class="key">'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=A2 /]").'</div>
							<div class="value">'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=B2 /]").'</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="right">
						<div class="inner-right">
							<div class="description">'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=C2 /]").'</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="section">
				<div class="inner-section">
					<div class="left">
						<div class="inner-left">
							<div class="key">'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=A3 /]").'</div>
							<div class="value">'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=B3 /]").'</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="right">
						<div class="inner-right">
							<div class="description">'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=C3 /]").'</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="section">
				<div class="inner-section">
					<div class="left">
						<div class="inner-left">
							<div class="key">'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=A4 /]").'</div>
							<div class="value">'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=B4 /]").'</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="right">
						<div class="inner-right">
							<div class="description">'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=C4 /]").'</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="section">
				<div class="inner-section">
					<div class="left">
						<div class="inner-left">
							<div class="key">'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=A5 /]").'</div>
							<div class="value">'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=B5 /]").'</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="right">
						<div class="inner-right">
							<div class="description">'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=C5 /]").'</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="section">
				<div class="inner-section">
					<div class="left">
						<div class="inner-left">
							<div class="key score-modal-key"><i class=""></i> '.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=A6 /]").'&trade;</div>
							<div class="value score-modal-value"><b>'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=B6 /]").'</b></div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="right">
						<div class="inner-right">
							<div class="description">'.do_shortcode("[table-cell id=".esc_attr($atts["id"])." cell=C6 /]").'</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>';

}
add_shortcode( 'scorecard', 'generate_scorecard' );

?>