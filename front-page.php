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
			style="background-image: url(<?php echo get_template_directory_uri() . '/img/intro-img.jpg' ?>);">
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
						<a href="/articles">
							<button type="button" class="btn btn-outline-light">LEARN MORE</button>
						</a>
						<a href="/shops">
							<button type="button" class="btn btn-outline-light">VISIT STORES</button>
						</a>
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

							<?php get_search_form() ?>
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
					<div class="p">
						Select the categories you want.
					</div>
					<div class="categories">
						<div class="row align-items-center justify-content-center">
							<div class="col-5">
								<div class="form-check py-3">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Lorem
									</label>
								</div>
							</div>

							<div class="col-5">
								<div class="form-check py-3">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Lorem
									</label>
								</div>
							</div>

						</div>
					</div>

					<div class="categories">
						<div class="row align-items-center justify-content-center">
							<div class="col-5">
								<div class="form-check py-3">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Lorem
									</label>
								</div>
							</div>

							<div class="col-5">
								<div class="form-check py-3">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Lorem
									</label>
								</div>
							</div>

						</div>
					</div>

					<div class="categories">
						<div class="row align-items-center justify-content-center">
							<div class="col-5">
								<div class="form-check py-3">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Lorem
									</label>
								</div>
							</div>

							<div class="col-5">
								<div class="form-check py-3">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Lorem
									</label>
								</div>
							</div>

						</div>
					</div>

					<div class="categories">
						<div class="row align-items-center justify-content-center">
							<div class="col-5">
								<div class="form-check py-3">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Lorem
									</label>
								</div>
							</div>

							<div class="col-5">
								<div class="form-check py-3">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										Lorem
									</label>
								</div>
							</div>

						</div>
					</div>
					<button class="col-12 btn btn-outline-secondary mt-3" data-bs-dismiss="offcanvas">Apply</button>
				</div>
			</div>
		</div>


		<div class="container-lg shops mb-5">

			<div class="row align-items-center d-flex justify-content-around">

				<div class="col-sm-10 col-md-6 col-lg-3 d-flex align-items-center justify-content-around">
					<a href="/sampleshop" class="text-decoration-none">
						<div class="card border-0 shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/card-img.jpg" class="card-img-top"
								alt="shop-logo">
							<div class="card-body">
								<h5 class="card-title text-center pb-2 mb-4 text-secondary border-bottom border-light">
									Sample Shop
								</h5>
								<span class="border-top"></span>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
										<path
											d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
									</svg>
									Level-01, Area-A
								</p>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-watch" viewBox="0 0 16 16">
										<path d="M8.5 5a.5.5 0 0 0-1 0v2.5H6a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V5z" />
										<path
											d="M5.667 16C4.747 16 4 15.254 4 14.333v-1.86A5.985 5.985 0 0 1 2 8c0-1.777.772-3.374 2-4.472V1.667C4 .747 4.746 0 5.667 0h4.666C11.253 0 12 .746 12 1.667v1.86a5.99 5.99 0 0 1 1.918 3.48.502.502 0 0 1 .582.493v1a.5.5 0 0 1-.582.493A5.99 5.99 0 0 1 12 12.473v1.86c0 .92-.746 1.667-1.667 1.667H5.667zM13 8A5 5 0 1 0 3 8a5 5 0 0 0 10 0z" />
									</svg>
									09:00 a.m. - 10:00 p.m.
								</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-sm-10 col-md-6 col-lg-3 d-flex align-items-center justify-content-around">
					<a href="/sampleshop" class="text-decoration-none">
						<div class="card border-0 shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
							<img src=<?php echo get_template_directory_uri() . "/img/card-img.jpg" ?>
								class="card-img-top" alt="shop-logo">
							<div class="card-body">
								<h5 class="card-title text-center pb-2 mb-4 text-secondary border-bottom border-light">
									Sample Shop
								</h5>
								<span class="border-top"></span>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
										<path
											d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
									</svg>
									Level-01, Area-A
								</p>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-watch" viewBox="0 0 16 16">
										<path d="M8.5 5a.5.5 0 0 0-1 0v2.5H6a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V5z" />
										<path
											d="M5.667 16C4.747 16 4 15.254 4 14.333v-1.86A5.985 5.985 0 0 1 2 8c0-1.777.772-3.374 2-4.472V1.667C4 .747 4.746 0 5.667 0h4.666C11.253 0 12 .746 12 1.667v1.86a5.99 5.99 0 0 1 1.918 3.48.502.502 0 0 1 .582.493v1a.5.5 0 0 1-.582.493A5.99 5.99 0 0 1 12 12.473v1.86c0 .92-.746 1.667-1.667 1.667H5.667zM13 8A5 5 0 1 0 3 8a5 5 0 0 0 10 0z" />
									</svg>
									09:00 a.m. - 10:00 p.m.
								</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-sm-10 col-md-6 col-lg-3 d-flex align-items-center justify-content-around">
					<a href="/sampleshop" class="text-decoration-none">
						<div class="card border-0 shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
							<img src=<?php echo get_template_directory_uri() . "/img/card-img.jpg" ?>
								class="card-img-top" alt="shop-logo">
							<div class="card-body">
								<h5 class="card-title text-center pb-2 mb-4 text-secondary border-bottom border-light">
									Sample Shop
								</h5>
								<span class="border-top"></span>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
										<path
											d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
									</svg>
									Level-01, Area-A
								</p>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-watch" viewBox="0 0 16 16">
										<path d="M8.5 5a.5.5 0 0 0-1 0v2.5H6a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V5z" />
										<path
											d="M5.667 16C4.747 16 4 15.254 4 14.333v-1.86A5.985 5.985 0 0 1 2 8c0-1.777.772-3.374 2-4.472V1.667C4 .747 4.746 0 5.667 0h4.666C11.253 0 12 .746 12 1.667v1.86a5.99 5.99 0 0 1 1.918 3.48.502.502 0 0 1 .582.493v1a.5.5 0 0 1-.582.493A5.99 5.99 0 0 1 12 12.473v1.86c0 .92-.746 1.667-1.667 1.667H5.667zM13 8A5 5 0 1 0 3 8a5 5 0 0 0 10 0z" />
									</svg>
									09:00 a.m. - 10:00 p.m.
								</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-sm-10 col-md-6 col-lg-3 d-flex align-items-center justify-content-around">
					<a href="/sampleshop" class="text-decoration-none">
						<div class="card border-0 shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
							<img src=<?php echo get_template_directory_uri() . "/img/card-img.jpg" ?>
								class="card-img-top" alt="shop-logo">
							<div class="card-body">
								<h5 class="card-title text-center pb-2 mb-4 text-secondary border-bottom border-light">
									Sample Shop
								</h5>
								<span class="border-top"></span>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
										<path
											d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
									</svg>
									Level-01, Area-A
								</p>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-watch" viewBox="0 0 16 16">
										<path d="M8.5 5a.5.5 0 0 0-1 0v2.5H6a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V5z" />
										<path
											d="M5.667 16C4.747 16 4 15.254 4 14.333v-1.86A5.985 5.985 0 0 1 2 8c0-1.777.772-3.374 2-4.472V1.667C4 .747 4.746 0 5.667 0h4.666C11.253 0 12 .746 12 1.667v1.86a5.99 5.99 0 0 1 1.918 3.48.502.502 0 0 1 .582.493v1a.5.5 0 0 1-.582.493A5.99 5.99 0 0 1 12 12.473v1.86c0 .92-.746 1.667-1.667 1.667H5.667zM13 8A5 5 0 1 0 3 8a5 5 0 0 0 10 0z" />
									</svg>
									09:00 a.m. - 10:00 p.m.
								</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-sm-10 col-md-6 col-lg-3 d-flex align-items-center justify-content-around">
					<a href="/sampleshop" class="text-decoration-none">
						<div class="card border-0 shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
							<img src=<?php echo get_template_directory_uri() . "/img/card-img.jpg" ?>
								class="card-img-top" alt="shop-logo">
							<div class="card-body">
								<h5 class="card-title text-center pb-2 mb-4 text-secondary border-bottom border-light">
									Sample Shop
								</h5>
								<span class="border-top"></span>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
										<path
											d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
									</svg>
									Level-01, Area-A
								</p>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-watch" viewBox="0 0 16 16">
										<path d="M8.5 5a.5.5 0 0 0-1 0v2.5H6a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V5z" />
										<path
											d="M5.667 16C4.747 16 4 15.254 4 14.333v-1.86A5.985 5.985 0 0 1 2 8c0-1.777.772-3.374 2-4.472V1.667C4 .747 4.746 0 5.667 0h4.666C11.253 0 12 .746 12 1.667v1.86a5.99 5.99 0 0 1 1.918 3.48.502.502 0 0 1 .582.493v1a.5.5 0 0 1-.582.493A5.99 5.99 0 0 1 12 12.473v1.86c0 .92-.746 1.667-1.667 1.667H5.667zM13 8A5 5 0 1 0 3 8a5 5 0 0 0 10 0z" />
									</svg>
									09:00 a.m. - 10:00 p.m.
								</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-sm-10 col-md-6 col-lg-3 d-flex align-items-center justify-content-around">
					<a href="/sampleshop" class="text-decoration-none">
						<div class="card border-0 shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
							<img src=<?php echo get_template_directory_uri() . "/img/card-img.jpg" ?>
								class="card-img-top" alt="shop-logo">
							<div class="card-body">
								<h5 class="card-title text-center pb-2 mb-4 text-secondary border-bottom border-light">
									Sample Shop
								</h5>
								<span class="border-top"></span>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
										<path
											d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
									</svg>
									Level-01, Area-A
								</p>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-watch" viewBox="0 0 16 16">
										<path d="M8.5 5a.5.5 0 0 0-1 0v2.5H6a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V5z" />
										<path
											d="M5.667 16C4.747 16 4 15.254 4 14.333v-1.86A5.985 5.985 0 0 1 2 8c0-1.777.772-3.374 2-4.472V1.667C4 .747 4.746 0 5.667 0h4.666C11.253 0 12 .746 12 1.667v1.86a5.99 5.99 0 0 1 1.918 3.48.502.502 0 0 1 .582.493v1a.5.5 0 0 1-.582.493A5.99 5.99 0 0 1 12 12.473v1.86c0 .92-.746 1.667-1.667 1.667H5.667zM13 8A5 5 0 1 0 3 8a5 5 0 0 0 10 0z" />
									</svg>
									09:00 a.m. - 10:00 p.m.
								</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-sm-10 col-md-6 col-lg-3 d-flex align-items-center justify-content-around">
					<a href="/sampleshop" class="text-decoration-none">
						<div class="card border-0 shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
							<img src=<?php echo get_template_directory_uri() . "/img/card-img.jpg" ?>
								class="card-img-top" alt="shop-logo">
							<div class="card-body">
								<h5 class="card-title text-center pb-2 mb-4 text-secondary border-bottom border-light">
									Sample Shop
								</h5>
								<span class="border-top"></span>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
										<path
											d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
									</svg>
									Level-01, Area-A
								</p>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-watch" viewBox="0 0 16 16">
										<path d="M8.5 5a.5.5 0 0 0-1 0v2.5H6a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V5z" />
										<path
											d="M5.667 16C4.747 16 4 15.254 4 14.333v-1.86A5.985 5.985 0 0 1 2 8c0-1.777.772-3.374 2-4.472V1.667C4 .747 4.746 0 5.667 0h4.666C11.253 0 12 .746 12 1.667v1.86a5.99 5.99 0 0 1 1.918 3.48.502.502 0 0 1 .582.493v1a.5.5 0 0 1-.582.493A5.99 5.99 0 0 1 12 12.473v1.86c0 .92-.746 1.667-1.667 1.667H5.667zM13 8A5 5 0 1 0 3 8a5 5 0 0 0 10 0z" />
									</svg>
									09:00 a.m. - 10:00 p.m.
								</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-sm-10 col-md-6 col-lg-3 d-flex align-items-center justify-content-around">
					<a href="/sampleshop" class="text-decoration-none">
						<div class="card border-0 shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
							<img src=<?php echo get_template_directory_uri() . "/img/card-img.jpg" ?>
								class="card-img-top" alt="shop-logo">
							<div class="card-body">
								<h5 class="card-title text-center pb-2 mb-4 text-secondary border-bottom border-light">
									Sample Shop
								</h5>
								<span class="border-top"></span>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
										<path
											d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
									</svg>
									Level-01, Area-A
								</p>
								<p class="card-text text-secondary lead">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-watch" viewBox="0 0 16 16">
										<path d="M8.5 5a.5.5 0 0 0-1 0v2.5H6a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V5z" />
										<path
											d="M5.667 16C4.747 16 4 15.254 4 14.333v-1.86A5.985 5.985 0 0 1 2 8c0-1.777.772-3.374 2-4.472V1.667C4 .747 4.746 0 5.667 0h4.666C11.253 0 12 .746 12 1.667v1.86a5.99 5.99 0 0 1 1.918 3.48.502.502 0 0 1 .582.493v1a.5.5 0 0 1-.582.493A5.99 5.99 0 0 1 12 12.473v1.86c0 .92-.746 1.667-1.667 1.667H5.667zM13 8A5 5 0 1 0 3 8a5 5 0 0 0 10 0z" />
									</svg>
									09:00 a.m. - 10:00 p.m.
								</p>
							</div>
						</div>
					</a>
				</div>





			</div>
		</div>

	</section>


</main>

<?php

get_footer();