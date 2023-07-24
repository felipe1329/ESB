<?php
$video = get_field('embed_video', $post->ID);
?>
<section class="profile-page">
    <div class="container">
        <p id="breadcrumbs"><span><span><a href="<?= get_home_url() ?>/">Home</a></span> » <a href="<?= get_home_url() ?>/about-us">ABOUT US</a> » <span class="breadcrumb_last" aria-current="page"><?php the_title();?></span></span></p>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 offset-md-1">

            <style>
                h1::before {content:'<?php the_title()?>'};
            </style>
                <h4><?php the_field('job_description')?></h4>
                <h1 class="<?php the_title()?>"><?php the_title()?></h1>
                <p><?php the_content()?></p>
            </div>
            <div class="col-md-4 offset-md-1">
                <div class="content-profile-file">
                    <?php if (has_post_thumbnail($post->ID)): ?>
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?= $post->post_title ?>" class="img-fluid mb-4">
                        <button class="watch-video <?= $video ? 'image-popup-video' : '' ?>">Watch video</button>
                    <?php endif; ?>
                    <p><?php the_field('social_name')?></p>

                    <?php if( get_field('social_link') ): ?>
                        <div class="content-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path data-name="Path 469" d="M0 0h24v24H0z" style="fill:none"/>
                                <path data-name="Path 470" d="M18.335 18.339H15.67v-4.177c0-1-.02-2.278-1.39-2.278-1.389 0-1.6 1.084-1.6 2.2v4.25h-2.667V9.75h2.56v1.17h.035a2.812 2.812 0 0 1 2.528-1.387c2.7 0 3.2 1.778 3.2 4.091v4.715zM7 8.575a1.548 1.548 0 1 1 1.551-1.547A1.546 1.546 0 0 1 7 8.575zm1.336 9.764h-2.67V9.75H8.34v8.589zM19.67 3H4.329A1.312 1.312 0 0 0 3 4.3v15.4A1.312 1.312 0 0 0 4.328 21h15.338A1.317 1.317 0 0 0 21 19.7V4.3A1.317 1.317 0 0 0 19.666 3z" style="fill:#103059"/>
                            </svg>
                            <a target="_blank" href="<?php esc_attr( the_field('social_link') ); ?>"><?php esc_attr( the_field('social_link') ); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($video) { ?>
    <div class="content-popup-video">
        <div class="content-modal">
            <div class="close-modal">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 30 30">
                    <path
                        d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z">
                    </path>
                </svg>
            </div>
            <div style="position: relative;">
                <iframe width="800" height="500" src="<?= $video ?>" title="<?= $post->post_title ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
<?php } ?>
