<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="description"
      content="中野区のさわやか歯科クリニック。小さなお子さまからご年配の方まで安心して通える歯科医院です。痛みの少ない治療、予防歯科、最新設備でお口の健康をサポートします。"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/destyle.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Zen+Kaku+Gothic+New&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <?php wp_head(); ?>
  </head>

  <body class="home">
    <!-- ヘッダー -->
    <header id="header-area">
      <div class="header-menu">
        <!-- ロゴ -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.svg" alt="さわやか歯科医院ロゴ" />
        </a>
        <!-- ナビゲーション -->
        <nav id="header-navigation">
          <ul>
            <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('concept'))); ?>">当院の特徴</a></li>
            <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>">診療内容</a></li>
            <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('doctors'))); ?>">医師紹介</a></li>
            <li><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">ブログ</a></li>
          </ul>
        </nav>
      </div>

      <div class="header-contact">
        <a href="#" class="cta-button">Web予約</a>
        <div>
          <p class="tel-title">電話予約はこちら</p>
          <p class="tel-num">012-345-6789</p>
        </div>
      </div>

      <!-- SP ハンバーガー -->
      <button
        id="hamburger-button"
        type="button"
        aria-label="メニュー"
        aria-controls="sp-navigation"
        aria-expanded="false"
      >
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- ハンバーガーここまで-->

      <!-- SPナビゲーション -->
      <nav id="sp-navigation">
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
          <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('concept'))); ?>">当院の特徴</a></li>
          <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>">診療内容</a></li>
          <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('doctors'))); ?>">医師紹介</a></li>
          <li><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">ブログ</a></li>
        </ul>
      </nav>

      <!-- SP予約ボタン -->
      <div class="sp-fixed-menu">
        <a href="#" class="cta-button sp-cta-button">Web予約</a>
        <a href="tel:0123456789" class="sp-tel-button">☎ 012-345-6789</a>
      </div>

    </header>
    <!-- ヘッダーここまで-->