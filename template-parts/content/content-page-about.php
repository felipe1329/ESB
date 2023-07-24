<section class="about-page">
    <div class="container">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '</p><p id="breadcrumbs">','</p><p>' );}?>


    </div>

    <div class="container content-esb">
        <div class="row">
            <div class="col-md-1" data-aos="fade-up">
                <div class="content-dots-scroll">

                </div>
            </div>
            <div class="col-md-5 offset-md-3" data-aos="fade-up" data-aos-duration="700">
                <?php $image_first = get_field('image_first_section'); if( !empty( $image_first ) ): ?>
                    <img src="<?php echo esc_url($image_first['url']); ?>" alt="<?php echo esc_attr($image_first['alt']); ?>" />
                <?php endif; ?>

                <h2><?php the_field('first_section')?></h2>
                <p><?php the_field('description_first_section')?></p>
            </div>
        </div>
    </div>
    <div class="container-fluid content-method">
        <div class="row m-0">
            <div class="col-md-1" data-aos="fade-up">
                <div class="content-dots-scroll">

                </div>
            </div>
            <div class="col-md-5 offset-md-5" data-aos="fade-left" data-aos-duration="700">
                <?php $image_second = get_field('image_second_section'); if( !empty( $image_second ) ): ?>
                    <img src="<?php echo esc_url($image_second['url']); ?>" alt="<?php echo esc_attr($image_second['alt']); ?>" />
                <?php endif; ?>

                <h2><?php the_field('second_section')?></h2>
                <p><?php the_field('description_second_section')?></p>
            </div>
        </div>
    </div>

    <div class="container-fluid container-story">
        <div class="row m-0">
            <div class="col-md-1" data-aos="fade-up">
                <div class="content-dots-scroll">

                </div>
            </div>
            <div class="col-md-5" data-aos="fade-right" data-aos-duration="700">
                <?php $image_three = get_field('image_three_section'); if( !empty( $image_three ) ): ?>
                    <img src="<?php echo esc_url($image_three['url']); ?>" alt="<?php echo esc_attr($image_three['alt']); ?>" />
                <?php endif; ?>

                <h2><?php the_field('three_section')?></h2>
                <p><?php the_field('description_three_section')?></p>
            </div>
        </div>
    </div>

    <div id="slide-about-section" class="container content-team">
        <div class="row">
            <div class="col-md-1" data-aos="fade-up">
                <div class="content-dots-scroll">

                </div>
            </div>
            <div class="col-md-5 offset-md-3" data-aos="fade-left" data-aos-duration="700">
                <?php $image_four = get_field('image_four_section'); if( !empty( $image_four ) ): ?>
                    <img src="<?php echo esc_url($image_four['url']); ?>" alt="<?php echo esc_attr($image_four['alt']); ?>" />
                <?php endif; ?>

                <h2><?php the_field('four_section')?></h2>
                <p><?php the_field('body_section')?></p>
            </div>
        </div>

        <div class="row align-center mt-5">
            <div class="col-md-1">
                <div class="content-dots-scroll">

                </div>
            </div>
            <div class="col-md-11" data-aos="fade-up" data-aos-duration="700">
                <div class="content-slider-profile">
                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-7 col-md-2">
                                <?php $professor_image = get_field('image_professor'); if( !empty( $professor_image ) ): ?>
                                    <img src="<?php echo esc_url($professor_image['url']); ?>" alt="<?php echo esc_attr($professor_image['alt']); ?>" />
                                <?php endif; ?>

                                <h3><?php the_field('name_professor')?></h3>
                                <h4><?php the_field('job_description_professor')?></h4>
                            </div>
                            <div class="col-md-5 offset-md-1 pb-5">
                                <p><?php the_field('description_professor')?></p>
                                <div class="content-btn">
                                    <a href="<?php the_field('link_profile'); ?>">Go to profile page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-7 col-md-2">
                                <?php $asma_image = get_field('image_asma'); if( !empty( $asma_image ) ): ?>
                                    <img src="<?php echo esc_url($asma_image['url']); ?>" alt="<?php echo esc_attr($asma_image['alt']); ?>" />
                                <?php endif; ?>

                                <h3><?php the_field('name_asma')?></h3>
                                <h4><?php the_field('job_description_asma')?></h4>
                            </div>
                            <div class="col-md-5 offset-md-1 pb-5">
                                <p><?php the_field('description_asma')?></p>
                                <div class="content-btn">
                                    <a href="<?php the_field('link_asma'); ?>">Go to profile page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-7 col-md-2">
                                <?php $mouza_image = get_field('image_mouza'); if( !empty( $mouza_image ) ): ?>
                                    <img src="<?php echo esc_url($mouza_image['url']); ?>" alt="<?php echo esc_attr($mouza_image['alt']); ?>" />
                                <?php endif; ?>

                                <h3><?php the_field('name_mouza')?></h3>
                                <h4><?php the_field('job_description_mouza')?></h4>
                            </div>
                            <div class="col-md-5 offset-md-1 pb-5">
                                <p><?php the_field('description_mouza')?></p>
                                <div class="content-btn">
                                    <a href="<?php the_field('link_mouza'); ?>">Go to profile page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-7 col-md-2">
                                <?php $noora_image = get_field('image_noora'); if( !empty( $noora_image ) ): ?>
                                    <img src="<?php echo esc_url($noora_image['url']); ?>" alt="<?php echo esc_attr($noora_image['alt']); ?>" />
                                <?php endif; ?>

                                <h3><?php the_field('name_noora')?></h3>
                                <h4><?php the_field('job_description_noora')?></h4>
                            </div>
                            <div class="col-md-5 offset-md-1 pb-5">
                                <p><?php the_field('description_noora')?></p>
                                <div class="content-btn">
                                    <a href="<?php the_field('link_noora'); ?>">Go to profile page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
