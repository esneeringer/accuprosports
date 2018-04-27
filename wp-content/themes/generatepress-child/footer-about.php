<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package GeneratePress
 */
 
// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;
?>

	</div><!-- #content -->
</div><!-- #page -->

<!-- Subscribe box -->
<div class="contact-box">
	<div class="inner-contact-box">
		<h1 class="entry-title">Contact Us</h1>
		<!--<h5>info@AccuProSports.com</h5>-->
		<form class="email-about-form" id="email-about-form">
			<div class="inner-email-about-form">
				<div class="input-50 left">
					<div>
						<input class="email-input-contact" placeholder="Your name" type="text" name="name"/>
					</div>
				</div>
				<div class="input-50 right">
					<div>
						<input class="email-input-contact" placeholder="Your email address" type="text" name="email"/>
					</div>
				</div>
				<div class="clearfix"></div>
					<textarea placeholder="Message" name="message" form="email-about-form"></textarea>
				<div class="submit">
					<input class="submit-btn email-about" type="submit" value="Submit Message" />
				</div>
			</div>
		</form>
	</div>
</div>
<div class="social-box">
	<div class="inner-social-box">
		<h1 class="entry-title">Follow Us</h1>
		<div class="social-icons">
			<a href="https://www.instagram.com/accuprosports/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a href="https://www.facebook.com/AccuProSports/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="https://twitter.com/AccuProSports" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>	
		</div>
	</div>
</div>
<!-- Custom Footer -->
<footer>
	<div class="inner-footer">
		<div class="left">
			<div class="inner-left">
				<img src="<?= get_site_url(); ?>/wp-content/uploads/2017/11/aps_logo_white.png" class="logo" alt="Logo"/>
				<?php wp_nav_menu(); ?>
				<div class="copyright">&copy 2018 AccuProSports®, LLC</div>
			</div>
		</div>
		<div class="right">
			<div class="inner-right">
				<div class="social">
					<span>Follow Us</span>
					<a href="https://www.instagram.com/accuprosports/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="https://www.facebook.com/AccuProSports/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://twitter.com/AccuProSports" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>	
				</div>
				<form class="email-footer">
					<div class="inner-form">
						<div class="input">
							<input name="email" class="email-input" placeholder="Your email address" type="email"/>
						</div>
						<div class="submit">
							<input name="subscribe" class="submit-btn" type="submit" value="Subscribe" />
						</div>
						<div class="clearfix"></div>
					</div>
				</form>
				<div class="form-text">
					Be the first to get the latest updated mocks
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>