<?php
/**
 * Template name: Бриф
 * @package SpasiboAvrora
 *
 */

get_header(); ?>


  <div class="this_page">

    <div class="page-content page-content_top-80">
      <?php //the_post(); ?>
      <?php //the_content(); ?>
    </div>

    <div class="row row-fluid">
      <div class="page-content page-content_top-40">
        <?php the_post(); ?>
        <?php the_content(); ?>

        <?php echo do_shortcode('[contact-form-7 id="27" html_class="b-form-brif" title="Бриф"]'); ?>
      </div>
    </div>

  </div>

<?php get_footer(); ?>
