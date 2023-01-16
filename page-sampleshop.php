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
					<h1>THE<br>SAMPLE SHOP</h1>
					<p class="d-none d-lg-block d-xl-block ">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						sed do
						eiusmod tempor incididunt ut labore
						et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
						ut
						aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
					<div class="intro-buttons d-flex justify-content-center align-items-center gap-5 mt-4">
						<a href="#shop-details">
							<button type="button" class="btn btn-outline-light">LEARN MORE</button>
						</a>
						<a href="#shop-details">
							<button type="button" class="btn btn-outline-light">CONTACT US</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="shop-details">
		<div class="container-lg ">
			<div class="row justify-content-around">
				<div class="col-lg-9 col-sm-12">
					<div class="h1 mt-5 ">
						THE SAMPLE SHOP
					</div>
					<small>Life style & Gifts</small>
					<div class="p mt-3 mb-5">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore
						et
						dolore magna aliqua. Nulla at volutpat diam ut venenatis tellus in. Sit amet venenatis urna
						cursus
						eget
						nunc scelerisque viverra mauris. Sed enim ut sem viverra aliquet eget. Purus faucibus ornare
						suspendisse
						sed nisi lacus sed. Sit amet facilisis magna etiam tempor orci. Sit amet massa vitae tortor
						condimentum.
						Lacus luctus accumsan tortor posuere ac ut consequat semper. Mi ipsum faucibus vitae aliquet nec
						ullamcorper sit amet risus. Dictum varius duis at consectetur lorem donec. Nibh cras pulvinar
						mattis
						nunc sed blandit libero volutpat. Tortor posuere ac ut consequat. Natoque penatibus et magnis
						dis
						parturient montes nascetur ridiculus. Amet tellus cras adipiscing enim eu. Sit amet est placerat
						in
						egestas erat imperdiet sed euismod. Mauris pharetra et ultrices neque ornare. Integer vitae
						justo
						eget
						magna.
						<br><br>
						Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Lobortis mattis aliquam
						faucibus
						purus
						in massa. Habitasse platea dictumst quisque sagittis. Mollis nunc sed id semper risus. Blandit
						volutpat
						maecenas volutpat blandit aliquam etiam erat. Phasellus vestibulum lorem sed risus ultricies
						tristique
						nulla aliquet. Elit sed vulputate mi sit amet mauris commodo. Fringilla phasellus faucibus
						scelerisque
						eleifend donec pretium vulputate sapien. Vehicula ipsum a arcu cursus. Nulla facilisi etiam
						dignissim
						diam quis enim lobortis. Arcu odio ut sem nulla pharetra diam sit.
					</div>
				</div>

				<div class="row col-lg-3 col-sm-12 mt-5 shop-details">
					<div class="location">
						<h3>
							Location
						</h3>
						<p>Level-01, Area - A
							<br>Nearest parking: Zone B Carpark
						</p>
					</div>

					<div class="open-hours">
						<h3>
							Operating Hours
						</h3>
						<p>Sun - Thu: 11am - 10pm<br>
							Fri, Sat & eve of PH: 11am - 11pm</p>
					</div>

					<div class="contact">
						<h3>
							Contact Us
						</h3>
						<p>Phone: +65 1234 5678<br>
							Email: email@domain.com</p>
					</div>

					<div class="web">
						<h3>
							Website
						</h3>
						<a href="www.sampleshop.com" class="text-decoration-none">
							<p class="text-decoration-none">www.sampleshop.com</p>
						</a>
					</div>

				</div>

			</div>

		</div>
	</section>

	<section id="gallery">
		<div class="container-lg">
			<div class="carousel-header mb-4">
				<h1>GALLERY</h1>
			</div>
			<div id="carouselExampleAutoplaying" class="carousel slide mb-5" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img-1.jpg"
							class="d-block w-100" alt="image-slider">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img-2.jpg"
							class="d-block w-100" alt="image-slider">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img-3.jpg"
							class="d-block w-100" alt="image-slider">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img-4.jpg"
							class="d-block w-100" alt="image-slider">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img-5.jpg"
							class="d-block w-100" alt="image-slider">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img-6.jpg"
							class="d-block w-100" alt="image-slider">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
					data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
					data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();