<?php get_header(); ?>
<?php

$home = esc_url(home_url('/'));
$about = esc_url(home_url('/about/'));
$info = esc_url(home_url('/info/'));
$intro = esc_url(home_url('/intro/'));
$blog = esc_url(home_url('/blog/'));
$contact = esc_url(home_url('/contact/'));

?>


<section class="p-mv l-inner" ontouchstart="">
  <div class="p-mv__container">
    <!-- Slider main container -->
    <div class="p-mv__swiper swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <picture class="p-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/top-01-pc.png" media="(min-width: 768px)" />
            <!-- 768px以上で表示する画像 -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-01-sp.png" alt="">
            <!-- それ以外の場合に表示する画像 -->
          </picture>
          <div class="p-mv__img">
          </div>
        </div>
        <div class="swiper-slide">
          <picture class="p-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/top-02-pc.png" media="(min-width: 768px)" />
            <!-- 768px以上で表示する画像 -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-02-sp.png" alt="">
            <!-- それ以外の場合に表示する画像 -->
          </picture>
        </div>
        <div class="swiper-slide">
          <picture class="p-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/top-03-pc.png" media="(min-width: 768px)" />
            <!-- 768px以上で表示する画像 -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-03-sp.png" alt="">
            <!-- それ以外の場合に表示する画像 -->
          </picture>
        </div>
      </div>
      <!-- If we need pagination -->
      <!-- If we need navigation buttons -->
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
    <div class="p-mv__web-reserve p-reserve">
      <div class="p-reserve__icon">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/icon-pc.svg" alt="">
      </div>
      <p class="p-reserve__text">WEB予約<br>はこちら</p>
    </div>
    <div class="p-mv__content">
      <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-text-sp.svg" alt="">
    </div>
  </div>
  <div class="p-mv__bottom-container">
    <div class="p-mv__medical-time">
      <img src="<?php echo get_template_directory_uri(); ?>/images/top/medical-time.png" alt="">
    </div>
    <div class="p-mv__news p-news">
      <div class="p-news__meta">
        <h2 class="p-news__title">お知らせ<span>news</span></h2>
        <a href="" class="p-news__previous-news">過去のお知らせはこちら</a>
      </div>
      <div class="p-news__block">
        <time class="p-news__date" datetime="2021-01-01">2021/01/01</time>
        <p class="p-news__text">年末年始の営業時間のお知らせ</p>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>
<section class="p-about l-about-top">
  <div class="p-about__sp-bg"></div>
  <div class="p-about__media p-media">
    <div class="p-media__body">
      <h2 class="p-media__title c-title">
        <span>concept</span>健康的で素敵な笑顔あふれる 街づくりを目指して
      </h2>
      <p class="p-media__text">
        私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br> お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
      </p>
      <div class="p-media__button">
        <a href="#" class="c-button">当院について</a>
      </div>
    </div>
    <div class="p-media__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/top/concept-img1.jpg" alt="画像紹介文" />
    </div>
  </div>
</section>
<section class="p-recommend l-recommend-top">
  <h2 class="p-recommend__title c-section-title"><span>当院の3つのおすすめ</span></h2>
  <div class="p-recommend__items">
    <div class="c-card p-recommend__item">
      <div class="c-card__title">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/recommend-title1.jpg" alt="">
      </div>
      <div class="c-card__img-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/recommend01.jpg" alt="" />
      </div>
      <div class="c-card__body">
        <p class="c-card__text">歯の治療において、小さな違和感は大きなストレスにつながります。 私たちは常に快適な歯科医療技術の研究を行っております。</p>
      </div>
    </div>
    <div class="c-card p-recommend__item">
      <div class="c-card__title">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/recommend-title2.jpg" alt="">
      </div>
      <div class="c-card__img-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/recommend02.jpg" alt="" />
      </div>
      <div class="c-card__body">
        <p class="c-card__text">「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
      </div>
    </div>
    <div class="c-card p-recommend__item">
      <div class="c-card__title">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/recommend-title3.jpg" alt="">
      </div>
      <div class="c-card__img-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/recommend03.jpg" alt="" />
      </div>
      <div class="c-card__body">
        <p class="c-card__text">朝から夜までお仕事をされている方のために、診療時間を見直しました。 <span>※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span></p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
