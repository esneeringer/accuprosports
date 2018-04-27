<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package GeneratePress
 */
 
// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

$rank_count = do_shortcode("[table-info id=3 field=number_rows format=raw/]");
$rank_count = $rank_count;

$table_array = array();

for($i=1; $i<=$rank_count; $i++){
	$table_array[$i] = do_shortcode("[table-cell id=3 cell=B" . $i . "/]");
}

array_shift($table_array);

// PHP to get next/previous pages
$pagelist = get_pages("child_of=".$post->post_parent."&parent=".$post->post_parent."&sort_column=menu_order&sort_order=asc");
$pages = array();
foreach ($pagelist as $page) {
   $pages[] += $page->ID;
}

$current = array_search($post->ID, $pages);
$prevID = $pages[$current-1];
$nextID = $pages[$current+1];

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php generate_article_schema( 'CreativeWork' ); ?>>
<div id="scorcard-modal">	
<div class="inside-article">

		<?php do_action( 'generate_before_content'); ?>
		
		<?php if ( generate_show_title() ) : ?>
			<header class="entry-header">
				<div class="left">
					<?php the_title( '<h1 class="entry-title scorecard-title" itemprop="headline"><b>', '' );  ?> </b> | <span><?php echo the_field('expert_network_scorecard_modal') ?></span></h1>
					<h5>Overall rank: <?php echo the_field('overall_rank_scorecard') ?></h5>
				</div>
				<div class="right">
					<div class="title"><?php echo the_field('scorecard_light_box_year') ?> <span>Scorecard</span></div>
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
			</div>


</article><!-- #post-## -->
