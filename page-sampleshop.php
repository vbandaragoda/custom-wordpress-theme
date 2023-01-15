<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shopping-mall
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="shopping-sample">
		<div class="shopping-sample-masthead"
			style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/sampleshop-img.jpg');">
			<div class="shopping-sample-color-overlay d-flex align-items-center">
				<div class="shopping-sample-text">
					<h1>GET THE BEST <br>SHOPPING EXPERIENCE</h1>
					<p class="d-none d-lg-block d-xl-block ">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						sed do
						eiusmod tempor incididunt ut labore
						et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
						ut
						aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
					<div class="intro-buttons d-flex justify-content-center align-items-center gap-5 mt-4">
						<button type="button" class="btn btn-outline-light">LEARN MORE</button>
						<button type="button" class="btn btn-outline-light">CONTACT US</button>
					</div>
				</div>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();