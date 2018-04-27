<?php
/**
 * Template Name: APS Grades Main Template
 *
 * @package GeneratePress
 */

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;
get_header('grades'); ?>

                <div class="grades-sub-text-header">
                    <p><?php echo the_field('grades_sub_text') ?></p>
                </div>  
                <div class="grades-year-select-drop">
                    <select id="year-select">
                        <option value="2017">Year: 2017  &#9660;</option>
                        <option value="2016">Year: 2016  &#9660;</option>
                        <option value="2015">Year: 2015  &#9660;</option>
                    </select>
                </div>

<div id="primary" <?php generate_content_class();?>>
    <main id="main" <?php generate_main_class(); ?>>
        <div id="main-grades">
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
        <div>
    </main><!-- #main -->
    <script>

    jQuery(document).ready(function ($) {

        /*show only 2017 table on load*/
        $('#tablepress-3').show();
        $('#tablepress-78').hide();
        $('#tablepress-77').hide();
        
        /*on change, show correct year*/
        $('select').on('change', function() {   
            if(this.value === '2015'){
                $('#tablepress-3').hide();
                $('#tablepress-78').show();
                $('#tablepress-77').hide();
            }

            if(this.value === '2016'){
                $('#tablepress-3').hide();
                $('#tablepress-78').hide();
                $('#tablepress-77').show();
            }

            if(this.value === '2017'){
                $('#tablepress-3').show();
                $('#tablepress-78').hide();
                $('#tablepress-77').hide();
            }
        });

            $('#tablepress-3 .column-2').each(function (i) {
                if(i > 0){
                    var currentAnalyst = $(this).text().replace(/\s+/g, "-").toLowerCase();
                    $(this).wrapInner("<a href='http://accuprosports.com/aps/" + currentAnalyst + "-scorecard 'data-featherlight='iframe'></a>");
                }
            });

            $('#tablepress-77 .column-2').each(function (i) {
                if(i > 0){
                    var currentAnalyst = $(this).text().replace(/\s+/g, "-").toLowerCase();
                    $(this).wrapInner("<a href='http://accuprosports.com/aps/" + currentAnalyst + "-scorecard-2016 'data-featherlight='iframe'></a>");
                }
            });

            $('#tablepress-78 .column-2').each(function (i) {
                if(i > 0){
                    var currentAnalyst = $(this).text().replace(/\s+/g, "-").toLowerCase();
                    $(this).wrapInner("<a href='http://accuprosports.com/aps/" + currentAnalyst + "-scorecard-2015 'data-featherlight='iframe'></a>");
                }
            });
    });


    </script>
</div><!-- #primary -->
<?php
get_footer('grades');

