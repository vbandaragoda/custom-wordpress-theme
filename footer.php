<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shopping-mall
 */

?>

<footer id="colophon" class="site-footer">

	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

		<symbol id="twitter" viewBox="0 0 16 16">
			<path
				d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
		</symbol>

	</svg>


	<!-- Footer -->

	<div class="bg-light">
		<div class="container">

			<!-- Breadcrumbs -->
			<nav class="pt-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<?php
					$current_page = $_SERVER['REQUEST_URI'];
					$breadcrumb = explode("/", $current_page);
					$breadcrumb_pages = array("home" => "");
					$url = "";

					foreach ($breadcrumb as $crumb) {
						if (empty($crumb)) {
							continue;
						}

						$url .= "/" . $crumb;
						echo '<li class="breadcrumb-item">';
						if (array_key_exists($crumb, $breadcrumb_pages)) {
							echo '<a href="' . $url . '">' . $breadcrumb_pages[$crumb] . '</a>';
						} else {
							echo $crumb;
						}
						echo '</li>';
					}
					echo '<li class="breadcrumb-item active">' . end($breadcrumb_pages) . '</li>';
					?>
				</ol>
			</nav>

			<footer class="py-3 justify-space-between ">
				<div class="row">
					<div class="col-lg-3 col-6">
						<h5>Lorem</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-6">
						<h5>Lorem</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-6">
						<h5>Lorem</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-6">
						<h5>Contact us</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a class="nav-link p-0 text-muted">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-telephone-fill" viewBox="0 0 16 16">
										<path fill-rule="evenodd"
											d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
									</svg>
									Email: email@domain.com
								</a></li>
							<li class="nav-item mb-2"><a class="nav-link p-0 text-muted">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-envelope-fill" viewBox="0 0 16 16">
										<path
											d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
									</svg>
									Telephone: +65 1234 5678
								</a></li>
						</ul>
					</div>
				</div>

				<div class="d-flex justify-content-center pt-4 mt-4 border-top">
					<p>&copy; 2023 Company. All rights reserved.</p>
				</div>
			</footer>
		</div>
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>