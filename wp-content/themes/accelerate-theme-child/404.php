<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php endwhile; // end of the loop. ?>
      <img src="twitter.png" />
      <div class="error-page-text">
          <h2> Whoops, Took a Wrong Turn...</h2>
          <p>Sorry, this page no longer exists, never existed, or has been moved.  We feel like complete jerks for totally misleading you.</p>
          <p>Feel free to take a look around our <a href="#"><span>blog<span></strong></a> or some of our featured <a href="#"><span>work</span></a>.</p>
        </div>

		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
