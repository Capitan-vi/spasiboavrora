<?php get_header(); ?>

  <!-- Content -->
  <div class="this_page">
    <div class="row row-fluid">
        <?php get_template_part('template-parts/front-slider'); ?>
    </div>
  </div>



  <!-- __Делаем отличные логотипы -->
  <div class="row row-fluid">
    <div class="page-content page-content_white" id="about-project">
      <?php the_post(); ?>
      <?php the_content(); ?>
    </div>
  </div>

  <!-- __Блок с сотрудниками -->
  <div class="row row-fluid">
    <div class="content-wrap b-team top-trangled top-trangled_grey-light clearfix">

        <?php query_posts('post_type=team-member'); ?>
          <?php while ( have_posts() ): the_post(); ?>

              <div class="col-md-2 col-sm-4 col-xs-6">
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

  <div class="container"> </div>

  <!-- __Вы заказываете логотип за 4000р. -->
  <div class="row row-fluid">
    <div class="b-order-logotype" id="to-order">

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

          <a class="b-order-logotype__link" href="<?php the_field('options__order-link', 'options'); ?>">Оформить заказ</a>
        </div>

    </div>
  </div>

  <div class="container"> </div>

  <!-- __Нам говорят "спасибо" -->
  <div class="row row-fluid">
    <div class="b-reviews content-wrap content-wrap_b-reviews top-trangled top-trangled_grey-light" id="reviews">
      <div class="b-reviews__head">
        <h2 class="b-reviews__heading">Нам говорят спасибо</h2>
        <div class="b-reviews__intro-text">множество хороших людей оставляют свои позитивные отзывы в соц. сетях с тэгом #spasiboavrora, это единственная реклама нашего проекта</div>
      </div>

      <div class="row row-fluid">
        <div class="b-reviews__items clearfix">

          <?php query_posts('post_type=review'); ?>
            <?php while ( have_posts() ): the_post(); ?>

            <div class="col-md-6 col-sm-6">
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
    <div class="b-contacts-front-page top-trangled top-trangled_green" id="contacts">

      <div class="b-contacts-front-page__head">
        <h2 class="b-contacts-front-page__heading">Вы можете легко связаться с нами</h2>
        <div class="b-contacts-front-page__intro-text">
          в соц.сетях, позвонив по телефону или оставив вопрос и контакты для обратной связи
        </div>
      </div>

      <div class="row row-fluid">
        <div class="col-md-6">
          <div class="b-contacts-front-page__links">
            <ul class="b-contacts-front-page__list">
              <?php
                if( get_field('options__repeater-connect-links', 'options') ):
                while( has_sub_field('options__repeater-connect-links', 'options') ): ?>

                  <li class="b-contacts-front-page__list-item">
                    <a href="<?php the_sub_field('options__con-link-addr', 'options'); ?>" class="b-contacts-front-page__item-link b-contacts-front-page__item-link_underline"><?php the_sub_field('options__con-link-text', 'options'); ?></a></li>

              <?php endwhile; endif; ?>
            </ul>
          </div>
        </div>

        <div class="col-md-6">
          <?php echo do_shortcode('[contact-form-7 id="26" title="Форма обратной связи" html_class="b-feedback-form"]'); ?>
        </div>
      </div>

    </div>
  </div>

  <!-- Content -->

<?php get_footer(); ?>
