<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mamanbaba
 */

get_header();
?>

<main id="primary" class="site-main mainView archiveBlog">

<div class="TopTitle">
	<h1>مقالات سمعک میرداماد</h1>
	<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیا</p>
</div>
	<div class="blogItemsCategory">
		<div #swiperRef="" class="swiper blogSwiper">
			<div class="swiper-wrapper">
				
				<?php
					$categories = get_terms( array(
						'taxonomy' => 'category',
						'hide_empty' => true,
						'exclude' => array('1')
					) );

					foreach ($categories as $category) {
						$category_count = $category->count;
						echo '<div class="swiper-slide">';
						echo '<a class="itemsCatParent" href="' . get_category_link($category->term_id) . '">';
						echo '<span class="blogCatItem" >' . $category->name . '</span>';
						echo '</a>';
						echo '</div>';
					}
				?>
				
			</div>
		</div>
		<div class="swiper-button-next">
			<svg width="20" height="20" viewBox="0 0 0.6 0.6" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)"><path d="m.325.2-.1.1m0 0 .1.1m-.1-.1h.3M.487.175a.225.225 0 1 0 0 .25" stroke="#000" stroke-width=".05" stroke-linecap="round" stroke-linejoin="round"/></svg>
		</div>
		<div class="swiper-button-prev">
			<svg width="20" height="20" viewBox="0 0 0.6 0.6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m.325.2-.1.1m0 0 .1.1m-.1-.1h.3M.487.175a.225.225 0 1 0 0 .25" stroke="#000" stroke-width=".05" stroke-linecap="round" stroke-linejoin="round"/></svg>
		</div>
	</div>
	<div class="blogFeaturedContent">
	<?php

		/* Start the Loop */

		while ( have_posts() ) :

			the_post();



			/*

			* Include the Post-Type-specific template for the content.

			* If you want to override this in a child theme, then include a file

			* called content-___.php (where ___ is the Post Type name) and that will be used instead.

			*/

			get_template_part( 'template-parts/content', 'archive' );



		endwhile;

		?>

		</div>

</div>


</main><!-- #main -->

<?php
get_footer();
