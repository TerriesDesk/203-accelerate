<?php
/**
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
get_header(); ?>

<div id="primary" class="site-content">
	<div class="main-content" role="main">
		<?php while ( have_posts() ) : the_post();
      $services = get_field('services');
      $image1 = get_field('image_1');
      $size = "full";
    ?>
   <article class="case-study">
     <aside class="case-study-sidebar">
       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
       <h4><span><?php echo $services; ?></span></h4>
       <?php the_excerpt(); ?>
       <p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project</a></p>
    </aside>
    <div class="case-study-images">
      <?php if($image1) {
        echo wp_get_attachment_image($image1, $size);
      } ?>
      </div>
    </article>
    <?php endwhile; // end of the loop. ?>
  </div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>
