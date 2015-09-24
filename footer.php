<?php
/**
 * @package SpasiboAvrora
 */
?>
  <div class="row">
    <footer class="b-site-footer content-wrap top-trangled top-trangled_grey-dark">
      <?php the_field('options__footer-sloagan', 'options'); ?>

      <div class="b-producer-caption">
        Сделано в <a href="http://astralite.pro/" class="b-producer-caption__link">Astralite</a> 2015
      </div>
    </footer>
  </div>


  <script src="<?php bloginfo("template_directory"); ?>/assets/js/jquery-1.11.2.min.js"></script>
  <script src="<?php bloginfo("template_directory"); ?>/assets/bootstrap/bootstrap.min.js"></script>

  <script type='text/javascript' src='<?php bloginfo("template_directory"); ?>/assets/js/SmoothScroll.js'></script>
  <script type='text/javascript' src='<?php bloginfo("template_directory"); ?>/assets/js/lightbox.min.js'></script>
  <script type='text/javascript' src='<?php bloginfo("template_directory"); ?>/assets/FlexSlider/jquery.flexslider-min.js'></script>
  <script type='text/javascript' src='<?php bloginfo("template_directory"); ?>/assets/js/imagesloaded.js'></script>
  <script type='text/javascript' src='<?php bloginfo("template_directory"); ?>/assets/js/owl.carousel.min.js'></script>


  <script type='text/javascript' src='<?php bloginfo("template_directory"); ?>/assets/js/custom.js'></script>
  <!-- Footer Area -->

  <?php wp_footer(); ?>
</body>
</html>
