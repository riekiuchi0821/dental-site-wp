<?php get_header(); ?>

<main>

    <!-- First View -->
    <section id="fv" class="fv fv-subpage">
        <picture class="fv-area">
            <img class="fv-image fv-image--center" src="<?php echo get_template_directory_uri(); ?>/img/lobby.jpg"
                alt="受付" />
        </picture>
        <div class="fv-copy fv-copy-subpage">
            <h2 class="fv-message-subpage">記事</h2>
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
                    <div class="article-body blog-card-background">
                        <div class="blog-card-info">
                            <time>
                                <?php echo get_the_date('Y.m.d'); ?>
                            </time>
                            <p class="blog-card-tag"><?php echo esc_html(get_the_category()[0]->name); ?></p>
                        </div>
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="blog-pagination">
                        <p>＜＜　1 ＞＞</p>
                    </div>
                </section>
                <!-- ブログここまで-->

                <!-- サイドバー -->
                <aside class="sidebar-category">
                    <div class="sidebar-category-title">お知らせ</div>
                    <?php
                    $news_query = new WP_Query([
                        'category_name' => 'news',
                        'posts_per_page' => 3,
                    ]);
                    ?>

                    <?php if ($news_query->have_posts()): ?>
                        <?php while ($news_query->have_posts()):
                            $news_query->the_post(); ?>
                            <div>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                    <div class="sidebar-category-link">
                        <a href="<?php echo esc_url(get_category_link(get_category_by_slug('news')->term_id)); ?>">
                            お知らせ一覧 ＞
                        </a>
                    </div>

                    <div class="sidebar-category-title">豆知識</div>
                    <?php
                    $trivia_query = new WP_Query([
                        'category_name' => 'trivia',
                        'posts_per_page' => 3,
                    ]);
                    ?>

                    <?php if ($trivia_query->have_posts()): ?>
                        <?php while ($trivia_query->have_posts()):
                            $trivia_query->the_post(); ?>
                            <div>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                    <div class="sidebar-category-link">
                        <a href="<?php echo esc_url(get_category_link(get_category_by_slug('trivia')->term_id)); ?>">
                            豆知識一覧 ＞
                        </a>
                    </div>

                </aside>
                <!-- サイドバーここまで -->
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>