<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$posts = new WP_Query(
    array(
        'post_type' => 'blog',
        'posts_per_page' => 10,
    )
);

$page_for_posts = get_option('page_for_posts');
$fields = get_fields($page_for_posts);
?>

<section class="single-blog pb-5">
    <div class="texture-1">
        <img src="<?= get_theme_file_uri() ?>/assets/src/img/texture-1.svg" alt="texture">
    </div>

    <div class="container mb-4">
        <?php if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('</p><p id="breadcrumbs">', '</p><p>');
        } ?>
    </div>

    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-7 offset-md-2">
                <div class="feature-post">
                    <span><b>
                            ARTICLE
                        </b></span>
                    <h2 class="title" data-aos="fade-in" data-aos-duration="500">
                        <?= $post->post_title ?>
                    </h2>
                    <p class="mb-5">
                        <?= get_field('short_text', $post->ID) ?>
                    </p>
                    <?php if (has_post_thumbnail($post->ID)): ?>
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                        <figure class="mb-4">
                            <img src="<?php echo $image[0]; ?>" alt="<?= $post->post_title ?>" class="img-fluid col-md-10">
                        </figure>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-md-6 offset-md-3">
                <div class="autor-info d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <figure class="m-0">
                            <img src="<?= get_field('author_image', $post->ID) ?>"
                                alt="<?= get_field('author_name', $post->ID) ?>" class="avatar">
                        </figure>
                        <span class="name me-2">
                            <?= get_field('author_name', $post->ID) ?>
                        </span>
                    </div>

                    <div class="d-flex align-items-center">
                        <span class="tag me-2">
                            <?= get_the_category($post->ID)[0]->name ?>
                        </span>
                        <span>
                            <?= date("M, d, Y", strtotime($post->post_date)) ?>
                        </span>
                    </div>
                </div>

                <div class="post-content mt-5" data-aos="fade-up" data-aos-duration="1500">
                    <?php the_content(); ?>
                </div>
            </div>

            <div class="col-md-2 offset-md-1">
                <?php if (!empty($fields['seminar_post']) && isset($fields['active_deactive']) && $fields['active_deactive']) { ?>
                    <div class="seminar-cards">
                        <div class="card-header mb-2">
                            <?php if (has_post_thumbnail($fields['seminar_post']->ID)): ?>
                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($fields['seminar_post']->ID), 'single-post-thumbnail'); ?>
                                <figure class="mb-4">
                                    <img src="<?php echo $image[0]; ?>" alt="<?= $fields['seminar_post']->post_title ?>"
                                        class="img-fluid">
                                </figure>
                            <?php endif; ?>
                        </div>
                        <div class="card-body mb-2">
                            <h4>
                                <?= $fields['seminar_post']->post_title ?>
                            </h4>
                            <p>
                                <?= mb_strimwidth($fields['seminar_post']->post_content, 0, 100, '...') ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <a data-bs-toggle="modal" href="#modal-more" role="button"
                                class="btn-main-site btn-first-modal-<?= $fields['seminar_post']->ID ?> me-md-0 me-3">Know more</a>
                            <a data-bs-toggle="modal" href="#modal-form" role="button" class="btn-main-site btn-blue"
                                href="">Enroll now</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11 offset-md-1">
                <span><b>Related Articles</b></span>

                <div class="slider-articles mt-4" data-aos="fade-up" data-aos-duration="1500">
                    <?php if ($posts->have_posts()) { ?>
                        <?php foreach ($posts->posts as $key => $value) { ?>
                            <div class="item">
                                <article>
                                    <h3>
                                        <?= $value->post_title ?>
                                    </h3>
                                    <p>
                                        <?= mb_strimwidth($value->post_content, 0, 250, '...') ?>
                                    </p>
                                    <div class="card-content d-flex justify-content-between">
                                        <div class="autor-info">
                                            <div class="d-flex">
                                                <figure>
                                                    <img src="<?= get_field('author_image', $value->ID) ?>"
                                                        alt="<?= get_field('author_name', $value->ID) ?>" class="avatar">
                                                </figure>
                                                <span class="name me-2">
                                                    <?= get_field('author_name', $value->ID) ?> -
                                                    <?= date("M, d, Y", strtotime($value->post_date)) ?>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="reading-time d-flex me-3">
                                                    <img src="<?= get_theme_file_uri() ?>/assets/src/img/reading-time.svg"
                                                        alt="reading" class="me-1">
                                                    <?= get_field('time_reading', $value->ID) ?> min. read
                                                </span>
                                                <span class="tag">
                                                    <?= get_the_category($value->ID)[0]->name ?>
                                                </span>
                                            </div>
                                        </div>
                                        <a href="<?= get_permalink($value->ID) ?>" class="btn-main-site">Read more</a>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="texture-2">
        <img src="<?= get_theme_file_uri() ?>/assets/src/img/texture-2.svg" alt="texture">
    </div>
</section>

<?php get_footer(); ?>