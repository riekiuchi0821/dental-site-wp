<?php get_header(); ?>

<main>

    <!-- First View -->
    <section id="fv" class="fv fv-subpage">
        <picture class="fv-area">
            <img class="fv-image fv-image--center" src="<?php echo get_template_directory_uri(); ?>/img/lobby.jpg"
                alt="受付" />
        </picture>
        <div class="fv-copy fv-copy-subpage">
            <h2 class="fv-message-subpage"><?php echo esc_html(get_the_category()[0]->name); ?></h2>
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
                </section>
                <!-- ブログここまで-->

                <!-- サイドバー -->
                <?php get_sidebar(); ?>
                
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>