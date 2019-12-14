<?php
/**
 * The template part for header
 *
 * @package VW Kids 
 * @subpackage vw_kids
 * @since VW Kids 1.0
 */
?>

<div class="main-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="logo">
          <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
          <?php endif; ?>
          <?php $blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $blog_info ) ) : ?>
              <?php if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php else : ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
              <?php endif; ?>
            <?php endif; ?>
            <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
            ?>
            <p class="site-description">
              <?php echo $description; ?>
            </p>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <?php if(function_exists(get_product_search_form)){ get_product_search_form(); } ?>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="account">
          <?php if(class_exists('woocommerce')){ ?>
            <?php if ( is_user_logged_in() ) { ?>
              <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_html_e('My Account','vw-kids'); ?>"><i class="fas fa-sign-in-alt"></i><?php esc_html_e('My Account','vw-kids'); ?><span class="screen-reader-text"><?php esc_html_e( 'My Account','vw-kids' );?></span></a>
            <?php }
            else { ?>
              <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_html_e('Login / Register','vw-kids'); ?>"><i class="fas fa-user"></i><?php esc_html_e('Login / Register','vw-kids'); ?><span class="screen-reader-text"><?php esc_html_e( 'Login / Register','vw-kids' );?></span></a>
            <?php } ?>
          <?php }?>
        </div>
      </div>
      <div class="col-lg-1 col-md-6">
        <?php if(class_exists('woocommerce')){ ?>
            <span class="cart_no">
              <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_html_e( 'shopping cart','vw-kids' ); ?>"><i class="fas fa-shopping-basket"></i><span class="screen-reader-text"><?php esc_html_e( 'shopping cart','vw-kids' );?></span></a>
              <span class="cart-value"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>
            </span>
          <?php } ?>
      </div>
    </div>
  </div>
</div>
<div id="menu-box">
  <div class="header-menu <?php if( get_theme_mod( 'vw_kids_sticky_header') != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
    <div class="container">
      <?php get_template_part( 'template-parts/header/navigation' ); ?>
    </div>
  </div>
</div>
