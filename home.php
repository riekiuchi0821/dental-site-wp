<?php get_header(); ?>

<main>
    <!-- First View -->
    <section id="fv" class="fv fv-subpage">
        <picture class="fv-area">
            <img class="fv-image fv-image--center" src="<?php echo get_template_directory_uri(); ?>/img/lobby.jpg"
                alt="受付" />
        </picture>
        <div class="fv-copy fv-copy-subpage">
            <h1 class="fv-message-subpage">ブログ</h1>
        </div>
    </section>
    <!-- First View ここまで-->

    <div class="blog-page section-background-img">
        <div class="container">
            <div class="section">
                <!-- パンくず-->
                <?php get_template_part('breadcrumb'); ?>
                <!-- パンくずここまで-->
            </div>

            <div class="blog-layout section">
                <!-- ブログ -->
                <section class="blog-list">

                    <?php if (have_posts()): ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                            <article class="blog-card blog-card-background">
                                <div class="blog-card-info">
                                    <p><?php echo get_the_date('Y.m.d'); ?></p>
                                    <p class="blog-card-tag"><?php echo esc_html(get_the_category()[0]->name); ?></p>
                                </div>
                                <h2 class="blog-card-title"><?php the_title(); ?></h2>
                                <div class="card-divider"></div>
                                <p>
                                    <?php echo wp_trim_words(get_the_content(), 60, '...'); ?>
                                </p>
                                <div class="blog-button">
                                    <a href="<?php the_permalink(); ?>" class="primary-button">詳細へ →</a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- ページネーション -->
                    <?php get_template_part('pagination'); ?>

                </section>
                <!-- ブログここまで-->

                <!-- サイドバー -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>



</main>

<?php get_footer(); ?>