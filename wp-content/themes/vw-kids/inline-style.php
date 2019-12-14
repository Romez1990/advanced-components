<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_kids_first_color = get_theme_mod('vw_kids_first_color');

	$custom_css = '';

	if($vw_kids_first_color != false){
		$custom_css .='.cart-value, #menu-box, #slider .view-more:hover, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, .scrollup i, input[type="submit"], #sidebar .custom-social-icons i, #footer .custom-social-icons i, #footer .tagcloud a:hover, #footer-2, .view-more:hover, .pagination .current, .pagination a:hover, #sidebar .tagcloud a:hover, #comments input[type="submit"], nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .header-fixed, #comments a.comment-reply-link{';
			$custom_css .='background-color: '.esc_html($vw_kids_first_color).';';
		$custom_css .='}';
	}
	if($vw_kids_first_color != false){
		$custom_css .='.products li:hover, .products li:hover span.onsale{';
			$custom_css .='background-color: '.esc_html($vw_kids_first_color).'!important;';
		$custom_css .='}';
	}
	if($vw_kids_first_color != false){
		$custom_css .='a, #footer .custom-social-icons i:hover, #footer li a:hover, .post-main-box:hover h2, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .main-navigation ul.sub-menu a:hover{';
			$custom_css .='color: '.esc_html($vw_kids_first_color).';';
		$custom_css .='}';
	}
	if($vw_kids_first_color != false){
		$custom_css .='#slider .view-more:hover, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, .products li:hover a.button, .view-more:hover, .woocommerce #respond input#submit:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover{';
			$custom_css .='border-color: '.esc_html($vw_kids_first_color).';';
		$custom_css .='}';
	}
	if($vw_kids_first_color != false){
		$custom_css .='#slider hr, #popular-toys hr, .main-navigation ul ul{';
			$custom_css .='border-top-color: '.esc_html($vw_kids_first_color).';';
		$custom_css .='}';
	}
	if($vw_kids_first_color != false){
		$custom_css .='#footer h3:after, .main-navigation ul ul{';
			$custom_css .='border-bottom-color: '.esc_html($vw_kids_first_color).';';
		$custom_css .='}';
	}
	if($vw_kids_first_color != false){
		$custom_css .='.post-main-box, #sidebar .widget{
		box-shadow: 0px 15px 10px -15px '.esc_html($vw_kids_first_color).';
		}';
	}

	/*---------------------------Second highlight color-------------------*/

	$vw_kids_second_color = get_theme_mod('vw_kids_second_color');

	if($vw_kids_second_color != false){
		$custom_css .='#topbar, .categry-title, #sidebar .custom-social-icons i:hover, .pagination span, .pagination a, .woocommerce span.onsale, .products li, .woocommerce ul.products li.product{';
			$custom_css .='background-color: '.esc_html($vw_kids_second_color).';';
		$custom_css .='}';
	}
	if($vw_kids_second_color != false){
		$custom_css .='h1,h2,h3,h4,h5,h6, .custom-social-icons i:hover, .logo h1 a, .logo p.site-title a, .cart_no i, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, #slider .inner_carousel h1, #slider .view-more, .view-more, .post-main-box h2, #sidebar caption, #sidebar h3, .post-navigation a, .woocommerce div.product .product_title, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce .quantity .qty, .woocommerce-message::before,.woocommerce-info::before, #comments a.comment-reply-link, .main-navigation a:hover, .main-navigation ul ul a{';
			$custom_css .='color: '.esc_html($vw_kids_second_color).';';
		$custom_css .='}';
	}
	if($vw_kids_second_color != false){
		$custom_css .='.products li:hover .star-rating span{';
			$custom_css .='color: '.esc_html($vw_kids_second_color).'!important;';
		$custom_css .='}';
	}
	if($vw_kids_second_color != false){
		$custom_css .='.cart_no i, #slider .carousel-control-prev-icon,#slider .carousel-control-next-icon, #slider .view-more, .view-more, a.button.product_type_simple.add_to_cart_button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce .quantity .qty{';
			$custom_css .='border-color: '.esc_html($vw_kids_second_color).';';
		$custom_css .='}';
	}
	if($vw_kids_second_color != false){
		$custom_css .='.post-info hr, .woocommerce-message,.woocommerce-info{';
			$custom_css .='border-top-color: '.esc_html($vw_kids_second_color).';';
		$custom_css .='}';
	}
	if($vw_kids_second_color != false){
		$custom_css .='nav.woocommerce-MyAccount-navigation ul li{
		box-shadow: 2px 2px 0 0 '.esc_html($vw_kids_second_color).';
		}';
	}
	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_kids_width_option','Full Width');
    if($theme_lay == 'Boxed'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'vw_kids_slider_opacity_color','0.5');
	if($theme_lay == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_kids_slider_content_option','Left');
    if($theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:left; left:10%; right:22%; top: 40%;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:center; left:20%; right:20%; top: 35%;';
		$custom_css .='}';
		$custom_css .='#slider hr{';
			$custom_css .='margin: 0 15em;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:right; left:22%; right:17%; top: 40%;';
		$custom_css .='}';
		$custom_css .='#slider hr{';
			$custom_css .='margin: 0 30em;';
		$custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_kids_blog_layout_option','Default');
    if($theme_lay == 'Default'){
		$custom_css .='.post-main-box{';
			$custom_css .='';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='.post-info{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
		$custom_css .='.content-bttn{';
			$custom_css .='margin:30px 0 10px;';
		$custom_css .='}';
		$custom_css .='.post-info hr{';
			$custom_css .='margin:15px auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Left'){
		$custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$custom_css .='text-align:Left;';
		$custom_css .='}';
		$custom_css .='.post-info hr{';
			$custom_css .='margin-bottom:10px;';
		$custom_css .='}';
		$custom_css .='.post-main-box h2{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
	}