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
                <a class="sidebar-blog-title" href="<?php the_permalink(); ?>">
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
                <a class="sidebar-blog-title" href="<?php the_permalink(); ?>">
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