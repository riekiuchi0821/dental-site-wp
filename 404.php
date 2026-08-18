<?php get_header(); ?>

<main>
    <!-- First View -->
    <section id="fv" class="fv fv-subpage">
        <picture class="fv-area">
            <img class="fv-image fv-image--center" src="<?php echo get_template_directory_uri(); ?>/img/appearance.jpg"
                alt="外観" />
        </picture>
        <div class="fv-copy fv-copy-subpage">
            <h1 class="fv-message-subpage">404 ページが見つかりません</h1>
        </div>
    </section>
    <!-- First View ここまで-->

    <section class="section">
        <div class="container">
            <div class="section">
                <p>お探しのページは存在しないか、移動した可能性があります。</p>
                <div class="backto-top">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="primary-button">
                    トップページへ戻る →
                </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>