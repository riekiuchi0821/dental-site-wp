<?php
function dental_theme_enqueue_styles()
{

    wp_enqueue_style(
        'destyle',
        get_template_directory_uri() . '/css/destyle.css'
    );

    wp_enqueue_style(
        'dental-style',
        get_template_directory_uri() . '/css/style.css'
    );

    wp_enqueue_script(
        'dental-top',
        get_template_directory_uri() . '/js/top.js',
        array(),
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'dental_theme_enqueue_styles');

add_theme_support('title-tag');

function dental_theme_meta_description()
{
    if (is_front_page()) {
        echo '<meta name="description" content="中野区のさわやか歯科クリニック。小さなお子さまからご年配の方まで安心して通える歯科医院です。痛みの少ない治療、予防歯科、最新設備でお口の健康をサポートします。">' . "\n";

    } elseif (is_page('concept')) {
        echo '<meta name="description" content="さわやか歯科クリニックの特徴をご紹介します。痛みの少ないやさしい治療を大切にしています。お口の健康を守る予防歯科、とくに定期健診、クリーニングに力を入れています。">' . "\n";

    } elseif (is_page('services')) {
        echo '<meta name="description" content="さわやか歯科クリニックの診療内容をご紹介します。一般歯科、小児歯科、予防歯科、口腔外科など、患者さんのお口の健康をサポートします。">' . "\n";

    } elseif (is_page('doctors')) {
        echo '<meta name="description" content="さわやか歯科クリニックの医師をご紹介します。患者さんに寄り添った丁寧な診療を大切にし、親知らずの抜歯や歯周病治療、クリーニング、ホワイトニングなど、お口のお悩みに幅広く対応しています。">' . "\n";
    } elseif (is_home()) {
        echo '<meta name="description" content="さわやか歯科クリニックのブログです。当院のお知らせや、歯に関する豆知識を配信します。">' . "\n";
    } elseif (is_category('news')) {
        echo '<meta name="description" content="さわやか歯科クリニックからの休診や診療時間変更などのお知らせをご案内します。">' . "\n";

    } elseif (is_category('trivia')) {
        echo '<meta name="description" content="歯やお口の健康に役立つ豆知識をご紹介します。虫歯や歯周病の予防、定期検診など、毎日のケアに役立つ情報をお届けします。">' . "\n";
    } elseif (is_single()) {
        $description = get_the_excerpt();
        echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
    }
}
add_action('wp_head', 'dental_theme_meta_description');