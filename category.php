<?php
// controls the categories page
get_header(); ?>


  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    // WP Loop to display content, if there is any.
  ?>

    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>

  <?php endwhile; endif; ?>


<?php get_footer(); ?>