<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shopping-mall
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'custom-shopping-mall-theme'); ?>
		</a>


		<!-- Navbar -->

		<nav class="navbar navbar-expand-lg bg-light shadow mb-4 bg-body rounded ">
			<div class="container-lg">
				<div class="site-header__logo">
					<?php the_custom_logo(); ?>
				</div>

				<!-- <a class="navbar-brand" href="#">Navbar</a> -->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item h6 ">
							<a class="nav-link text-secondary" href="#">ARTICLES</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>



		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php esc_html_e('Primary Menu', 'custom-shopping-mall-theme'); ?>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id' => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		</header><!-- #masthead -->