<?php
/**
 * VW Kids Theme Customizer
 *
 * @package VW Kids
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_kids_custom_controls() {

    load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'vw_kids_custom_controls' );

function vw_kids_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/customize-homepage/class-customize-homepage.php' );

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_kids_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-kids' ),
	) );

	// Layout
	$wp_customize->add_section( 'vw_kids_left_right', array(
    	'title'      => __( 'General Settings', 'vw-kids' ),
		'panel' => 'vw_kids_panel_id'
	) );

	$wp_customize->add_setting('vw_kids_width_option',array(
        'default' => __('Full Width','vw-kids'),
        'sanitize_callback' => 'vw_kids_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Kids_Image_Radio_Control($wp_customize, 'vw_kids_width_option', array(
        'type' => 'select',
        'label' => __('Width Layouts','vw-kids'),
        'description' => __('Here you can change the width layout of Website.','vw-kids'),
        'section' => 'vw_kids_left_right',
        'choices' => array(
            'Full Width' => get_template_directory_uri().'/assets/images/full-width.png',
            'Wide Width' => get_template_directory_uri().'/assets/images/wide-width.png',
            'Boxed' => get_template_directory_uri().'/assets/images/boxed-width.png',
    ))));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('vw_kids_theme_options',array(
        'default' => __('Right Sidebar','vw-kids'),
        'sanitize_callback' => 'vw_kids_sanitize_choices'	        
	) );
	$wp_customize->add_control('vw_kids_theme_options', array(
        'type' => 'select',
        'label' => __('Post Sidebar Layout','vw-kids'),
        'description' => __('Here you can change the sidebar layout for posts. ','vw-kids'),
        'section' => 'vw_kids_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-kids'),
            'Right Sidebar' => __('Right Sidebar','vw-kids'),
            'One Column' => __('One Column','vw-kids'),
            'Three Columns' => __('Three Columns','vw-kids'),
            'Four Columns' => __('Four Columns','vw-kids'),
            'Grid Layout' => __('Grid Layout','vw-kids')
        ),
	));

	$wp_customize->add_setting('vw_kids_page_layout',array(
        'default' => __('One Column','vw-kids'),
        'sanitize_callback' => 'vw_kids_sanitize_choices'
	));
	$wp_customize->add_control('vw_kids_page_layout',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','vw-kids'),
        'description' => __('Here you can change the sidebar layout for pages. ','vw-kids'),
        'section' => 'vw_kids_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-kids'),
            'Right Sidebar' => __('Right Sidebar','vw-kids'),
            'One Column' => __('One Column','vw-kids')
        ),
	) );

	//Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'vw_kids_woocommerce_shop_page_sidebar',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_kids_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Kids_Toggle_Switch_Custom_Control( $wp_customize, 'vw_kids_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Shop Page Sidebar','vw-kids' ),
		'section' => 'vw_kids_left_right'
    )));

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'vw_kids_woocommerce_single_product_page_sidebar',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_kids_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Kids_Toggle_Switch_Custom_Control( $wp_customize, 'vw_kids_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Single Product Sidebar','vw-kids' ),
		'section' => 'vw_kids_left_right'
    )));

	//Pre-Loader
	$wp_customize->add_setting( 'vw_kids_loader_enable',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_kids_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Kids_Toggle_Switch_Custom_Control( $wp_customize, 'vw_kids_loader_enable',array(
        'label' => esc_html__( 'Pre-Loader','vw-kids' ),
        'section' => 'vw_kids_left_right'
    )));

	$wp_customize->add_setting('vw_kids_loader_icon',array(
        'default' => __('Two Way','vw-kids'),
        'sanitize_callback' => 'vw_kids_sanitize_choices'
	));
	$wp_customize->add_control('vw_kids_loader_icon',array(
        'type' => 'select',
        'label' => __('Pre-Loader Type','vw-kids'),
        'section' => 'vw_kids_left_right',
        'choices' => array(
            'Two Way' => __('Two Way','vw-kids'),
            'Dots' => __('Dots','vw-kids'),
            'Rotate' => __('Rotate','vw-kids')
        ),
	) );

	//Topbar
	$wp_customize->add_section( 'vw_kids_topbar', array(
    	'title'      => __( 'Topbar Settings', 'vw-kids' ),
		'panel' => 'vw_kids_panel_id'
	) );

	$wp_customize->add_setting( 'vw_kids_topbar_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_kids_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Kids_Toggle_Switch_Custom_Control( $wp_customize, 'vw_kids_topbar_hide_show',
       array(
		'label' => esc_html__( 'Show / Hide Topbar','vw-kids' ),
		'section' => 'vw_kids_topbar'
    )));

    //Sticky Header
	$wp_customize->add_setting( 'vw_kids_sticky_header',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_kids_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Kids_Toggle_Switch_Custom_Control( $wp_customize, 'vw_kids_sticky_header',array(
        'label' => esc_html__( 'Sticky Header','vw-kids' ),
        'section' => 'vw_kids_topbar'
    )));

	$wp_customize->add_setting('vw_kids_discount_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_kids_discount_text',array(
		'label'	=> __('Add Discount Text','vw-kids'),
		'input_attrs' => array(
            'placeholder' => __( 'FREE SHIPPING : lorem ipsum is adummy text', 'vw-kids' ),
        ),
		'section'=> 'vw_kids_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_kids_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_kids_call',array(
		'label'	=> __('Add Phone Number','vw-kids'),
		'input_attrs' => array(
            'placeholder' => __( '+00 987 654 1230', 'vw-kids' ),
        ),
		'section'=> 'vw_kids_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_kids_email',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_kids_email',array(
		'label'	=> __('Add Email Address','vw-kids'),
		'input_attrs' => array(
            'placeholder' => __( 'example@gmail.com', 'vw-kids' ),
        ),
		'section'=> 'vw_kids_topbar',
		'type'=> 'text'
	));
    
	//Slider
	$wp_customize->add_section( 'vw_kids_slidersettings' , array(
    	'title'      => __( 'Slider Section', 'vw-kids' ),
		'panel' => 'vw_kids_panel_id'
	) );

	$wp_customize->add_setting( 'vw_kids_slider_hide_show',array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_kids_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Kids_Toggle_Switch_Custom_Control( $wp_customize, 'vw_kids_slider_hide_show',array(
          'label' => esc_html__( 'Show / Hide Slider','vw-kids' ),
          'section' => 'vw_kids_slidersettings'
    )));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'vw_kids_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'vw_kids_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'vw_kids_slider_page' . $count, array(
			'label'    => __( 'Select Slider Page', 'vw-kids' ),
			'description' => __('Slider image size (825 x 470)','vw-kids'),
			'section'  => 'vw_kids_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//content layout
	$wp_customize->add_setting('vw_kids_slider_content_option',array(
        'default' => __('Left','vw-kids'),
        'sanitize_callback' => 'vw_kids_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Kids_Image_Radio_Control($wp_customize, 'vw_kids_slider_content_option', array(
        'type' => 'select',
        'label' => __('Slider Content Layouts','vw-kids'),
        'section' => 'vw_kids_slidersettings',
        'choices' => array(
            'Left' => get_template_directory_uri().'/assets/images/slider-content1.png',
            'Center' => get_template_directory_uri().'/assets/images/slider-content2.png',
            'Right' => get_template_directory_uri().'/assets/images/slider-content3.png',
    ))));

    //Slider excerpt
	$wp_customize->add_setting( 'vw_kids_slider_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_kids_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','vw-kids' ),
		'section'     => 'vw_kids_slidersettings',
		'type'        => 'range',
		'settings'    => 'vw_kids_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('vw_kids_slider_opacity_color',array(
      'default'              => 0.5,
      'sanitize_callback' => 'vw_kids_sanitize_choices'
	));

	$wp_customize->add_control( 'vw_kids_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','vw-kids' ),
	'section'     => 'vw_kids_slidersettings',
	'type'        => 'select',
	'settings'    => 'vw_kids_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','vw-kids'),
      '0.1' =>  esc_attr('0.1','vw-kids'),
      '0.2' =>  esc_attr('0.2','vw-kids'),
      '0.3' =>  esc_attr('0.3','vw-kids'),
      '0.4' =>  esc_attr('0.4','vw-kids'),
      '0.5' =>  esc_attr('0.5','vw-kids'),
      '0.6' =>  esc_attr('0.6','vw-kids'),
      '0.7' =>  esc_attr('0.7','vw-kids'),
      '0.8' =>  esc_attr('0.8','vw-kids'),
      '0.9' =>  esc_attr('0.9','vw-kids')
	),
	));
    
	//Popular Toys section
	$wp_customize->add_section( 'vw_kids_popular_product_section' , array(
    	'title'      => __( 'Most Popular Product', 'vw-kids' ),
		'priority'   => null,
		'panel' => 'vw_kids_panel_id'
	) );

	$wp_customize->add_setting( 'vw_kids_popular_product', array(
		'default'           => '',
		'sanitize_callback' => 'vw_kids_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'vw_kids_popular_product', array(
		'label'    => __( 'Select Page to show popular product', 'vw-kids' ),
		'section'  => 'vw_kids_popular_product_section',
		'type'     => 'dropdown-pages'
	) );

	//Blog Post
	$wp_customize->add_section('vw_kids_blog_post',array(
		'title'	=> __('Blog Post Settings','vw-kids'),
		'panel' => 'vw_kids_panel_id',
	));	

	$wp_customize->add_setting( 'vw_kids_toggle_postdate',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_kids_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Kids_Toggle_Switch_Custom_Control( $wp_customize, 'vw_kids_toggle_postdate',array(
        'label' => esc_html__( 'Post Date','vw-kids' ),
        'section' => 'vw_kids_blog_post'
    )));

    $wp_customize->add_setting( 'vw_kids_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_kids_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Kids_Toggle_Switch_Custom_Control( $wp_customize, 'vw_kids_toggle_author',array(
		'label' => esc_html__( 'Author','vw-kids' ),
		'section' => 'vw_kids_blog_post'
    )));

    $wp_customize->add_setting( 'vw_kids_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_kids_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Kids_Toggle_Switch_Custom_Control( $wp_customize, 'vw_kids_toggle_comments',array(
		'label' => esc_html__( 'Comments','vw-kids' ),
		'section' => 'vw_kids_blog_post'
    )));

    $wp_customize->add_setting( 'vw_kids_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_kids_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','vw-kids' ),
		'section'     => 'vw_kids_blog_post',
		'type'        => 'range',
		'settings'    => 'vw_kids_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Blog layout
    $wp_customize->add_setting('vw_kids_blog_layout_option',array(
        'default' => __('Default','vw-kids'),
        'sanitize_callback' => 'vw_kids_sanitize_choices'
    ));
    $wp_customize->add_control(new VW_Kids_Image_Radio_Control($wp_customize, 'vw_kids_blog_layout_option', array(
        'type' => 'select',
        'label' => __('Blog Layouts','vw-kids'),
        'section' => 'vw_kids_blog_post',
        'choices' => array(
            'Default' => get_template_directory_uri().'/assets/images/blog-layout1.png',
            'Center' => get_template_directory_uri().'/assets/images/blog-layout2.png',
            'Left' => get_template_directory_uri().'/assets/images/blog-layout3.png',
    ))));

	//Content creation
	$wp_customize->add_section( 'vw_kids_content_section' , array(
    	'title' => __( 'Customize Home Page', 'vw-kids' ),
		'priority' => null,
		'panel' => 'vw_kids_panel_id'
	) );

	$wp_customize->add_setting('vw_kids_content_creation_main_control', array(
		'sanitize_callback' => 'esc_html',
	) );

	$homepage= get_option( 'page_on_front' );

	$wp_customize->add_control(	new VW_Kids_Content_Creation( $wp_customize, 'vw_kids_content_creation_main_control', array(
		'options' => array(
			esc_html__( 'First select static page in homepage setting for front page.Below given edit button is to customize Home Page. Just click on the edit option, add whatever elements you want to include in the homepage, save the changes and you are good to go.','vw-kids' ),
		),
		'section' => 'vw_kids_content_section',
		'button_url'  => admin_url( 'post.php?post='.$homepage.'&action=edit'),
		'button_text' => esc_html__( 'Edit', 'vw-kids' ),
	) ) );

	//Footer Text
	$wp_customize->add_section('vw_kids_footer',array(
		'title'	=> __('Footer','vw-kids'),
		'panel' => 'vw_kids_panel_id',
	));	
	
	$wp_customize->add_setting('vw_kids_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_kids_footer_text',array(
		'label'	=> __('Copyright Text','vw-kids'),
		'input_attrs' => array(
            'placeholder' => __( 'Copyright 2019, .....', 'vw-kids' ),
        ),
		'section'=> 'vw_kids_footer',
		'type'=> 'text'
	));	

	$wp_customize->add_setting( 'vw_kids_hide_show_scroll',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'vw_kids_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Kids_Toggle_Switch_Custom_Control( $wp_customize, 'vw_kids_hide_show_scroll',array(
      	'label' => esc_html__( 'Show / Hide Scroll To Top','vw-kids' ),
      	'section' => 'vw_kids_footer'
    )));

	$wp_customize->add_setting('vw_kids_scroll_top_alignment',array(
        'default' => __('Right','vw-kids'),
        'sanitize_callback' => 'vw_kids_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Kids_Image_Radio_Control($wp_customize, 'vw_kids_scroll_top_alignment', array(
        'type' => 'select',
        'label' => __('Scroll To Top','vw-kids'),
        'section' => 'vw_kids_footer',
        'settings' => 'vw_kids_scroll_top_alignment',
        'choices' => array(
            'Left' => get_template_directory_uri().'/assets/images/layout1.png',
            'Center' => get_template_directory_uri().'/assets/images/layout2.png',
            'Right' => get_template_directory_uri().'/assets/images/layout3.png'
    ))));
}

add_action( 'customize_register', 'vw_kids_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class VW_Kids_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'VW_Kids_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(new VW_Kids_Customize_Section_Pro($manager,'example_1',array(
			'priority'   => 1,
			'title'    => esc_html__( 'VW KIDS PRO', 'vw-kids' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'vw-kids' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/kids-wordpress-theme/'),
		)));

		// Register sections.
		$manager->add_section(new VW_Kids_Customize_Section_Pro($manager,'example_2',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCMENTATION', 'vw-kids' ),
			'pro_text' => esc_html__( 'DOCS', 'vw-kids' ),
			'pro_url'  => admin_url('themes.php?page=vw_kids_guide'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-kids-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-kids-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
VW_Kids_Customize::get_instance();