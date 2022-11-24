<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <title><?php bloginfo( 'title' ) ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <meta name="keywords" content="" />
    <meta name="robots" content="noindex">
    <!-- ogp -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="">
    <p class="c-test">aaa</p>
    <p class="p-test">bbb</p>
    <p class="l-test">ccc</p>
  </header>
