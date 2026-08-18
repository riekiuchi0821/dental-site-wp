<?php get_header(); ?>


<main>
  <!-- First View -->
  <section id="fv" class="fv-top">
    <picture class="fv-area-top">
      <!-- 1050px以下：SP用 -->
      <source media="(max-width: 1050px)" srcset="<?php echo get_template_directory_uri(); ?>/img/hero-1-sp.jpg" />
      <img class="fv-image fv-image--center" src="<?php echo get_template_directory_uri(); ?>/img/hero-1.jpg"
        alt="ファーストビュー画像" />
    </picture>
    <div class="fv-copy">
      <h1 class="fv-message-main">
        <span class="fv-message-sub">安心して通える</span>
        <span class="fv-message-title">家族みんなの歯科医院</span>
      </h1>
    </div>
  </section>
  <!-- First View ここまで-->

  <!-- お知らせと診療時間 -->
  <section id="schedule" class="section">
    <div class="container">
      <div class="news-block">
        <h2 class="section-title section-title--sm">お知らせ</h2>
        <ul class="news-list">

          <?php
          $news_query = new WP_Query([
            'category_name' => 'news',
            'posts_per_page' => 3,
          ]);
          ?>

          <?php if ($news_query->have_posts()): ?>
            <?php while ($news_query->have_posts()):
              $news_query->the_post(); ?>

              <li class="news-item">
                <span class="news-date">
                  <?php echo get_the_date('Y.m.d'); ?>
                </span>
                <p class="news-text">
                  <?php the_title(); ?>
                </p>
              </li>

            <?php endwhile; ?>
          <?php endif; ?>

          <?php wp_reset_postdata(); ?>

        </ul>
        <div class="news-button">
          <a href="<?php echo esc_url(get_category_link(get_category_by_slug('news')->term_id)); ?>" class="primary-button primary-button--sm">一覧を見る →</a>
        </div>
      </div>
      <div class="schedule-block">
        <h2 class="section-title section-title--sm">診療時間</h2>
        <div class="schedule-table">
          <div class="schedule-cell schedule-corner"></div>
          <div class="schedule-cell schedule-day">月</div>
          <div class="schedule-cell schedule-day">火</div>
          <div class="schedule-cell schedule-day">水</div>
          <div class="schedule-cell schedule-day">木</div>
          <div class="schedule-cell schedule-day">金</div>
          <div class="schedule-cell schedule-day">土</div>
          <div class="schedule-cell schedule-day">日</div>

          <div class="schedule-cell schedule-time">10:00-12:00</div>
          <div class="schedule-cell schedule-mark">●</div>
          <div class="schedule-cell schedule-mark">●</div>
          <div class="schedule-cell schedule-mark schedule-closed">／</div>
          <div class="schedule-cell schedule-mark">●</div>
          <div class="schedule-cell schedule-mark">●</div>
          <div class="schedule-cell schedule-mark">●</div>
          <div class="schedule-cell schedule-mark schedule-closed">／</div>

          <div class="schedule-cell schedule-time">14:00-18:00</div>
          <div class="schedule-cell schedule-mark">●</div>
          <div class="schedule-cell schedule-mark">●</div>
          <div class="schedule-cell schedule-mark schedule-closed">／</div>
          <div class="schedule-cell schedule-mark">●</div>
          <div class="schedule-cell schedule-mark">●</div>
          <div class="schedule-cell schedule-mark schedule-closed">／</div>
          <div class="schedule-cell schedule-mark schedule-closed">／</div>
        </div>
        <p class="schedule-note">
          休診：水曜、日曜、祝日<br />
          ※土曜は午前中のみ
        </p>
      </div>
    </div>
  </section>
  <!-- お知らせと診療時間ここまで-->

  <!-- Concept -->
  <section id="concept" class="section section-background-img">
    <div class="container">
      <div class="concept-contents">
        <h2 class="section-title">コンセプト</h2>
        <h3>
          地域の皆様が安心して通える、<br class="sp" />
          家族みんなのための歯科医院
        </h3>
        <div class="concept-explanation">
          <div>
            <p>
              当院は、小さなお子さまからご年配の方まで、<br />
              どなたでも安心して通える歯科クリニックを<br />目指しています。
            </p>
            <p>
              単に「治療をする」のではなく<br />
              患者さんの不安を和らげ、<br />笑顔で通えることを大切にします。
            </p>
            <p>
              最新の設備とやさしい診療で、<br />
              家族みんなの健康な歯を守れるよう<br />サポートしていきます。
            </p>
          </div>
          <img class="concept-explanation-img" src="<?php echo get_template_directory_uri(); ?>/img/concept-2.jpg"
            alt="相談する患者" />
        </div>
      </div>
      <div class="concept-important-points">
        <h3>当院が大切にしていること</h3>
        <div class="concept-pointcards">
          <div class="concept-card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/painless.jpg" alt="子供の治療" />
            <h4 class="card-title">痛みの少ないやさしい治療</h4>
          </div>
          <div class="concept-card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/lecture.jpg" alt="予防歯科" />
            <h4 class="card-title">お口の健康を守る予防歯科</h4>
          </div>
          <div class="concept-card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/img3.jpg" alt="治療設備" />
            <h4 class="card-title">清潔で最新の設備</h4>
          </div>
        </div>
        <div class="concept-button">
          <a href="concept/index.html" class="primary-button">詳しく見る →</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Conceptここまで -->

  <!-- Service -->
  <section id="service" class="section">
    <div class="container">
      <div class="service-contents">
        <h2 class="section-title">診療内容</h2>
        <div class="service-cards">
          <article class="service-card">
            <div class="service-card-contents">
              <div class="service-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/general.jpg" alt="一般歯科" />
              </div>
              <div>
                <h3 class="card-title">一般歯科</h3>
                <ul class="service-list">
                  <li>虫歯の治療・詰め物・かぶせ物</li>
                  <li>歯周病の治療・歯石除去</li>
                  <li>神経の治療（根管治療）</li>
                </ul>
              </div>
            </div>
            <div class="service-button">
              <a href="services/index.html#general" class="primary-button">一般歯科へ →</a>
            </div>
          </article>
          <article class="service-card">
            <div class="service-card-contents">
              <div class="service-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/yobou.jpg" alt="予防歯科" />
              </div>
              <div>
                <h3 class="card-title">予防歯科</h3>
                <ul class="service-list">
                  <li>定期検診・クリーニング（PMTC）</li>
                  <li>フッ素塗布で歯を強くする</li>
                  <li>歯周病の予防と早期発見</li>
                </ul>
              </div>
            </div>
            <div class="service-button">
              <a href="services/index.html#prevention" class="primary-button">予防歯科へ →</a>
            </div>
          </article>
          <article class="service-card">
            <div class="service-card-contents">
              <div class="service-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/child.jpg" alt="小児歯科" />
              </div>
              <div>
                <h3 class="card-title">小児歯科</h3>
                <ul class="service-list">
                  <li>乳歯のむし歯治療</li>
                  <li>シーラント（むし歯予防処置）</li>
                  <li>フッ素塗布・歯磨き指導</li>
                </ul>
              </div>
            </div>
            <div class="service-button">
              <a href="services/index.html#child" class="primary-button">小児歯科へ →</a>
            </div>
          </article>
          <article class="service-card">
            <div class="service-card-contents">
              <div class="service-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sergery.jpg" alt="口腔外科" />
              </div>
              <div>
                <h3 class="card-title">口腔外科</h3>
                <ul class="service-list">
                  <li>親知らずの抜歯</li>
                  <li>顎関節症の治療</li>
                  <li>口内炎・粘膜疾患の診療</li>
                </ul>
              </div>
            </div>
            <div class="service-button">
              <a href="services/index.html#sergery" class="primary-button">口腔外科へ →</a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- Serviceここまで -->
</main>

<?php get_footer(); ?>