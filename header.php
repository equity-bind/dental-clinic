<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta name="format-detection" content="telephone=no" />
<!-- meta情報 -->
<title><?php bloginfo( 'title' ) ?></title>
<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
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
home = esc_url( home_url( '/' ) );
info = esc_url( home_url( '/info/' ) );
?>
