<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mamanbaba
 */

?>
<a href="<?php the_permalink(); ?>" class="latest-post">
	<?php the_post_thumbnail('medium'); ?>
	<div class="blogText">
		<h2 class="post-title"><?php the_title(); ?></h2>
		<div class="post-excerpt">
			<?php echo wp_trim_words(get_the_excerpt(), 30); ?>
		</div>
		<div class="blogDetail">
			<div class="post-meta">
				<span><svg width="15px" height="15px" viewBox="0 0 0.3 0.3" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.025 0.15c0 -0.047 0 -0.071 0.015 -0.085S0.078 0.05 0.125 0.05h0.05c0.047 0 0.071 0 0.085 0.015S0.275 0.103 0.275 0.15v0.025c0 0.047 0 0.071 -0.015 0.085S0.222 0.275 0.175 0.275h-0.05c-0.047 0 -0.071 0 -0.085 -0.015S0.025 0.222 0.025 0.175z" stroke="#1C274C" stroke-width="0.018750000000000003"/><path d="M0.088 0.05V0.031" stroke="#1C274C" stroke-width="0.018750000000000003" stroke-linecap="round"/><path d="M0.213 0.05V0.031" stroke="#1C274C" stroke-width="0.018750000000000003" stroke-linecap="round"/><path d="m0.113 0.181 0.019 -0.019v0.05" stroke="#1C274C" stroke-width="0.018750000000000003" stroke-linecap="round" stroke-linejoin="round"/><path d="M0.163 0.2v-0.025a0.013 0.013 0 1 1 0.025 0v0.025a0.013 0.013 0 1 1 -0.025 0Z" stroke="#1C274C" stroke-width="0.018750000000000003" stroke-linecap="round"/><path d="M0.031 0.113h0.238" stroke="#1C274C" stroke-width="0.018750000000000003" stroke-linecap="round"/></svg> منتشر شده در <?php echo get_the_date(); ?></span>
			</div>
			<span class="read-more generalButton">ادامه مطلب</span>
		</div>
	</div>
</a>
<!-- #post-<?php the_ID(); ?> -->
