<?php
/**
 * This template to displays woocommerce page
 *
 * @package Theme Freesia
 * @subpackage Idyllic
 * @since Idyllic 1.0
 */

get_header();
	$idyllic_settings = idyllic_get_theme_options();
	global $idyllic_content_layout;
	if( $post ) {
		$layout = get_post_meta( get_queried_object_id(), 'idyllic_sidebarlayout', true );
	}
	if( empty( $layout ) || is_archive() || is_search() || is_home() ) {
		$layout = 'default';
	} ?>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php woocommerce_content(); ?>
		</main><!-- end #main -->
	</div> <!-- #primary -->
<?php 
if( 'default' == $layout ) { //Settings from customizer
	if(($idyllic_settings['idyllic_sidebar_layout_options'] != 'nosidebar') && ($idyllic_settings['idyllic_sidebar_layout_options'] != 'fullwidth')){ ?>
<aside id="secondary" class="widget-area" role="complementary">
	<?php }
}

?>

<h6>Категории товаров:</h6>

<?php

function display_categories() {
	$taxonomy     = 'product_cat';
	$orderby      = 'name';
	$show_count   = 0;      // 1 for yes, 0 for no
	$pad_counts   = 0;      // 1 for yes, 0 for no
	$hierarchical = 1;      // 1 for yes, 0 for no
	$title        = '';
	$empty        = 0;

	$args           = [
		'taxonomy'     => $taxonomy,
		'orderby'      => $orderby,
		'show_count'   => $show_count,
		'pad_counts'   => $pad_counts,
		'hierarchical' => $hierarchical,
		'title_li'     => $title,
		'hide_empty'   => $empty,
	];
	$all_categories = get_categories( $args );
	foreach ( $all_categories as $cat ) {
		if ( $cat->name === 'Uncategorized' ) {
			continue;
		}

		$category_id = $cat->term_id;
		?>
        <a href="<?= get_term_link( $cat->slug, 'product_cat' ) ?>">
			<?= $cat->name ?>
        </a>
        <br/>
		<?php

		$args2 = [
			'taxonomy'     => $taxonomy,
			'child_of'     => 0,
			'parent'       => $category_id,
			'orderby'      => $orderby,
			'show_count'   => $show_count,
			'pad_counts'   => $pad_counts,
			'hierarchical' => $hierarchical,
			'title_li'     => $title,
			'hide_empty'   => $empty,
		];
	}
}

display_categories();

	if( 'default' == $layout ) { //Settings from customizer
		if(($idyllic_settings['idyllic_sidebar_layout_options'] != 'nosidebar') && ($idyllic_settings['idyllic_sidebar_layout_options'] != 'fullwidth')): ?>
		<?php dynamic_sidebar( 'idyllic_woocommerce_sidebar' ); ?>
</aside><!-- end #secondary -->
<?php endif;
	}
?>
</div><!-- end .wrap -->
<?php
get_footer();