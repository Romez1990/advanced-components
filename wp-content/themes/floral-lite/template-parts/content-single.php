<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Floral
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div class="entry-media">
		<?php the_post_thumbnail(); ?>
	</div>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta">
			<?php floral_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'floral-lite' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	<?php if ( function_exists( 'jetpack_author_bio' ) ) jetpack_author_bio(); ?>

	<footer class="entry-footer">
		<?php floral_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
