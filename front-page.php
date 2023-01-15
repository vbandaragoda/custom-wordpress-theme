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

	<section id="intro">
		<div class="masthead"
			style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/intro-img.jpg');">
			<div class="color-overlay d-flex justify-content-center align-items-center">
				<div class="intro-text">
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
						<button type="button" class="btn btn-outline-light">VISIT STORES</button>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="filter-search">
		<div class="filter-offcanvas ">

			<div class="container-lg filter-buttons my-5">
				<div class="row align-items-center justify-content-center">
					<div class="col-12 col-lg-2">
						<button class="btn btn-outline-secondary px-4 " type="button" data-bs-toggle="offcanvas"
							data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-filter-left" viewBox="0 0 16 16">
								<path
									d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
							</svg>
							FILTERS
						</button>
					</div>
					<div class="col-12 col-lg-3">
						<div class="input-group ">
							<input type="text" class="form-control ps-3" placeholder="Search by store"
								aria-label="Search by store" aria-describedby="button-addon2">
							<button class="btn btn-outline-secondary" type="button" id="button-addon2">SEARCH</button>
						</div>
					</div>
				</div>
			</div>

			<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
				aria-labelledby="offcanvasExampleLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasExampleLabel">Filters</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<div>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</div>
					<div class="">

					</div>
					<button class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Done</button>
				</div>
			</div>
		</div>
	</section>


</main>

<?php

get_footer();