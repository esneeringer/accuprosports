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

<!-- Boxes -->
<div class="boxes">
	<div class="box-row light">
		<div class="inner-box-row">
			<div class="box first">
				<div class="inner-box">
					<div class="top5">Top 5</div>			
					<div class="title">Overall Score</div>
					<div class="list">
						<ol>
							<li><?php echo the_field('overall_expert_1')?> <span><?php echo the_field('overall_score_1')?></span></li>
							<li><?php echo the_field('overall_expert_2')?> <span><?php echo the_field('overall_score_2')?></span></li>
							<li><?php echo the_field('overall_expert_3')?> <span><?php echo the_field('overall_score_3')?></span></li>
							<li><?php echo the_field('overall_expert_4')?> <span><?php echo the_field('overall_score_4')?></span></li>
							<li><?php echo the_field('overall_expert_5')?> <span><?php echo the_field('overall_score_5')?></span></li>
						</ol>
					</div>
				</div>
			</div>
			<div class="box second">
				<div class="inner-box">
					<div class="top5">Top 5</div>			
					<div class="title">Number of Correct Picks</div>
					<div class="list">
						<ol>
							<li><?php echo the_field('current_pick_expert_1')?> <span><?php echo the_field('current_pick_score_1')?></span></li>
							<li><?php echo the_field('current_pick_expert_2')?> <span><?php echo the_field('current_pick_score_2')?></span></li>
							<li><?php echo the_field('current_pick_expert_3')?> <span><?php echo the_field('current_pick_score_3')?></span></li>
							<li><?php echo the_field('current_pick_expert_4')?> <span><?php echo the_field('current_pick_score_4')?></span></li>
							<li><?php echo the_field('current_pick_expert_5')?> <span><?php echo the_field('current_pick_score_5')?></span></li>
						</ol>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="box-row dark">
		<div class="inner-box-row">
			<div class="box first">
				<div class="inner-box">
					<div class="top5">Top 5</div>			
					<div class="title">Total Error (Least)</div>
					<div class="list">
						<ol>
							<li><?php echo the_field('total_error_expert_1')?> <span><?php echo the_field('total_error_score_1')?></span></li>
							<li><?php echo the_field('total_error_expert_2')?> <span><?php echo the_field('total_error_score_2')?></span></li>
							<li><?php echo the_field('total_error_expert_3')?> <span><?php echo the_field('total_error_score_3')?></span></li>
							<li><?php echo the_field('total_error_expert_4')?> <span><?php echo the_field('total_error_score_4')?></span></li>
							<li><?php echo the_field('total_error_expert_5')?> <span><?php echo the_field('total_error_score_5')?></span></li>
						</ol>
					</div>
				</div>
			</div>
			<div class="box second">
				<div class="inner-box">
					<div class="top5">Top 5</div>			
					<div class="title">Average Mock Error</div>
					<div class="list">
						<ol>
							<li><?php echo the_field('average_mock_expert_1')?> <span><?php echo the_field('average_mock_score_1')?> </span></li>
							<li><?php echo the_field('average_mock_expert_2')?> <span><?php echo the_field('average_mock_score_2')?> </span></li>
							<li><?php echo the_field('average_mock_expert_3')?> <span><?php echo the_field('average_mock_score_3')?> </span></li>
							<li><?php echo the_field('average_mock_expert_4')?> <span><?php echo the_field('average_mock_score_4')?> </span></li>
							<li><?php echo the_field('average_mock_expert_5')?> <span><?php echo the_field('average_mock_score_5')?> </span></li>
						</ol>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="box-row light">
		<div class="inner-box-row">
			 <div class="box first">
				<div class="inner-box">
					<div class="top5">Top 5</div>			
					<div class="title">Difficulty Points</div>
					<div class="list">
						<ol>
							<li><?php echo the_field('difficulty_points_expert_1')?>  <span><?php echo the_field('difficulty_points_score_1')?></span></li>
							<li><?php echo the_field('difficulty_points_expert_2')?>  <span><?php echo the_field('difficulty_points_score_2')?></span></li>
							<li><?php echo the_field('difficulty_points_expert_3')?>  <span><?php echo the_field('difficulty_points_score_3')?></span></li>
							<li><?php echo the_field('difficulty_points_expert_4')?>  <span><?php echo the_field('difficulty_points_score_4')?></span></li>
							<li><?php echo the_field('difficulty_points_expert_5')?>  <span><?php echo the_field('difficulty_points_score_5')?></span></li>
						</ol>
					</div>
				</div>
			</div>
			<div class="box second">
				<div class="inner-box">
					<div class="top5">Top 5</div>			
					<div class="title">Team Matching</div>
					<div class="list">
						<ol>
							<li><?php echo the_field('team_matching_expert_1')?>  <span><?php echo the_field('team_matching_score_1')?></span></li>
							<li><?php echo the_field('team_matching_expert_2')?>  <span><?php echo the_field('team_matching_score_2')?></span></li>
							<li><?php echo the_field('team_matching_expert_3')?>  <span><?php echo the_field('team_matching_score_3')?></span></li>
							<li><?php echo the_field('team_matching_expert_4')?>  <span><?php echo the_field('team_matching_score_4')?></span></li>
							<li><?php echo the_field('team_matching_expert_5')?>  <span><?php echo the_field('team_matching_score_5')?></span></li>
						</ol>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
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
							<input class="email-footer" placeholder="Your email address" type="text" name="email"/>
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

</body>
</html>