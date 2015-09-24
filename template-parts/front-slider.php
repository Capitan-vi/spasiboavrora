<div class="flexslider mb0" id="port_slider">
  <ul class="slides">
    <?php if( get_field('options__repeater-slider', 'options') ):
      while( has_sub_field('options__repeater-slider', 'options') ): ?>

        <li><img src="<?php the_sub_field('options__front-slider-img', 'options'); ?>" alt="" draggable="false"></li>

    <?php endwhile; endif; ?>
  </ul>
</div>
