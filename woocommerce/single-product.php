<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
		<div class="singleProduct mainView">
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>

				<?php wc_get_template_part( 'content', 'single-product' ); ?>

			<?php endwhile; // end of the loop. ?>
			<div class="singleProductLeft">
				<div class="mostView">
					<h2>بیشترین بازدید:</h2>
					<?php
						$args = array(
							'post_type'      => 'product',
							'posts_per_page' => 5, // Change this number to the desired number of products to display
							'meta_key'       => 'total_sales', // Use total_sales as the key for sales data
							'orderby'        => 'meta_value_num',
							'order'          => 'desc',
						);

						$top_products_query = new WP_Query( $args );

						if ( $top_products_query->have_posts() ) :
							while ( $top_products_query->have_posts() ) : $top_products_query->the_post();
								global $product;
								?>
								<div class="top-product">
									<a href="<?php the_permalink(); ?>">
										
										<div class="mostViewImg">
										<?php echo  the_post_thumbnail()  ;?>
										</div>
										<div class="MostViewTitle">
											<?php
											// Output your product information here as needed
												
													echo '<h2>' . get_the_title() . '</h2>';
													echo '<div class="product-price">' . $product->get_price_html() . '</div>';
													
													
												
											// Add more details as needed
											?>
										</div>
									</a>
										
									<?php
									?>
								</div>
							<?php
						endwhile;
						wp_reset_postdata(); // Reset the post data to the main query
					else :
						echo 'No top products found.';
					endif;
					?>
				</div>
				<div class="category">
					<h2>دسته بندی ها:</h2>
					<?php echo do_shortcode('[product_categories]') ?>
				</div>
					<div class="tag">
						<h2>برچسب ها</h2>
						<?php
						global $product;
					?>
						<div class="product-tags">
							<?php echo wc_get_product_tag_list( $product->get_id(), ', ' ); ?>
						</div>
							


					</div>
			</div>
		</div>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>
	

	
	<?php

get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
