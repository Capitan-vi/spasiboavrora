<?php get_header(); ?>

  <!-- Content -->
  <section class="page_holder">
    <div class="this_page">
      <div class="row row-fluid">
        <div class="col-sm-12">
           <div class="flexslider mb0" id="port_slider">
            <ul class="slides">
              <li><img src="<?php bloginfo("template_directory"); ?>/assets/images/front-slider_slide1.jpg" alt="" draggable="false"></li>
              <li><img src="<?php bloginfo("template_directory"); ?>/images/m1.jpg" alt="" draggable="false"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- __Делаем отличные логотипы -->
    <div class="row row-fluid mt120">
      <div class="container">
        <div class="col-sm-12">
          <div class="b-about-intro">
            <h1 class="b-about-intro__heading text-center">Мы делаем отличные логотипы</h1>
            <h6 class="b-about-intro__text text-center">для индивидуальных предпринимателей,небольших проектов, некоммерческих организаций и мероприятий по фиксированной цене 4000 р. или бесплатно</h6>
          </div>
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

    <div class="container"> </div>

    <!-- __Блок с сотрудниками -->
    <div class="row row-fluid">
      <div class="b-team">
        <div class="container">

          <?php query_posts('post_type=team-member'); ?>
            <?php while ( have_posts() ): the_post(); ?>

                <div class="col-md-2">
                  <section class="b-team-member">
                    <div class="b-team-member__photo">
                      <img class="b-team-member__img" src="<?php the_field('team-member_photo'); ?>" alt="Фото сотрудника">
                    </div>
                    <div class="b-team-member__about">
                      <h4 class="b-team-member__name"><?php the_title(); ?></h4>
                      <span class="b-team-member__caption"><?php the_field('team-member_name'); ?></span>
                    </div>
                  </section>
                </div>

            <?php endwhile; ?>
          <?php wp_reset_query(); ?>

        </div>
      </div>
    </div>

    <div class="container"> </div>

    <!-- __Вы заказываете логотип за 4000р. -->
    <div class="row row-fluid">
      <div class="b-order-logotype">
        <div class="container">

          <div class="b-order-logotype__head">
            <h2 class="b-order-logotype__heading">Вы заказываете логотип за 4000 р.</h2>
            <div class="b-order-logotype__caption">и получаете полный дизайн-проект для старта вашего бизнеса куда входят следующие 6 позиций:</div>
          </div>

          <div class="b-order-logotype__options">
            <div class="b-order-logotype__option-row">
              <div class="b-order-logotype__option-left"><span class="b-order-logotype__option-left-text">ВАШ ЛОГОТИП в векторном и растровом формате</span></div>
            </div>

            <div class="b-order-logotype__option-row">
              <div class="b-order-logotype__option-left"><span class="b-order-logotype__option-left-text">ЛОГОБУК в векторном формате</span></div>
            </div>

            <div class="b-order-logotype__option-row">
              <div class="b-order-logotype__option-left"><span class="b-order-logotype__option-left-text">ОФОРМЛЕНИЕ СОЦ.СЕТЕЙ (vk/fb/instagram) в растре</span></div>
            </div>

            <div class="b-order-logotype__option-row">
              <div class="b-order-logotype__option-left"><span class="b-order-logotype__option-left-text">ЦВЕТОВАЯ КАРТА с указанием цветов в системе HEX</span></div>
            </div>

            <div class="b-order-logotype__option-row">
              <div class="b-order-logotype__option-left"><span class="b-order-logotype__option-left-text">ПОДБОР ШРИФТОВ готовых для использовани</span></div>
            </div>

            <div class="b-order-logotype__button">
              Оформить заказ
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container"> </div>

    <!-- __Нам говорят "спасибо" -->
    <div class="row row-fluid">
      <div class="b-reviews">
        <div class="b-reviews__head">
          <h2 class="b-reviews__heading">Нам говорят спасибо</h2>
          <div class="b-reviews__intro-text">множество хороших людей оставляют свои позитивные отзывы в соц. сетях с тэгом #spasiboavrora, это единственная реклама нашего проекта</div>
        </div>

        <div class="row row-fluid">
          <div class="b-reviews__items">

            <?php query_posts('post_type=review'); ?>
              <?php while ( have_posts() ): the_post(); ?>

              <div class="col-md-6">
              <div class="b-review-item clearfix">
                <div class="b-review-item__photo">
                  <img src="<?php the_field('review_autor_photo'); ?>" alt="" class="b-review-item__img">
                </div>

                <div class="b-review-item__content">
                  <div class="b-review-item__name-desk">
                    <div class="b-review-item__name"><?php the_title(); ?></div>
                    <div class="b-review-item__desk"><?php the_field('review_autor_caption'); ?></div>
                  </div>

                  <div class="b-review-item__text">
                    <?php the_field('review_text'); ?>
                  </div>
                </div>
              </div>
              </div>

              <?php endwhile; ?>
            <?php wp_reset_query(); ?>


          </div>
        </div>


      </div>
    </div>

    <div class="container"> </div>

    <!-- __ВЫ МОЖЕТЕ  ЛЕГКО СВЯЗАТЬСЯ С НАМИ -->
    <div class="row row-fluid">
      <div class="b-contacts-front-page">

        <div class="b-contacts-front-page__head">
          <h2 class="b-contacts-front-page__heading">Вы можете легко связаться с нами</h2>
          <div class="b-contacts-front-page__intro-text">
            в соц.сетях, позвонив по телефону или оставив вопрос и контакты для обратной связи
          </div>
        </div>

        <div class="row row-fluid">
          <div class="col-md-6">
              <ul class="b-contacts-front-page__list">
                <li class="b-contacts-front-page__list-item">
                  <a href="tel:+79112394587" class="b-contacts-front-page__item-link">+7 911 239 45 87</a></li>
                <li class="b-contacts-front-page__list-item">
                  <a href="mailto:spasiboavrora@gmail.com" class="b-contacts-front-page__item-link b-contacts-front-page__item-link_underline">spasiboavrora@gmail.com</a></li>
                <li class="b-contacts-front-page__list-item">
                  <a href="vk.com/spasiboavrora" class="b-contacts-front-page__item-link b-contacts-front-page__item-link_underline">vk.com/spasiboavrora</a></li>
              </ul>
          </div>

          <div class="col-md-6">
            <?php echo do_shortcode('[contact-form-7 id="26" title="Форма обратной связи" html_class="b-feedback-form"]'); ?>
          </div>
        </div>

      </div>
    </div>

  </section>
  <!-- Content -->

<?php get_footer(); ?>
