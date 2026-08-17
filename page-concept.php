<?php get_header(); ?>

<main>
    <!-- First View -->
    <section id="fv" class="fv fv-subpage">
        <picture class="fv-area">
            <img class="fv-image fv-image--center" src="<?php echo get_template_directory_uri(); ?>/img/appearance.jpg"
                alt="外観" />
        </picture>
        <div class="fv-copy fv-copy-subpage">
            <h1 class="fv-message-subpage"><?php the_title(); ?></h1>
        </div>
    </section>
    <!-- First View ここまで-->

    <!-- パンくず-->
    <div class="section-background-img">
        <div class="container section">
          <?php get_template_part('breadcrumb'); ?>
        </div>
        <!-- パンくずここまで-->

        <!-- Concept -->
        <section id="concept" class="section">
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
                                当院は、小さなお子さまからご年配の方まで、<br />どなたでも安心して通える歯科クリニックを目指しています。
                            </p>
                            <img class="concept-explanation-icon"
                                src="<?php echo get_template_directory_uri(); ?>/img/icon-family.jpg" alt="家族" />
                            <p>
                                単に「治療をする」のではなく、患者さんの不安を和らげ、笑顔で通えることを大切にし、<br />
                                最新の設備とやさしい診療で、家族みんなの健康な歯を守れるようサポートしていきます。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="concept-important-points">
                    <h3>当院が大切にしていること</h3>
                    <div class="concept-pointcards">
                        <div class="concept-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/painless.jpg" alt="子供の治療" />
                            <h4 class="card-title">痛みの少ないやさしい治療</h4>
                            <p>
                                麻酔の工夫や最新の技術を取り入れ、痛みを最小限に抑えた治療
                                を心がけています。<br />
                                歯医者が苦手な方も、安心して通っていただけるよう配慮しています。
                            </p>
                        </div>
                        <div class="concept-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/lecture.jpg" alt="予防歯科" />
                            <h4 class="card-title">お口の健康を守る予防歯科</h4>
                            <p>
                                「痛くなったら行く」のではなく、むし歯や歯周病を防ぐ予防ケア
                                を大切にしています。<br />定期検診・クリーニングで、大切な歯を一生涯守ります。
                            </p>
                        </div>
                        <div class="concept-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img3.jpg" alt="治療設備" />
                            <h4 class="card-title">清潔で最新の設備</h4>
                            <p>
                                患者さんが安心して治療を受けられるよう、徹底した衛生管理 と
                                最新の歯科医療機器 を導入。<br />快適な環境で、質の高い治療を提供します。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Conceptここまで -->

        <!-- 施設の紹介 -->
        <section id="facilities" class="section">
          <div class="container--sm">
            <h2 class="section-title">施設の特徴</h2>
            <div class="facilities-cards">
              <div class="facilities-card">
                <img
                  class="facilities-card-img"
                  src="<?php echo get_template_directory_uri(); ?>/img/img3.jpg"
                  alt="清潔で快適な診療室"
                />
                <div class="facilities-card-text">
                  <h3 class="card-title">清潔で快適な診療環境</h3>
                  <p>
                    患者さんに安心して治療を受けていただけるよう、衛生管理を徹底し、最新の滅菌システムを導入。<br />院内は明るく、清潔感のある快適な空間づくりを心がけています。
                  </p>
                </div>
              </div>
              <div class="facilities-card facilities-card-rev">
                <img
                  class="facilities-card-img"
                  src="<?php echo get_template_directory_uri(); ?>/img/kidsspace.jpg"
                  alt="キッズスペース"
                />
                <div class="facilities-card-text">
                  <h3 class="card-title">小さなお子さまも過ごしやすい</h3>
                  <p>
                    お子さまが楽しく通えるように、キッズスペースを完備。<br />キッズスペースは毎朝消毒しており、安心して過ごせます。
                  </p>
                </div>
              </div>
              <div class="facilities-card">
                <img
                  class="facilities-card-img"
                  src="<?php echo get_template_directory_uri(); ?>/img/img6.jpg"
                  alt="バリアフリーな診療室"
                />
                <div class="facilities-card-text">
                  <h3 class="card-title">バリアフリー設計</h3>
                  <p>
                    ご年配の方やお身体が不自由な方にも安心してご来院いただけるよう、段差の少ないバリアフリー設計
                    になっています。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- 施設の紹介ここまで -->

    </div>

</main>

<?php get_footer(); ?>