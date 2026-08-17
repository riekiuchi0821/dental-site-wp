<?php get_header(); ?>

<main>
    <!-- First View -->
    <section id="fv" class="fv fv-subpage">
        <picture class="fv-area">
            <img class="fv-image fv-image--center" src="<?php echo get_template_directory_uri(); ?>/img/lobby.jpg"
                alt="受付" />
        </picture>
        <div class="fv-copy fv-copy-subpage">
            <h1 class="fv-message-subpage"><?php the_title(); ?></h1>
        </div>
    </section>
    <!-- First View ここまで-->

    <div class="section-background-img">

        <div class="container section">
            <!-- パンくず-->
            <?php get_template_part('breadcrumb'); ?>
            <!-- パンくずここまで-->

          <section id="general" class="section service-section">
            <h2 class="section-title">一般歯科</h2>
            <div class="services-card">
              <img
                class="services-general-img"
                src="<?php echo get_template_directory_uri(); ?>/img/general-treatment.jpg"
                alt="一般歯科"
              />
              <p>
                むし歯や歯周病の治療を行い、患者さんの健康な歯を守るための基本的なケア
                を提供します。<br />痛みを抑えた治療を心がけ、できるだけ歯を残す治療
                を大切にしています。
              </p>
              <div class="service-treatment">
                <h3>対応する治療</h3>
                <div class="service-card-items">
                  <div class="service-treatment-text">
                    虫歯の治療・詰め物・かぶせ物
                  </div>
                  <div class="service-treatment-text">
                    歯周病の治療・歯石除去
                  </div>
                  <div class="service-treatment-text">
                    神経の治療（根管治療）
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="prevention" class="section service-section">
            <h2 class="section-title">予防歯科</h2>
            <div class="services-card">
              <img
                class="services-general-img"
                src="<?php echo get_template_directory_uri(); ?>/img/lecture.jpg"
                alt="予防歯科"
              />
              <p>
                「痛くなってから行く」のではなく、むし歯や歯周病を防ぐことを目的とした診療です。<br />
                定期的な検診とクリーニングで、お口の健康を長く保ちましょう。
              </p>
              <div class="service-treatment">
                <h3>対応する治療</h3>
                <div class="service-card-items">
                  <div class="service-treatment-text">
                    定期検診・クリーニング（PMTC）
                  </div>
                  <div class="service-treatment-text">
                    フッ素塗布で歯を強くする
                  </div>
                  <div class="service-treatment-text">
                    歯周病の予防と早期発見
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="child" class="section service-section">
            <h2 class="section-title">小児歯科</h2>
            <div class="services-card">
              <img
                class="services-general-img"
                src="<?php echo get_template_directory_uri(); ?>/img/painless.jpg"
                alt="小児歯科"
              />
              <p>
                お子さまの歯の健康を守るために、むし歯の予防と治療を中心に、楽しく通える歯医者 を目指しています。<br />
                初めての歯医者さんでも安心できるよう、やさしく丁寧な対応を心がけています。
              </p>
              <div class="service-treatment">
                <h3>対応する治療</h3>
                <div class="service-card-items">
                  <div class="service-treatment-text">
                    乳歯のむし歯治療
                  </div>
                  <div class="service-treatment-text">
                    シーラント（むし歯予防処置）
                  </div>
                  <div class="service-treatment-text">
                    フッ素塗布・歯磨き指導
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="sergery"  class="section service-section">
            <h2 class="section-title">口腔外科</h2>
            <div class="services-card">
              <img
                class="services-general-img"
                src="<?php echo get_template_directory_uri(); ?>/img/x-lay.jpg"
                alt="口腔外科"
              />
              <p>
                親知らずの抜歯や顎関節症など、お口の中の外科的な治療を専門的に行います。<br />
                痛みや負担の少ない治療を心がけ、患者さん一人ひとりに合わせた適切な治療 を提供します。
              </p>
              <div class="service-treatment">
                <h3>対応する治療</h3>
                <div class="service-card-items">
                  <div class="service-treatment-text">
                    親知らずの抜歯
                  </div>
                  <div class="service-treatment-text">
                    顎関節症の治療 
                  </div>
                  <div class="service-treatment-text">
                    口内炎・粘膜疾患の診療
                  </div>
                </div>
              </div>
            </div>
          </section>

        </div>
    </div>

</main>

<?php get_footer(); ?>