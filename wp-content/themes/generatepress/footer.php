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
							<input class="email-input" placeholder="Your email address" name="email" type="text"/>
						</div>
						<div class="submit">
							<input class="submit-btn" type="submit" value="Subscribe" />
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
<span id="siteseal">
	<script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=jjEqupKn2lQEkTzCG8F5aB9ZfOVui7TioZkbIi4EafVN6GbUy7LNZo9bWbxf"></script>
</span>
</body>
</html>