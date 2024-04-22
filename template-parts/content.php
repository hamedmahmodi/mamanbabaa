<?php

/**

 * Template part for displaying posts

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package mamanbaba

 */

?>

<div class="generalSinglePostStyle singleBox">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="singlePageMain mainView highRadius">
			<div class="singlePageRightBox">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );
					}
				?>
				<?php

				if ( is_singular() ) :

					the_title( '<h1 class="entry-title">', '</h1>' );

					else :

					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

				endif;
				the_post_thumbnail();
		
				if (has_category()) {
				$categories = get_the_category();
				?>
				<div class="postCategories">
					<span>دسته بندی ها:</span>
					<?php foreach ($categories as $category) { ?>
					<?php $category_link = get_category_link($category->term_id); ?>
					<a class="generalButton" href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category->name); ?></a>
					<?php } ?>
				</div>
				<?php }

				if ( 'post' === get_post_type() ) :

				?>
				<div class="entry-content">
				
					<?php

					the_content(

						sprintf(

							wp_kses(

								/* translators: %s: Name of current post. Only visible to screen readers */

								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'khane_zar' ),

								array(

									'span' => array(

										'class' => array(),

									),

								)

							),

							wp_kses_post( get_the_title() )

						)

					);

					?>

				</div>
				<div class="shortendedLinkContainer">
					<h3>لینک کوتاه</h3>
					<div class="mainShortenedInfo">
						<span class="theAddressURL"><?php echo get_home_url() ?>/?p=<?php echo get_the_id() ?></span>
						<input type="button" value="کپی لینک" id="copyLinkButton">
						
					</div>
					<span class="copyLinkMessage">لینک با موفقیت کپی شد</span>
				</div>
			</div>
			<div class="singlePageLeftBox">
				<div class="commentsAndView">
					<div class="commentsCount">

					<span><a href="#comments">کامنت :</a> <?php comments_number( '0', '1', '%' ); ?></span>

					</div>
					<div class="numViewCount">
					<span>بازدید : <?php display_post_views(); ?></span>
					</div>
				</div>
				<div class="mostView">
					<h2>بیشترین بازدید:</h2>
					<?php
						query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
						if (have_posts()) : while (have_posts()) : the_post();
						?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php
						endwhile; endif;
						wp_reset_query();
						?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->

</div>

