<?php
/**
 * Template Name: APS Home Page 2 
 *
 * @package GeneratePress
 */
 
// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>
	<!-- Welcome Box -->
	<div class="home-text-content">
		<h1> WELCOME </h1>
		<p>
		<?php echo the_field('home_paragraph_one') ?>
		</p>
	</div>

    <div class="flex-rectangle-home">
		<div class="img-row">
			<a href="aps/mock-drafts"><div class="flex-square-home-left img-home"><span>Mock Drafts</span></div></a>
			<a href="aps/about"><div class="flex-square-home-right img-home"><span>About</span></div></a>
			<a href="aps/grades"><div class="flex-square-home-center img-home"><span>Grades</span></div></a>
		</div>
    </div>

	<div class="home-text-content">
		<p>
			<?php echo the_field('home_paragraph_two') ?>
		</p>
	</div>


	<div class="rise-fall">
		<div class="inner-rise-fall">
			<div class="half">
				<div class="inner-half border">
					<h3 class="uppercase title">Rising</h3>
					<h2 class="uppercase">Stock <b>Up</b></h2>
					<ul class="no-bullet">
						<li><?php echo the_field('rising1') ?></li>
						<li><?php echo the_field('rising2') ?></li>
						<li><?php echo the_field('rising3') ?></li>
						<li><?php echo the_field('rising4') ?></li>
						<li><?php echo the_field('rising5') ?></li>
						<li><?php echo the_field('rising6') ?></li>
					</ul>
				</div>
			</div>
			<div class="half">
				<div class="inner-half right">
					<h3 class="uppercase title">Falling</h3>
					<h2 class="uppercase">Stock <b>Down</b></h2>
					<ul class="no-bullet">
						<li><?php echo the_field('falling1') ?></li>
						<li><?php echo the_field('falling2') ?></li>
						<li><?php echo the_field('falling3') ?></li>
						<li><?php echo the_field('falling4') ?></li>
						<li><?php echo the_field('falling5') ?></li>
						<li><?php echo the_field('falling6') ?></li>
					</ul>
				</div>		
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div id="primary" <?php generate_content_class();?>>
		<main id="main" <?php generate_main_class(); ?>>
			<?php do_action('generate_before_main_content'); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) : ?>
					<div class="comments-area">
						<?php comments_template(); ?>
					</div>
				<?php endif; ?>

			<?php endwhile; // end of the loop. ?>
			<?php do_action('generate_after_main_content'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php 
do_action('generate_sidebars');
get_footer('home');