<?php get_header(); ?>
<main>
    <!-- First View -->
    <section id="fv" class="fv fv-subpage">
        <picture class="fv-area">
            <!-- 800px以下：SP用 -->
            <source media="(max-width: 800px)"
                srcset="<?php echo get_template_directory_uri(); ?>/img/doctors-fv-sp.jpg" />
            <img class="fv-image fv-image--center-ytop"
                src="<?php echo get_template_directory_uri(); ?>/img/doctors-fv.jpg" alt="医師たち" />
        </picture>
        <div class="fv-copy fv-copy-subpage">
            <h1 class="fv-message-subpage"><?php the_title(); ?></h1>
        </div>
    </section>
    <!-- First View ここまで-->

    <!-- パンくず、コンセプト、施設の特徴-->
    <div class="section-background-img">
        <!-- パンくず-->
        <div class="container section">
            <?php get_template_part('breadcrumb'); ?>
        </div>
        <!-- パンくずここまで-->
        <!-- 院長挨拶 -->
        <section id="director" class="section">
            <div class="container--sm">
                <div>
                    <h2 class="section-title">院長よりご挨拶</h2>
                    <div class="director-explanation">
                        <div class="director-photo">
                            <img class="director-img"
                                src="<?php echo get_template_directory_uri(); ?>/img/doctor2_matsumoto.jpg"
                                alt="松本貴子" />
                        </div>
                        <div class="director-text">
                            <p>
                                みなさま、こんにちは。
                                <br />「さわやか歯科クリニック」院長の松本貴子です。<br />
                                <br />
                                当院は、小さなお子さまからご年配の方まで、安心して通える歯科クリニックを目指しています。<br />
                                <br />
                                歯医者に苦手意識を持つ方にも、やさしく丁寧な治療を提供し、リラックスできる環境を整えています。<br />
                                痛みを抑えた治療や
                                わかりやすい説明を心がけ、不安なく通えるよう努めています。<br />
                                <br />
                                また、歯の健康は全身の健康につながるため、治療だけでなく予防歯科にも力を入れています。<br />定期検診やクリーニングを通じて、みなさまの大切な歯を守り続けるお手伝いをしていきます。<br />
                                <br />
                                地域のみなさまにとって、「ここなら安心して通える」と思っていただけるクリニックを目指し、スタッフ一同、努力してまいります。<br />
                                <br />
                                どうぞよろしくお願いいたします。
                            </p>
                        </div>

                        <div class="director-info">
                            <div class="name-container">
                                <p>院長</p>
                                <div class="doctors-name">
                                    <div class="doctors-name-jp">松本　貴子</div>
                                    <div>TAKAKO　MATSUMOTO</div>
                                </div>
                            </div>
                            <div class="card-divider"></div>
                            <div class="doctors-profile">
                                <div>得意な治療:</div>
                                <div>口腔外科・親知らずの抜歯・歯周病治療</div>
                                <div>趣味:</div>
                                <div>ランニング・映画鑑賞・登山</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 院長挨拶ここまで -->

        <!-- 医師紹介 -->
        <section id="doctors" class="section">
            <div class="container--sm">
                <h2 class="section-title">スタッフ紹介</h2>
                <div class="doctors-contents">
                    <!-- 田中医師 -->
                    <div class="doctors-card">
                        <img class="doctors-card-img" src="<?php echo get_template_directory_uri(); ?>/img/doctor1_tanaka.jpg" alt="田中医師" />
                        <div class="doctors-info">
                            <div class="name-container">
                                <p>歯科医師</p>
                                <div class="doctors-name">
                                    <div class="doctors-name-jp">田中　健吾</div>
                                    <div>KENGO　TANAKA</div>
                                </div>
                            </div>
                            <div class="doctors-comment">
                                <p>
                                    お口の健康は、全身の健康にも大きく関わっています。<br />
                                    患者さんが長く健康な歯を維持できるよう、最適な治療とアドバイスを提供いたします。<br />
                                    治療に対する不安や疑問があれば、何でもお気軽にご相談ください。
                                </p>
                            </div>
                            <div class="card-divider"></div>
                            <div class="doctors-profile">
                                <div>得意な治療:</div>
                                <div>口腔外科・親知らずの抜歯・歯周病治療</div>
                                <div>趣味:</div>
                                <div>ランニング・映画鑑賞・登山</div>
                            </div>
                        </div>
                    </div>
                    <!-- 田中医師 -->

                    <!-- 鈴木歯科衛生士 -->
                    <div class="doctors-card">
                        <img class="doctors-card-img" src="<?php echo get_template_directory_uri(); ?>/img/staff1_suzuki_2.jpg" alt="鈴木歯科衛生士" />
                        <div class="doctors-info">
                            <div class="name-container">
                                <p>歯科衛生士</p>
                                <div class="doctors-name">
                                    <div class="doctors-name-jp">鈴木　由佳</div>
                                    <div>YUKA　SUZUKI</div>
                                </div>
                            </div>
                            <div class="doctors-comment">
                                <p>
                                    患者さんのお口の健康を守るため、クリーニングや予防ケアを担当しています。<br />
                                    歯磨きのコツや、デンタルフロスの使い方など、日々のケアについてもお伝えしていますので、お気軽にご相談ください。
                                </p>
                            </div>
                            <div class="card-divider"></div>
                            <div class="doctors-profile">
                                <div>得意な治療:</div>
                                <div>クリーニング・ホワイトニング・歯磨き指導</div>
                                <div>趣味:</div>
                                <div>ヨガ・お菓子作り・音楽鑑賞</div>
                            </div>
                        </div>
                    </div>
                    <!-- 鈴木歯科衛生士 -->
                </div>
            </div>
        </section>
        <!-- 医師紹介ここまで -->

    </div>



</main>
<?php get_footer(); ?>