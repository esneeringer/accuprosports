<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package GeneratePress
 */
 
// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php generate_article_schema( 'CreativeWork' ); ?>>
	<div class="inside-article">
		<?php do_action( 'generate_before_content'); ?>

		<style>
			.tablepress tr{
				pointer-events: none;
				cursor: default;
			}
		</style>

		<?php if ( generate_show_title() ) : ?>
			<header class="entry-header">
				<div class="left">
					<?php the_title( '<h1 class="entry-title" itemprop="headline"><b>', ''); ?> </b> | <span><?php echo the_field('expert_network_mock_modal') ?></span></h1>
					<h5>Last year's rank: <?php echo the_field('last_year_rank')?></h5>
				</div>
				<div class="right">
					<div class="title">2018 <span>Mock Draft</span></div>
					<div class="updated">Updated: <?php echo the_field('mock_light_box_updated')?></div>
				</div>
				<div class="clearfix"></div>
			</header><!-- .entry-header -->
		<?php endif; ?>
		
		<?php do_action( 'generate_after_entry_header'); ?>
		<div class="entry-content" itemprop="text">
			<?php the_content(); ?>
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'generatepress' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
		<?php do_action( 'generate_after_content'); ?>
	</div><!-- .inside-article -->
</article><!-- #post-## -->
