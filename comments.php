<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mamanbaba
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<div class="innerComments">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<?php if(get_comments_number()>0): ?>
			<h4>تعداد دیدگاه‌ها: <?php echo get_comments_number(); ?></h4>
		<?php endif; ?>
		<h2 class="comments-title">
			
			<?php
			// $tarabaran_comment_count = get_comments_number();
			// if ( '1' === $tarabaran_comment_count ) {
			// 	printf(
			// 		/* translators: 1: title. */
			// 		esc_html__( 'یک دیدگاه در &ldquo;%1$s&rdquo;', 'tarabaran' ),
			// 		'<span>' . wp_kses_post( get_the_title() ) . '</span>'
			// 	);
			// } else {
			// 	printf( 
			// 		/* translators: 1: comment count number, 2: title. */
			// 		esc_html( _nx( '%1$s دیدگاه در &ldquo;%2$s&rdquo;', '%1$s دیدگاه در &ldquo;%2$s&rdquo;', $tarabaran_comment_count, 'comments title', 'tarabaran' ) ),
			// 		number_format_i18n( $tarabaran_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			// 		'<span>' . wp_kses_post( get_the_title() ) . '</span>'
			// 	);
			// }
			?>
		</h2><!-- .comments-title -->
		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'mamanbaba' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

	</div>
</div><!-- #comments -->
