<!-- パンくず -->
<nav class="breadcrumb" aria-label="パンくずリスト">
  <ol class="breadcrumb-list">

    <!-- ホーム -->
    <li>
      <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
    </li>


    <?php if (is_home()) : ?>

      <!-- お知らせ一覧ページ -->
      <li aria-current="page">
        <?php echo esc_html(get_the_title(get_option('page_for_posts'))); ?>
      </li>


    <?php elseif (is_single()) : ?>

      <!-- ブログ記事 -->
      <li>
        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">
          <?php echo esc_html(get_the_title(get_option('page_for_posts'))); ?>
        </a>
      </li>

      <li aria-current="page">
        <?php the_title(); ?>
      </li>


    <?php elseif (is_page()) : ?>

      <!-- 固定ページ -->
      <?php
      $ancestors = get_post_ancestors(get_the_ID());

      if (!empty($ancestors)) :
        $ancestors = array_reverse($ancestors);

        foreach ($ancestors as $ancestor) :
      ?>
          <li>
            <a href="<?php echo esc_url(get_permalink($ancestor)); ?>">
              <?php echo esc_html(get_the_title($ancestor)); ?>
            </a>
          </li>
      <?php
        endforeach;
      endif;
      ?>

      <li aria-current="page">
        <?php the_title(); ?>
      </li>


    <?php endif; ?>

  </ol>
</nav>
<!-- パンくずここまで -->