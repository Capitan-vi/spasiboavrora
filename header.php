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

  <!-- __заменить -->
  <link rel="shortcut icon" href="<?php bloginfo("template_directory"); ?>/assets/images/favicon.ico">
  <?php wp_head(); ?>
</head>

<body>
<div class="oi_container_holder">
  <div class="oi_head_holder">
    <div class="row">
      <div class="col-md-6 col-sm-6 io_xs">
        <a href="<?php get_site_url(); ?>"><img src="<?php bloginfo("template_directory"); ?>/assets/images/logotype-avrora.png" alt="Логотип «СпасибоАврора»"></a>
      </div>

      <div class="col-md-6 col-sm-6 io_xs">
        <i class="fa fa-bars fa-2x visible-xs oi_xs_menu"></i>

        <div class="b-header-top-slogan">
          МЫ ДЕЛАЕМ ЛОГОТИПЫ ПО НИЗКОЙ ЦЕНЕ <strong>4000 Р.</strong> ИЛИ <strong>БЕСПЛАТНО</strong>
        </div>

        <div class="b-header-tel">
          <a class="b-header-tel__link" href="tel:+79112394587">+7 - 911 - 239-45-87</a>
        </div>
        <div class="menu-general-menu-container">
          <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => 'nav',
            'items_wrap' => '<ul id="menu-general-menu" class="oi_header_menu">%3$s</ul>'
          ) ); ?>
        </div>

      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <!-- Header -->
