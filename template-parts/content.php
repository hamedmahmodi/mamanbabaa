<?php

/**

 * Template part for displaying posts

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package mamanbaba

 */

?>

<div class="generalSinglePostStyle singleBox mainView">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	
	
	<header class="entry-header">
		
	<div class="SinglePostPageHeader">
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );
			}
		?>
		<div class="SinglePostPage">
			<?php

				if ( is_singular() ) :

					the_title( '<h1 class="entry-title">', '</h1>' );

					else :

					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

				endif;

				if ( 'post' === get_post_type() ) :

			?>
			<div class="commentsAndView">
				<div class="commentsCount">

				<span><a href="#comments">کامنت :</a> <?php comments_number( '0', '1', '%' ); ?></span>

				</div>
				<div class="numViewCount">
				<span>بازدید : <?php display_post_views(); ?></span>
				</div>
			</div>
		</div>
	</div>
	</header><!-- .entry-header -->

	<div class="singlePageMain">
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

	

</article><!-- #post-<?php the_ID(); ?> -->

</div>

