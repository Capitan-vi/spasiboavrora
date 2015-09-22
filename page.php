<?php
/**
 * @package SpasiboAvrora
 */

get_header(); ?>

  <div class="this_page">
  <div class="row row-fluid">
    <div class="page-content">
      <?php the_post(); ?>
      <?php the_content(); ?>
    </div>
  </div>
  </div>

<?php get_footer(); ?>
