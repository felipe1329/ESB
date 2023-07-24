<?php
/**
 * The template for displaying blog pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$object_page = get_queried_object();
$currentPage = get_query_var('paged');

// General arguments

$posts = new WP_Query(
	array(
		'post_type' => 'blog',
		'category_name' => $_GET['cat'] ?? '',
		'posts_per_page' => 4,
		'paged' => $currentPage
	)
);


$page_for_posts = get_option('page_for_posts');
$fields = get_fields($page_for_posts);

$categories = get_categories();
?>

<section class="blog-page pb-5">
	<div class="container mb-4">
		<?php if (function_exists('yoast_breadcrumb')) {
			yoast_breadcrumb('</p><p id="breadcrumbs">', '</p><p>');
		} ?>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 offset-md-2">
				<div class="feature-post">
					<span><b>
							<?= $object_page->label ?>
						</b></span>
					<h2 class="title" data-aos="fade-in" data-aos-duration="500">
						<?= $fields['feature']->post_title ?>
					</h2>
					<p>
						<?= get_field('short_text', $fields['feature']->ID) ?>
					</p>
				</div>
			</div>
			<div class="col offset-md-2 pe-md-0">
				<div>
					<div class="content-info d-flex justify-content-between">
						<div class="autor-info">
							<div class="d-flex">
								<figure>
									<img src="<?= get_field('author_image', $fields['feature']->ID) ?>"
										alt="<?= get_field('author_name', $fields['feature']->ID) ?>" class="avatar">
								</figure>
								<span class="name me-2">
									<?= get_field('author_name', $fields['feature']->ID) ?> -
									<?= date("M, d, Y", strtotime($fields['feature']->post_date)) ?>
								</span>
								<span class="reading-time">
									<img src="<?= get_theme_file_uri() ?>/assets/src/img/reading-time.svg" alt="reading"
										class="me-1">
									<?= get_field('time_reading', $fields['feature']->ID) ?> min. read
								</span>
							</div>
							<span class="tag">
								<?= get_the_category($fields['feature']->ID)[0]->name ?>
							</span>
						</div>
						<a href="<?= get_permalink($fields['feature']->ID) ?>" class="btn-main-site">Read more</a>
						<img data-aos="fade-up" data-aos-duration="1500"
							src="<?= get_field('featured_article_image', $fields['feature']->ID) ?>"
							class="img-fluid col-6 block-image d-none d-md-block" />
					</div>
					<div class="img-mobile">
						<img data-aos="fade-up" data-aos-duration="1500"
							src="<?= get_theme_file_uri() ?>/assets/dist/img/image-mobile.png"
							class="img-fluid col-9 my-4 d-block d-md-none" />
					</div>
					<div class="texture-1">
						<img src="<?= get_theme_file_uri() ?>/assets/src/img/texture-1.svg" alt="texture">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 offset-md-1">
				<div class="categories">
					<h4>Categories</h4>
					<ul>
						<li class="<?= (!isset($_GET['cat']) || $_GET['cat'] == '') ? 'current' : '' ?>"><a href="?cat=">All</a></li>
						<?php foreach($categories as $category) { ?>
							<?php if($category->slug != 'coming') { ?>
								<li class="<?= (isset($_GET['cat']) && $_GET['cat'] == $category->slug) ? 'current' : '' ?>"><a href="?cat=<?= $category->slug ?>"><?= $category->name ?></a></li>
							<?php } ?>
						<?php } ?>
					</ul>

				</div>
			</div>

			<div class="col-md-5">
				<div class="search-bar mb-4">
					<input type="text" placeholder="Search" class="d-block">
					<button type="submit" class="btn"><img src="<?= get_theme_file_uri() ?>/assets/src/img/search.svg"
							alt="search"></button>
				</div>

				<div class="blog-list">
					<?php if ($posts->have_posts()) { ?>
						<?php foreach ($posts->posts as $key => $value) { ?>
							<article data-aos="fade-up" data-aos-duration="1500">
								<h3><a href="<?= get_permalink($value->ID) ?>"><?= $value->post_title ?></a></h3>
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
											<span class="reading-time">
												<img src="<?= get_theme_file_uri() ?>/assets/src/img/reading-time.svg"
													alt="reading" class="me-1">
												<?= get_field('time_reading', $value->ID) ?> min. read
											</span>
										</div>
										<span class="tag">
											<?= get_the_category($value->ID)[0]->name ?>
										</span>
									</div>
									<a href="<?= get_permalink($value->ID) ?>" class="btn-main-site">Read more</a>
								</div>
								<div class="separator"></div>
							</article>
						<?php } ?>

						<div class="paginator">
							<?php
							// Bottom pagination (pagination arguments)
						
							echo "<div class='page-nav-container'>" . paginate_links(
								array(
									'total' => $posts->max_num_pages,
									'prev_text' => __('<'),
									'next_text' => __('>')
								)
							) . "</div>";
							?>
						</div>
					<?php } ?>
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
								class="btn-main-site btn-first-modal-<?= $fields['seminar_post']->ID ?> me-3 me-md-0">Know more</a>
							<a data-bs-toggle="modal" href="#modal-form" role="button" class="btn-main-site btn-blue"
								href="">Enroll now</a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>

	<?php if (count($posts->posts) > 2) { ?>
		<div class="texture-2">
			<img src="<?= get_theme_file_uri() ?>/assets/src/img/texture-2.svg" alt="texture">
		</div>
	<?php } ?>
</section>

<?php get_footer(); ?>