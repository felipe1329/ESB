<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>

	<!-- <header class="page-header alignwide">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		<?php if ( $description ) : ?>
			<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
	</header> -->

    <section class="seminars-page">
        <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '</p><p id="breadcrumbs">','</p><p>' );}?>

            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-8">
                    <div class="header-seminars-page">
                        <h3>Seminars</h3>
                        <h1>Discover the world <br> of Blockchain & Future Technologies</h1>
                        <p>How it works and business applications with our highly specialized <br> training instructors.</p>
                    </div>
                </div>
            </div>

            <div class="content-post-seminars">
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-9">
                        <p class="title-seminars-slider">Join our seminars and workshops</p>
                    </div>
                </div>
                <div class="row slider-content">
                    <div class="col-md-1 offset-md-1">
                        <nav class="tabs">
                            <label class="nav" for="tab-1">Coming</label>
                            <label class="nav" for="tab-2">Oldest</label>
                        </nav>
                    </div>
                    <div class="col-md-9 offset-md-1">
                        <article class="content">
                            <section class="slider-coming">
                                <?php while ( have_posts() ) : ?>
                                    <div class="item">
                                        <?php
                                        foreach (get_the_category() as $category) {
                                            if ( $category->name == 'Coming' ) {
                                                the_post();
                                                get_template_part( 'template-parts/content/content-seminars', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
                                            }
                                        }?>
                                    </div>
                                <?php endwhile; ?>
                            </section>
                            <section class="slider-oldest">

                            </section>
                            <input type="radio" name="tabs" id="tab-1" hidden checked />
                            <input type="radio" name="tabs" id="tab-2" hidden />
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class="newsletter-page">
        <div class="container">
            <div class="content-newsletter">
                <div class="row">
                    <div class="col-md-3 offset-md-2">
                        <div class="content-text">
                            <h3>Keep updated!</h3>
                            <p>Be the first to hear about our upcoming seminars!</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content-input">
                            <!-- <form action="">
                                <?php echo apply_shortcodes( '[contact-form-7 id="216" title="Subscribe form"]' ); ?>
                            </form> -->

                            <input placeholder="Your email" type="email">
                            <button data-bs-target="#modal-success" data-bs-toggle="modal" data-bs-dismiss="modal">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal-custom-success modal fade" id="modal-success" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Thanks for signing up!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?= get_home_url() ?>/wp-content/uploads/2023/05/thanks-for-signing-up@2x.png" alt="">
                    <p>You’ll receive an email with instructions to proceed with payment.</p>
                </div>
            </div>
        </div>
    </div>

    <?php else : ?>
        <?php get_template_part( 'template-parts/content/content-none' ); ?>
    <?php endif; ?>
<?php
get_footer();
