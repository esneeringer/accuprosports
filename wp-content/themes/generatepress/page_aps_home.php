<?php
/**
 * Template Name: APS Home Page
 *
 * @package GeneratePress
 */
 
// No direct access, please
if (! defined( 'ABSPATH' )) {
    exit;
}

    get_header(); ?>
    
        <!-- Countdown Clock -->
 
        <div id="clockdiv">
            <div>
            Countdown to NFL Draft: 
            </div>
            <div>
                <span class="days"></span>
                <div class="smalltext">Days</div>
            </div>
            <div>
                <span class="hours"></span>
                <div class="smalltext">Hours</div>
            </div>
            <div>
                <span class="minutes"></span>
                <div class="smalltext">Minutes</div>
            </div>
            <div>
                <span class="seconds"></span>
                <div class="smalltext">Seconds</div>
            </div>
        </div>


<script>
function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 163 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);
</script>

    </div>
    
    <!-- Welcome Box -->
    <div class="welcome-box">
        <h1>WELCOME<h1>
        <h2>Big, bold, opening introductory statement for AccuProSports will go right here. This statement may end up being a few lines and will look like this. Ficti doluptatus ilis maximi, omnis et verum etur? Qui con corenditiis.</h2>
    </div>
    


    <div class="flex-rectangle-home">
    <!--<a href="aps/mocks"><div class="flex-square-home-left">Latest Mocks</div></a>-->
        <button href="aps/mocks" class="flex-square-home-left">Latest Mocks</button>
        <button href="aps/grades" class="flex-square-home-right">Grades</button>
        <button href="aps/about" class="flex-square-home-center">About</button>
    </div>
    <hr>
    <div class="trending-box">
        <h3>Trending</h3>
        <ul>
            <li>Lorem ipsum dolor sit amet</li> 
            <li>consectetur adipiscing elit,</li> 
            <li>sed do eiusmod tempor incididunt </li>
        </ul>
    </div>
    <hr>
    
    <div id="primary" <?php generate_content_class();?>>
        <main id="main" <?php generate_main_class(); ?>>
        <?php do_action('generate_before_main_content'); ?>
        <?php while (have_posts()) :
            the_post(); ?>

            <?php get_template_part( 'content', 'single' ); ?>

            <?php
                // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || '0' != get_comments_number()) : ?>
                    <div class="comments-area">
                        <?php comments_template(); ?>
                    </div>
            <?php                                                                                                                                                                                                                                                                                                                                         endif; ?>

        <?php endwhile; // end of the loop. ?>
        <?php do_action('generate_after_main_content'); ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
do_action('generate_sidebars');
get_footer();
