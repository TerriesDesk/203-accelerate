<?php
/**
  * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<div id="primary" class="home-page hero-content">
  <div class="site-content about-header-cont">
    <h2 class="about-header">Accelerate is a strategy and mareting agency located in the heart of NYC.  Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
  </div>
</div><!-- #primary -->

<div class="site-content about-top">
  <?php while ( have_posts() ) : the_post(); ?>
  <h2>Our Services</h2>
  <?php the_content(); ?>
<?php endwhile; // end of the loop. ?>
</div>



<div id="primary" class="site-content">
	<div class="main-content" role="main">
  <?php query_posts('post_type=services'); ?>
		<?php while ( have_posts() ) : the_post();
      $icon = get_field('service_icon');
      $size = "";
    ?>
   <article class="about-page-article">

     <div class="about-page-article-content">
      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
    </div>

    <figure class="about-page-article-image">
      <?php if($icon) {
         echo wp_get_attachment_image($icon, $size);
       } ?>
    </figure>
   </article>
  <?php endwhile; // end of the loop. ?>
  <?php wp_reset_query(); ?>
  <br />
  <div class="cta">
    <h2>Interested in working with us?</h2>
    <a class="button" href="<?php echo site_url('/contact-us') ?>">Contact Us</a>

  </div>

</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>
