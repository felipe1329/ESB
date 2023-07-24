<section class="banner-home">
    <?php
    $image = get_field('background_desktop');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <div class="content-banner-home">
        <div class="container">
            <!-- <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '</p><p id="breadcrumbs">','</p><p>' );}?> -->
        </div>
        <div class="content-center">
            <?php the_field('title_page')?>
            <div class="content-popup-video-home">
                <div class="icon-player">
                    <div class="content-icon">
                        <svg width="800px" height="800px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none"><path fill="#fff" d="M8 1.25a2.101 2.101 0 00-1.785.996l.64.392-.642-.388-5.675 9.373-.006.01a2.065 2.065 0 00.751 2.832c.314.183.67.281 1.034.285h11.366a2.101 2.101 0 001.791-1.045 2.064 2.064 0 00-.006-2.072L9.788 2.25l-.003-.004A2.084 2.084 0 008 1.25z"/></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="content-home-icons">
                <?php the_field('description')?>
                <div class="social-links">
                    <?php if( have_rows('social_links') ): ?>
                        <?php while( have_rows('social_links') ): the_row();?>

                        <?php if( get_sub_field('link_youtube') ): ?>
                            <a target="blank" href="<?php the_sub_field('link_youtube')?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path data-name="Path 844" d="M0 0h24v24H0z" style="fill:none"/>
                                    <path data-name="Path 845" d="M21.543 6.5A31.058 31.058 0 0 1 22 12a31.058 31.058 0 0 1-.457 5.5 2.811 2.811 0 0 1-1.943 2.024C17.9 20 12 20 12 20s-5.893 0-7.605-.476A2.811 2.811 0 0 1 2.457 17.5 31.058 31.058 0 0 1 2 12a31.058 31.058 0 0 1 .457-5.5 2.811 2.811 0 0 1 1.938-2.024C6.107 4 12 4 12 4s5.9 0 7.6.476A2.811 2.811 0 0 1 21.543 6.5zM10 15.5l6-3.5-6-3.5z" style="fill:#62b6d8"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        <?php if( get_sub_field('link_linkedin') ): ?>
                            <a target="blank" href="<?php the_sub_field('link_linkedin')?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path data-name="Path 842" d="M0 0h24v24H0z" style="fill:none"/>
                                    <path data-name="Path 843" d="M18.335 18.339H15.67v-4.177c0-1-.02-2.278-1.39-2.278-1.389 0-1.6 1.084-1.6 2.2v4.25h-2.667V9.75h2.56v1.17h.035a2.812 2.812 0 0 1 2.528-1.387c2.7 0 3.2 1.778 3.2 4.091v4.715zM7 8.575a1.548 1.548 0 1 1 1.551-1.547A1.546 1.546 0 0 1 7 8.575zm1.336 9.764h-2.67V9.75H8.34v8.589zM19.67 3H4.329A1.312 1.312 0 0 0 3 4.3v15.4A1.312 1.312 0 0 0 4.328 21h15.338A1.317 1.317 0 0 0 21 19.7V4.3A1.317 1.317 0 0 0 19.666 3z" style="fill:#62b6d8"/>
                                </svg>
                            </a>
                        <?php endif; ?>

                        <?php if( get_sub_field('link_instagram') ): ?>
                            <a target="blank" href="<?php the_sub_field('link_instagram')?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path data-name="Path 3" d="M0 0h24v24H0z" style="fill:none"/>
                                    <path data-name="Path 4" d="M12 2c2.717 0 3.056.01 4.122.06a7.367 7.367 0 0 1 2.428.465 4.876 4.876 0 0 1 1.772 1.153 4.908 4.908 0 0 1 1.153 1.772 7.387 7.387 0 0 1 .465 2.428C21.987 8.944 22 9.283 22 12s-.01 3.056-.06 4.122a7.393 7.393 0 0 1-.465 2.428 5.106 5.106 0 0 1-2.925 2.925 7.387 7.387 0 0 1-2.428.465c-1.066.047-1.4.06-4.122.06s-3.056-.01-4.122-.06a7.393 7.393 0 0 1-2.428-.465 5.106 5.106 0 0 1-2.925-2.925 7.361 7.361 0 0 1-.465-2.428C2.013 15.056 2 14.717 2 12s.01-3.056.06-4.122a7.361 7.361 0 0 1 .465-2.428 4.88 4.88 0 0 1 1.153-1.772A4.9 4.9 0 0 1 5.45 2.525a7.361 7.361 0 0 1 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm6.5-.25A1.25 1.25 0 1 0 17.25 8a1.25 1.25 0 0 0 1.25-1.25zM12 9a3 3 0 1 1-3 3 3 3 0 0 1 3-3z" style="fill:#62b6d8"/>
                                </svg>
                            </a>
                        <?php endif; ?>

                        <?php if( get_sub_field('link_twitter') ): ?>
                            <a target="blank" href="<?php the_sub_field('link_twitter')?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path data-name="Path 5" d="M0 0h24v24H0z" style="fill:none"/>
                                    <path data-name="Path 6" d="M22.162 5.656a8.384 8.384 0 0 1-2.4.658A4.2 4.2 0 0 0 21.6 4a8.358 8.358 0 0 1-2.656 1.015 4.182 4.182 0 0 0-7.126 3.814A11.874 11.874 0 0 1 3.2 4.459a4.188 4.188 0 0 0 1.294 5.584A4.168 4.168 0 0 1 2.6 9.52v.052a4.185 4.185 0 0 0 3.354 4.1 4.21 4.21 0 0 1-1.889.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88 11.819 11.819 0 0 0 11.9-11.9c0-.18 0-.362-.013-.54a8.5 8.5 0 0 0 2.087-2.165z" style="fill:#62b6d8"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="content-popup-video">
    <div class="content-modal">
        <div class="close-modal">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="30" height="30"
            viewBox="0 0 30 30">
                <path d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"></path>
            </svg>
        </div>
        <div style="position: relative;">
            <iframe width="800" height="500" src="<?php the_field('home_video_url')?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen title="Website Video - April (Captions on)"></iframe>
        </div>
        <script src="https://player.vimeo.com/api/player.js"></script>
    </div>
</div>
