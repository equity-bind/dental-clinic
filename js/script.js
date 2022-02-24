jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  let topBtn = $(".pagetop");
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });

  let topHeight = $(".p-mv").outerHeight(true);
  // ヘッダー固定(ファーストビュー超えたら背景変える)
  $(window).scroll(function () {
    if ($(window).scrollTop() > topHeight) {
      $(".js-header").css("background-color", "rgba(255,255,255,1)");
      $(".p-header__link").addClass("is-scrolled");
      $(".pc-nav").css("color", "#000");
      $(".c-hamburger span").addClass("is-scrolled");
    } else {
      $(".js-header").css("background-color", "rgba(255,255,255,0)");
      $(".p-header__link").removeClass("is-scrolled");
      $(".pc-nav").css("color", "#fff");
      $(".c-hamburger span").removeClass("is-scrolled");
    }
  });
  //ドロワーメニュー
  $(".js-hamburger").on("click", function () {
    if ($(".js-hamburger").hasClass("is-open")) {
      // メニューボタンクリックでドロワー閉じる
      $(".js-drawer-menu").fadeOut();
      $(this).removeClass("is-open");
      $(".p-sub-header__link").removeClass("is-open");
    } else {
      // メニューボタンクリックでドロワー開く
      $(".js-drawer-menu").fadeIn();
      $(this).addClass("is-open");
      $(".p-sub-header__link").addClass("is-open");
    }
    if ($(".p-header__link").hasClass("is-scrolled") && $(".js-hamburger").hasClass("is-open")) {
      // スクロールしていて、ヘッダーロゴが黒い状態の段階且つメニューボタンを開く前の段階の場合
      $(".p-header__link").removeClass("is-scrolled");
    } else if ($(window).scrollTop() > topHeight && !$(".js-hamburger").hasClass("is-open")) {
      // ドロワーメニュー閉じる時、スクロールされている状態の場合、is-scrolledクラスを付加する
      $(".p-header__link").addClass("is-scrolled");
    }
  });

  // モーダル画面

  $(".js-modal-open").on("click", function () {
    $(".js-modal").fadeIn();
    return false;
  });
  $(".js-modal__close").on("click", function () {
    $(".js-modal").fadeOut();
    return false;
  });

  // カレンダー(flatpickrライブラリ)
  flatpickr("#js-datepicker", {
    mode: "range",
    minDate: "today",
    dateFormat: "Y-m-d",
    disable: [
      function (date) {
        // disable every multiple of 8
        return !(date.getDate() % 8);
      },
    ],
  });
  // ズームアップしながら画面切り替え
  const swiper = new Swiper(".swiper", {
    loop: true,
    effect: "fade",
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 2000,
    allowTouchMove: false,
  });

  // タブ開閉
  $(".c-tab__item").on("click", function () {
    $(".is-active").removeClass("is-active");

    $(this).addClass("is-active");
    $(".show").removeClass("show");

    let index = $(this).index();

    $(".p-news__items-wrapper").eq(index).fadeIn(300).addClass("show");
    $(".p-news__items-wrapper").not(".show").hide();
    return false;
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on("click", 'a[href*="#"]', function () {
    let time = 400;
    let header = $("header").innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $("html,body").animate({ scrollTop: targetY }, time, "swing");
    return false;
  });
});
