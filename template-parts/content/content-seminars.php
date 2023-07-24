<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <?php twenty_twenty_one_post_thumbnail(); ?>
        <h2><?php the_title();?></h2>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
		the_content(
			twenty_twenty_one_continue_reading_text()
		);

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);

		?>
	</div><!-- .entry-content -->

    <div class="content-seminars-info">
        <div class="item">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path data-name="Path 18" d="M0 0h20v20H0z" style="fill:none"/>
                    <path data-name="Path 19" d="M10.333 18.667a8.333 8.333 0 1 1 8.333-8.333 8.333 8.333 0 0 1-8.333 8.333zm.833-8.333V6.167H9.5V12h5v-1.667z" transform="translate(-.333 -.333)" style="fill:#103059"/>
                </svg>
                <p class="item-time"><?php the_field('seminars_time'); ?></p>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path data-name="Path 24" d="M0 0h20v20H0z" style="fill:none"/>
                    <path data-name="Path 25" d="M14.5 2.667h3.333a.833.833 0 0 1 .833.833v13.333a.833.833 0 0 1-.833.833h-15A.833.833 0 0 1 2 16.833V3.5a.833.833 0 0 1 .833-.833h3.334V1h1.666v1.667h5V1H14.5zm-10.833 5V16H17V7.667zM5.333 11H9.5v3.333H5.333z" transform="translate(-.333 -.167)" style="fill:#103059"/>
                </svg>
                <p><?php the_field('seminars_date'); ?></p>
            </div>
        </div>
        <div class="item">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path data-name="Path 471" d="M0 0h20v20H0z" style="fill:none"/>
                    <path data-name="Path 472" d="m15.8 14.8-5.3 5.3-5.3-5.3a7.5 7.5 0 1 1 10.607 0zm-5.3-1.97A3.333 3.333 0 1 0 7.167 9.5a3.333 3.333 0 0 0 3.333 3.333zm0-1.667A1.667 1.667 0 1 1 12.167 9.5a1.667 1.667 0 0 1-1.667 1.667z" transform="translate(-.5 -.333)" style="fill:#103059"/>
                </svg>
                <p><?php the_field('seminars_location'); ?></p>
            </div>
            <div>
                <img src="<?= get_home_url() ?>/wp-content/uploads/2023/07/uae-dinar.png" alt="">
                <p><?php the_field('seminars_price'); ?></p>
            </div>
        </div>
        <div class="content-tags-post">
            <?php 
                $post_tags = get_the_tags();

                if ( $post_tags ) {
                    foreach( $post_tags as $tag ) {
                    echo '<a class="tag-seminars" href="#">'; 
                    echo $tag->name;
                    echo '</a>'; 
                    }
                }
            ?>
        </div>
    </div>

    <div class="content-button-seminars">
        <a data-bs-toggle="modal" href="#modal-more" role="button" class="btn-know btn-first-modal-<?php the_ID();?>">Know more</a>
        <a data-bs-toggle="modal" href="#modal-form" role="button" class="btn-enroll" href="">Enroll now</a>
    </div>

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
