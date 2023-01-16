<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package shopping-mall
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found ps-5 pt-5">
		<header class="page-header">
			<h1 class="page-title  ">
				<?php esc_html_e('Oops! That page can&rsquo;t be found.', 'custom-shopping-mall-theme'); ?>
			</h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'custom-shopping-mall-theme'); ?></p>

			<?php


			the_widget('WP_Widget_Recent_Posts');
			?>

			<div class="widget widget_categories">
				<h2 class="widget-title">
					<?php esc_html_e('Most Used Categories', 'custom-shopping-mall-theme'); ?>
				</h2>
				<ul>
					<?php
					wp_list_categories(
						array(
							'orderby' => 'count',
							'order' => 'DESC',
							'show_count' => 1,
							'title_li' => '',
							'number' => 10,
						)
					);
					?>
				</ul>
			</div><!-- .widget -->
			<div class="container">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div>

		</div><!-- .page-content -->
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();