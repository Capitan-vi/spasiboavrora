<!DOCTYPE html>

<html lang="ru-RU">
<head>
  <meta charset="utf-8">
  <title><?php the_title(); ?></title>
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

  <!-- __заменить -->
  <link rel="shortcut icon" href="<?php bloginfo("template_directory"); ?>/assets/images/favicon.ico">
</head>

<body>
  <!-- Content Area -->
<div class="oi_container_holder">
  <div class="oi_head_holder">
    <div class="row">
      <div class="col-md-3 col-sm-3 io_xs">
        <a href="<?php get_site_url(); ?>"><img src="<?php bloginfo("template_directory"); ?>/assets/images/logotype-avrora.png" alt="Rockfolio &#8211; Premium Portfolio &amp; Agency HTML Template"></a>
      </div>
      <div class="col-md-9 col-sm-9 io_xs">
        <i class="fa fa-bars fa-2x visible-xs oi_xs_menu"></i>
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
  <!-- Content -->
  <section class="page_holder">
    <div class="this_page">
      <div class="row row-fluid">
        <div class="col-sm-12">
           <div class="flexslider mb0" id="port_slider">
            <ul class="slides">
              <li><img src="<?php bloginfo("template_directory"); ?>/images/m1.jpg" alt="" draggable="false"></li>
              <li><img src="<?php bloginfo("template_directory"); ?>/images/m2.jpg" alt="" draggable="false"></li>
              <li><img src="<?php bloginfo("template_directory"); ?>/images/m3.jpg" alt="" draggable="false"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-fluid mt120">
      <div class="container">
        <div class="col-sm-12">
          <h1 class="text-center">C O M P A N Y</h1>
          <h6 class="text-center">Over <strong class="colored">40,000</strong> customers use our themes<br>
           to power their websites.</h6>
        </div>
      </div>
    </div>
    <div class="container"></div>
    <div class="row row-fluid mb120m60">
      <div class="container">
        <div class="col-sm-4">
          <div class="oi_vc_present">
            <div class="oi_vc_text_span">
              <h6 class="oi_present_sub_titile colored">Who</h6>
              <h4 class="oi_present_titile">WE ARE</h4>
              <span class="oi_present_descr">Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="oi_vc_present">
            <div class="oi_vc_text_span">
              <h6 class="oi_present_sub_titile colored">Our</h6>
              <h4 class="oi_present_titile">APPROACH</h4>
              <span class="oi_present_descr">Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="oi_vc_present">
            <div class="oi_vc_text_span">
              <h6 class="oi_present_sub_titile colored">Why</h6>
              <h4 class="oi_present_titile">CHOOSE US</h4>
              <span class="oi_present_descr">Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container"></div>
    <div class="row row-fluid bg_img1 full_row">
      <div class="container">
        <div class="col-sm-12">
          <div class="mb35">
            <h1 class="text-center">S E R V I C E S</h1>
            <h6 class="text-center">Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam.</h6>
          </div>
          <div class="row row-fluid">
            <div class="col-sm-5">
              <div class="oi_vc_icon">
                <span class="fa fa-fw fa-3x colored fa-codepen"></span>
                <div class="oi_vc_text_span">
                  <h5 class="oi_icon_titile ">WEB DEVELOPMENT</h5>
                  <span>Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar</span>
                </div>
              </div>
              <div class="oi_vc_icon">
                <span class="fa fa-fw fa-3x colored fa-angellist"></span>
                <div class="oi_vc_text_span">
                  <h5 class="oi_icon_titile ">SEO OPTIMISATION</h5>
                  <span>Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar</span>
                </div>
              </div>
              <div class="oi_vc_icon">
                <span class="fa fa-fw fa-3x colored fa-paper-plane-o"></span>
                <div class="oi_vc_text_span">
                  <h5 class="oi_icon_titile ">BRANDING &amp; IDENTITY</h5>
                  <span>Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit.</span>
                </div>
              </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5">
              <div class="oi_vc_icon">
                <span class="fa fa-fw fa-3x colored fa-paper-plane-o"></span>
                <div class="oi_vc_text_span">
                  <h5 class="oi_icon_titile ">BRANDING &amp; IDENTITY</h5>
                  <span>Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit.</span>
                </div>
              </div>
              <div class="oi_vc_icon">
                <span class="fa fa-fw fa-3x colored fa-angellist"></span>
                <div class="oi_vc_text_span">
                  <h5 class="oi_icon_titile ">SEO OPTIMISATION</h5>
                  <span>Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar</span>
                </div>
              </div>
              <div class="oi_vc_icon">
                <span class="fa fa-fw fa-3x colored fa-codepen"></span>
                <div class="oi_vc_text_span">
                  <h5 class="oi_icon_titile ">WEB DEVELOPMENT</h5>
                  <span>Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container"></div>
    <div class="row row-fluid mt120 full_row">
      <div class="container">
        <div class="col-sm-4">
          <div class="oi_vc_potrfolio oi_x2 bg_ceron">
            <a class="oi_vc_port_mask bg_cdb48c" href="ceron.html">
            <div class="oi_vc_text_span text-center">
              <h3 class="oi_sub_legend text_fff">Ceron</h3>
              <div class="oi_vc_port_cat text_fff">
                Motion, Print
              </div>
              <div class="oi_vc_sep bg_fff"></div>
            </div>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="oi_vc_potrfolio oi_x2 bg_washboard">
            <a class="oi_vc_port_mask bg_77cfd0" href="washboard.html">
            <div class="oi_vc_text_span text-center">
              <h3 class="oi_sub_legend text_fff">Washboard</h3>
              <div class="oi_vc_port_cat text_fff">
                Illustration
              </div>
              <div class="oi_vc_sep bg_fff"></div>
            </div>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="oi_vc_potrfolio oi_x2 bg_flight">
            <a class="oi_vc_port_mask bg_cdbf90" href="flight-to-the-flats.html">
            <div class="oi_vc_text_span text-center">
              <h3 class="oi_sub_legend text_000">Flight To The Flats</h3>
              <div class="oi_vc_port_cat text_000">
                Presentaion
              </div>
              <div class="oi_vc_sep bg_000"></div>
            </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container"></div>
    <div class="row row-fluid full_row bg_img">
      <div class="container">
        <div class="col-sm-12">
          <div class="mb60">
            <h1 class="text-center">CLIENTS / PARTNERS</h1>
            <h6 class="text-center">We love them all</h6>
          </div>
        </div>
        <div class="col-sm-2">
          <img src="<?php bloginfo("template_directory"); ?>/images/l5.png" class="img-responsive" alt="l5">
        </div>
        <div class="col-sm-2">
          <img src="<?php bloginfo("template_directory"); ?>/images/l3.png" class="img-responsive" alt="l3">
        </div>
        <div class="col-sm-2">
          <img src="<?php bloginfo("template_directory"); ?>/images/l1.png" class="img-responsive" alt="l1">
        </div>
        <div class="col-sm-2">
          <img src="<?php bloginfo("template_directory"); ?>/images/l2.png" class="img-responsive" alt="l2">
        </div>
        <div class="col-sm-2">
          <img src="<?php bloginfo("template_directory"); ?>/images/l4.png" class="img-responsive" alt="l4">
        </div>
        <div class="col-sm-2">
          <img src="<?php bloginfo("template_directory"); ?>/images/l6.png" class="img-responsive" alt="l6">
        </div>
      </div>
    </div>
  </section>
  <!-- Content -->
  <!-- Footer Area -->
  <div class="oi_footer">
    <div class="row">
      <div class="col-md-6 oi_foot_left">
         Copyright © 2015. Design by <a href="http://themeforest.net/user/OrangeIdea/portfolio?ref=FoxSash" target="_blank">OrangeIdea</a>. Coding by <a href="http://themeforest.net/user/FoxSash/portfolio?ref=FoxSash" target="_blank">FoxSash</a>
      </div>
      <div class="col-md-6 oi_foot_right">
         <!-- social block-->
         <div class="oi_soc_icons">
          <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter fa-fw"></i></a>
          <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook fa-fw"></i></a>
          <a href="#" title="Google+" target="_blank"><i class="fa fa-google-plus fa-fw"></i></a>
          <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest-p fa-fw"></i></a>
          <a href="#" title="LinkedIn" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a>
          <a href="#" title="Dribbble" target="_blank"><i class="fa fa-dribbble fa-fw"></i></a>
          <a href="#" title="YouTube" target="_blank"><i class="fa fa-youtube fa-fw"></i></a>
        </div>
         <!-- social block-->
      </div>
    </div>
  </div>
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
</body>
</html>
