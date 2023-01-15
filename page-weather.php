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

	<section id="weather">
		<div class="container-lg my-5">
			<div class="h1 pb-3">
				Weather forecast
			</div>
			<div class="row justify-content-center align-items-center">
				<iframe width="1000" height="400"
					src="https://data.gov.sg/dataset/weather-forecast/resource/571ef5fb-ed31-48b2-85c9-61677de42ca9/view/4c127d9a-cba6-445a-8fc1-978b565f9bf7"
					frameBorder="0"> </iframe>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();