<section class="product-page">
    <div class="container">
        <?php if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('</p><p id="breadcrumbs">', '</p><p>');
        } ?>
        <div class="first-content">
            <div class="row">
                <?php if (have_rows('first_section')): ?>
                    <?php while (have_rows('first_section')):
                        the_row(); ?>
                        <div class="col-lg-5 offset-lg-1">
                            <h1>
                                <?php the_sub_field('title'); ?>
                            </h1>
                        </div>
                        <div class="col-lg-5 offset-lg-right-1">
                            <div class="content-video-section">
                                <img data-aos="fade-up" data-aos-duration="1500"
                                    src="<?= get_theme_file_uri() ?>/assets/dist/img/Blockchain-Program-Cover-image.png" class="img-fluid" />
                                <div class="content-popup-video-home">
                                    <div class="icon-player">
                                        <div class="content-icon">
                                            <svg width="800px" height="800px" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg" fill="none">
                                                <path fill="#fff"
                                                    d="M8 1.25a2.101 2.101 0 00-1.785.996l.64.392-.642-.388-5.675 9.373-.006.01a2.065 2.065 0 00.751 2.832c.314.183.67.281 1.034.285h11.366a2.101 2.101 0 001.791-1.045 2.064 2.064 0 00-.006-2.072L9.788 2.25l-.003-.004A2.084 2.084 0 008 1.25z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="second-content">
            <div class="row">
                <?php if (have_rows('second_section')): ?>
                    <?php while (have_rows('second_section')):
                        the_row(); ?>
                        <div class="col-lg-10">
                            <h3><?php the_sub_field('section_name');?></h3>
                            <h2><?php the_sub_field('title_section');?></h2>
                        </div>
                        <div class="col-lg-10 offset-lg-1">
                            <div class="content-slider-product">
                                <div class="item card-one">
                                    <h4><?php the_sub_field('title_card_one');?></h4>
                                    <p><?php the_sub_field('description_card_one');?></p>
                                </div>
                                <div class="item card-two">
                                    <h4><?php the_sub_field('title_card_two');?></h4>
                                    <p><?php the_sub_field('description_card_two');?></p>
                                </div>
                                <div class="item card-three">
                                    <h4><?php the_sub_field('title_card_three');?></h4>
                                    <p><?php the_sub_field('description_card_three');?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="product-two-section">
    <div class="container">
        <div class="row">
            <?php if (have_rows('three_section')): ?>
                <?php while (have_rows('three_section')): the_row(); ?>
                    <div class="col-md-5">
                        <p><?php the_sub_field('text_one');?></p>
                        <br>
                        <p><?php the_sub_field('text_two');?></p>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <p><?php the_sub_field('text_three');?></p>
                        <?php if( get_field('three_section_learn_more_link', $post->ID) ) { ?>
                            <a class="btn-enroll" href="<?= get_field('three_section_learn_more_link', $post->ID) ?>">Learn more</a>
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="section-faqs">
    <div class="container">
        <h3>FAQ</h3>
        <?php the_field('questions'); ?>
    </div>
</section>

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
        <?php if (have_rows('first_section')): ?>
            <?php while (have_rows('first_section')):
                the_row(); ?>
                <iframe width="800" height="500"
                src="<?php the_sub_field('link_video'); ?>"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                title="Advanced Blockchain Training Program"></iframe>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
        <script src="https://player.vimeo.com/api/player.js"></script>

    </div>
</div>
