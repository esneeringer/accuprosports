<?php
/**
 * Template Name: APS Mock Draft Main Template
 *
 * @package GeneratePress
 */

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;
get_header('mock'); ?>

<div id="primary" <?php generate_content_class();?>>
<main id="main" <?php generate_main_class(); ?>>
    <?php do_action('generate_before_main_content'); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <p class="mock-sub-optional"><?php echo the_field('optional_mock_sub_header') ?></p>
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
<script>

jQuery(document).ready(function ($) {
    $('.column-1').each(function (i) {
        if(i > 0){
            var currentAnalyst = $(this).text().replace(/\s+/g, "-").toLowerCase();
            $(this).wrapInner("<a href='http://accuprosports.com/aps/" + currentAnalyst + "-mock 'data-featherlight='iframe'></a>");
        }
    });
});

    </script>
</div><!-- #primary -->
<?php
get_footer();

