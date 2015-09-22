<?php
/**
 * Template name: Бриф
 * @package SpasiboAvrora
 *
 */

get_header(); ?>


  <div class="this_page">

    <div class="row row-fluid">
        <?php get_template_part('template-parts/front-slider'); ?>
    </div>

    <div class="row row-fluid">
      <div class="page-content">
        <?php the_post(); ?>
        <?php the_content(); ?>

        <?php echo do_shortcode('[contact-form-7 id="27" html_class="b-form-brif" title="Бриф"]'); ?>
      </div>
    </div>

  </div>

<?php get_footer(); ?>
