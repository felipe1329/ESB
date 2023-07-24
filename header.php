<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="content-item-header">
				<div class="hambuerger-menu">
					<svg viewBox="0 0 100 80" width="24" height="24">
						<rect fill="#62b6d8" width="100" height="7"></rect>
						<rect fill="#62b6d8" y="30" width="60" height="7"></rect>
						<rect fill="#62b6d8" y="60" width="100" height="7"></rect>
					</svg>
				</div>
				<div class="site-branding">
					<a href="<?php echo home_url(); ?>"><img class="site-logo" src="<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt=""></a>
				</div><!-- .site-branding -->
				<div class="content-button-header">
					<a data-bs-toggle="modal" class="btn-enroll" href="#modal-form-header">
					Discovery Call
					</a>
				</div>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<div class="container">
				<div class="close-nav">
				<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px" fill="#fff" ><path d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"/></svg>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-main', 'menu_id' => 'menu-main' ) ); ?>
			</div>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div class="modal-know-seminars modal fade" id="modal-more" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Here goes a seminar tittle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Ever feel like you’re overwhelmed by catching up with how fast digital technologies are evolving?
                    Most people would spend months figuring out how future technologies and blockchain works.</p>
                    <p>Our leading instructors will set the framework for bringing you one step closer to a prosperous future by teaching how the technology works and giving up-to-date insights and practical knowledge on business innovative application ideas.</p>
                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque eget sem interdum, placerat odio non, lacinia lectus. Aliquam vulputate at augue ac vestibulum. Nunc id consequat massa.</p>
                    <p>Ut viverra nec lacus in placerat. Etiam tempus lacus ut iaculis interdum. Sed est enim, pellentesque at lacinia in, convallis in leo. Proin ullamcorper non tellus eget commodo.</p>
                    <p>Ut sollicitudin, est a pretium iaculis, sapien nunc feugiat ligula, a blandit libero ipsum sed mauris. Phasellus sodales odio quam, eu tincidunt felis sodales vel. Aenean at mollis augue. Morbi lectus mi, vestibulum a elementum ut, blandit eu ipsum. Nulla enim magna, congue ut vehicula quis, malesuada vel nulla. In hac habitasse platea dictumst.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn-know" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="btn-enroll" data-bs-target="#modal-form" data-bs-toggle="modal" data-bs-dismiss="modal">Enroll now</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-know-seminars modal-two modal fade" id="modal-form" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Sign up to enroll</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Enroll now and start learning new blockchain skills!</p>
                    <?= do_shortcode('[contact-form-7 id="279" title="Header Form"]') ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-know-seminars modal-two modal fade" id="modal-form-header" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Schedule a Call</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Fill in the form to schedule a Discovery Call with one of our Blockchain Instructors to learn more about our Advanced Blockchain Training Programs.</p>
                    <?= do_shortcode('[contact-form-7 id="280" title="Header Form Discover Call"]') ?>
                </div>
            </div>
        </div>
    </div>

	<div id="content" class="site-content">
