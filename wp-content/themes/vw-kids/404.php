<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package VW Kids
 */

get_header(); ?>

<main id="maincontent" role="main" class="content-vw">
	<div class="container">
		<div class="page-content">
	    	<h1><?php printf( '<strong>%s</strong> %s', esc_html__( '404','vw-kids' ), esc_html__( 'Not Found', 'vw-kids' ) ) ?></h1>
			<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn&hellip', 'vw-kids' ); ?></p>
			<p class="text-404"><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'vw-kids' ); ?></p>
			<div class="error-btn">
	    		<a class="view-more" href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e( 'Return to the home page', 'vw-kids' ); ?><i class="fa fa-angle-right"></i><span class="screen-reader-text"><?php esc_html_e( 'Return to the home page','vw-kids' );?></span></a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</main>

<?php get_footer(); ?>