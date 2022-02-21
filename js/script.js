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

  //ドロワーメニュー
  $(".js-hamburger").on("click", function () {
    if ($(".js-hamburger").hasClass("is-open")) {
      // $(".js-drawer-menu").removeClass("is-open");
      $(".js-drawer-menu").fadeOut();
      $(".p-header__link").removeClass("is-open");
      $(this).removeClass("is-open");
    } else {
      // $(".js-drawer-menu").addClass("is-open");
      $(".js-drawer-menu").fadeIn();
      $(".p-header__link").addClass("is-open");
      $(this).addClass("is-open");
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
