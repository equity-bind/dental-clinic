<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title><?php bloginfo('title') ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="keywords" content="キーワード名を入れる" />
  <meta name=”robots" content=”noindex" />
  <!-- ogp -->
  <meta property="og:title" content="トップページタイトル" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="urlアドレスを入れる" />
  <meta property="og:image" content="メインビュー画像パスを入れる" />
  <meta property="og:site_name" content="サイト名を入れる" />
  <meta property="og:description" content="サイトの説明文を入れる" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php
  $home = esc_url(home_url('/'));
  $info = esc_url(home_url('/info/'));
  ?>

  <header class="p-header l-header js-header">
    <div class="p-header__container">
      <h1 class="p-header__logo">
        <a href="#" class="p-header__logo-link js-header-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/logo.svg" alt="みなみ歯科クリニックのロゴ" />
        </a>
      </h1>
      <div class="p-header__hamburger c-hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="p-header__sp-nav p-sp-nav js-drawer-menu">
        <ul class="p-sp-nav__items">
          <li class="p-sp-nav__item">
            <a href="<?php $home ?>">
              <div class="p-sp-nav__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/home-sp.svg" alt="">
              </div>
              <p class="p-sp-nav__text">ホーム</p>
            </a>
          </li>
          <li class="p-sp-nav__item">
            <a href="<?php $about ?>">
              <div class="p-sp-nav__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/about-sp.svg" alt="">
              </div>
              <p class="p-sp-nav__text">当院について</p>
            </a>
          </li>
          <li class="p-sp-nav__item">
            <a href="<?php $info ?>">
              <div class="p-sp-nav__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/information-sp.svg" alt="">
              </div>
              <p class="p-sp-nav__text">診療案内</p>
            </a>
          </li>
          <li class="p-sp-nav__item">
            <a href="<?php $intro ?>">
              <div class="p-sp-nav__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/introduction-sp.svg" alt="">
              </div>
              <p class="p-sp-nav__text">スタッフ紹介</p>
            </a>
          </li>
          <li class="p-sp-nav__item">
            <a href="<?php $blog ?>">
              <div class="p-sp-nav__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/blog-sp.svg" alt="">
              </div>
              <p class="p-sp-nav__text">スタッフブログ</p>
            </a>
          </li>
          <li class="p-sp-nav__item">
            <a href="<?php $contact ?>">
              <div class="p-sp-nav__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/contact-sp.svg" alt="">
              </div>
              <p class="p-sp-nav__text">お問い合わせ</p>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="p-header__pc-nav p-pc-nav">
        <ul class="p-pc-nav__items">
          <li class="p-pc-nav__item">
            <a href="<?php $home ?>" class="is-active">
              <div class="p-pc-nav__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/home-active.svg" alt="">
              </div>
              <p class="p-pc-nav__text">ホーム</p>
            </a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php $about ?>">
              <div class="p-pc-nav__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/about.svg" alt="">
              </div>
              <p class="p-pc-nav__text">当院について</p>
            </a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php $info ?>">
              <div class="p-pc-nav__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/information.svg" alt="">
              </div>
              <p class="p-pc-nav__text">診療案内</p>
            </a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php $intro ?>">
              <div class="p-pc-nav__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/introduction.svg" alt="">
              </div>
              <p class="p-pc-nav__text">スタッフ紹介</p>
            </a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php $blog ?>">
              <div class="p-pc-nav__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/blog.svg" alt="">
              </div>
              <p class="p-pc-nav__text">スタッフブログ</p>
            </a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php $contact ?>">
              <div class="p-pc-nav__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/contact.svg" alt="">
              </div>
              <p class="p-pc-nav__text">お問い合わせ</p>
            </a>
          </li>
        </ul>
      </nav>
      <div class="p-header__address-wrapper u-desktop">
        <p class="p-header__address">〒166-0001 東京都杉並区阿佐谷北7-3-1</p>
        <p class="p-header__tell-number">03-1234-5678</p>
      </div>
    </div>
  </header>
