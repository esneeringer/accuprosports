<?php
/**
 * Template Name: APS Scorecard Modal Template
 *
 * @package GeneratePress
 */

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;
get_header('modal'); ?>

<div id="primary" <?php generate_content_class();?>>
    <main id="main" <?php generate_main_class(); ?>>
        <?php do_action('generate_before_main_content'); ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'scorecard' ); ?>

        <?php endwhile; // end of the loop. ?>
        <?php do_action('generate_after_main_content'); ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer('modal');


