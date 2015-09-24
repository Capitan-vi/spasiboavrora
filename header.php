<?php
/**
 * @package SpasiboAvrora
 */
?>

<!DOCTYPE html>

<html lang="ru-RU">
<head>
  <meta charset="utf-8">
  <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto%3A400%2C700%2C500&#038;ver=1429600057' type='text/css' media='all' />
  <link rel='stylesheet' href='<?php bloginfo("template_directory"); ?>/assets/bootstrap/bootstrap.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css?ver=4.2.0' type='text/css' media='all' />
  <link rel='stylesheet' href='<?php bloginfo("template_directory"); ?>/assets/FlexSlider/flexslider.css?ver=1' type='text/css' media='all' />
  <link rel='stylesheet' href='<?php bloginfo("template_directory"); ?>/assets/css/main_style.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='<?php bloginfo("template_directory"); ?>/assets/css/options.css' type='text/css' media='all'/>

  <!-- __Перезаписываемые стили -->
  <link rel='stylesheet' href='<?php bloginfo("template_directory"); ?>/assets/css/overwrite.css' type='text/css' media='all'/>

  <?php wp_head(); ?>
</head>

<body>
<div class="oi_container_holder">
    <div class="row">
  <div class="oi_head_holder clearfix">
      <div class="col-lg-5 col-md-4 col-sm-4 io_xs">
        <a class="b-header-logotype" href="<?php echo get_site_url(); ?>">
          <img class="b-header-logotype__img" src="<?php the_field('options__header-logotype', 'options'); ?>" alt="Логотип «СпасибоАврора»"></a>
      </div>

      <div class="col-lg-7 col-md-8 col-sm-8 io_xs">
        <!-- <i class="fa fa-bars fa-2x visible-xs oi_xs_menu"></i> -->

        <div class="b-header-top-slogan">
          <?php the_field('options__header-slogan', 'options'); ?>
        </div>

        <div class="menu-general-menu-container">
          <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => 'nav',
            'container_class' => 'clearfix',
            'items_wrap' => '<ul id="menu-general-menu" class="oi_header_menu">%3$s</ul>'
          ) ); ?>
        </div>
        <div class="b-header-tel">
          <a
            class="b-header-tel__link"
            href="tel:<?php the_field('options__header-phone-link', 'options'); ?>">
              <?php the_field('options__header-phone', 'options'); ?></a>
        </div>

      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <!-- Header -->
