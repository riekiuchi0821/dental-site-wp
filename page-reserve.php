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
    <div>
        <div class="container section">
            <?php get_template_part('breadcrumb'); ?>
        </div>
        <!-- パンくずここまで-->
    </div>

    <?php
    while (have_posts()):
        the_post();
        the_content();
    endwhile;
    ?>

</main>

<?php get_footer(); ?>