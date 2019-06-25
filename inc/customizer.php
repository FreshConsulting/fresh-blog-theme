<?php
/**
 * Fresh Starter Theme Theme Customizer
 *
 * @package Fresh_Starter_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fresh_starter_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'fresh_starter_theme_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'fresh_starter_theme_customize_partial_blogdescription',
		) );
	}
	/**
	 * Social Media Setting
	 * Add or remove values @var $social_medias
	 * as you see fit
	 **/

	$social_medias = array(
		'facebook',
		'twitter',
		'linkedin',
		'youtube',
		'instagram',
		'pinterest',
		'google',
		'email'
	);
	$wp_customize->add_section( 'social_media_section', array(
		'title' => __( 'Social Media', 'fresh-blog' )
	) );

	foreach ( $social_medias as $social_media ) {
		$wp_customize->add_setting( $social_media, array(
			'transport' => 'refresh',
		) );
		$wp_customize->add_control( $social_media . '_control', array(
			'label'    => __( ucfirst( $social_media ), 'fresh-blog' ),
			'section'  => 'social_media_section',
			'settings' => $social_media,
			'type'     => 'url',
		) );
	}

	$page_types = array(
		'front_page'   => 'Front Page',
		'post_archive' => 'Post Archive',

	);


	/**
	 * Front Page and Post Archive Setting
	 **/
	foreach ( $page_types as $key => $value ) {
		$wp_customize->add_section( $key . '_section', array(
			'title' => __( $value, 'fresh-blog' )
		) );

		$wp_customize->add_setting( $key . '_setting', array(
			'transport' => 'refresh'
		) );
		$wp_customize->add_control( $key . '_control', array(
			'label'    => __( $value . 'Layout', 'fresh-blog' ),
			'section'  => $key . '_section',
			'settings' => $key . '_setting',
			'type'     => 'radio',
			'choices'  => fresh_blog_theme_layout_choices( 3 )
		) );
	}

	$pages = array(
		'page'        => 'Pages',
		'single-post' => 'Blog Detail Page'

	);

	/**
	 *  Pages and Post Detail Setting
	 **/
	foreach ( $pages as $key => $value ) {
		$wp_customize->add_section( $key . '_section', array(
			'title' => __( $value, 'fresh-blog' )
		) );

		$wp_customize->add_setting( $key . '_setting', array(
			'transport' => 'refresh'
		) );

		$wp_customize->add_control( $key . '_control', array(
			'label'    => __( $value . 'Layout', 'fresh-blog' ),
			'section'  => $key . '_section',
			'settings' => $key . '_setting',
			'type'     => 'radio',
			'choices'  => fresh_blog_theme_layout_choices( 2 )
		) );
	}

	/**
	 * Theme Color Setting
	 **/

	$wp_customize->add_section( 'fresh_color_section', array(
		'title' => __( 'Theme Color Scheme', 'fresh-blog' )
	) );

	$wp_customize->add_setting( 'fresh_color_setting', array(
		'transport' => 'refresh'
	) );

	$wp_customize->add_control( 'fresh_color_control', array(
		'label'    => __( $value . 'Color Scheme', 'fresh-blog' ),
		'section'  => 'fresh_color_section',
		'settings' => 'fresh_color_setting',
		'type'     => 'radio',
		'choices'  => fresh_blog_color_type()
	) );
}


add_action( 'customize_register', 'fresh_starter_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function fresh_starter_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function fresh_starter_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function fresh_starter_theme_customize_preview_js() {
	wp_enqueue_script( 'fresh-starter-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}

function fresh_blog_theme_layout_choices( $list_layout = 2 ) {
	if ( $list_layout === 2 ) {
		$layout = array(
			'box-layout--no-sidebar' => __( 'Box Layout No sidebar', 'fresh-blog' ),
			'box-layout--sidebar'    => __( 'Box Layout with sidebar', 'fresh-blog' ),
		);

	} else {
		$layout = array(
			'box-layout--no-sidebar' => __( 'Box Layout No sidebar', 'fresh-blog' ),
			'three-grid-layout'      => __( 'Three gird Layout', 'fresh-blog' ),
			'box-layout--sidebar'    => __( 'Box Layout with sidebar', 'fresh-blog' ),
		);

	}

	return $layout;
}

function fresh_blog_color_type() {
	return array( '' );
}

add_action( 'customize_preview_init', 'fresh_starter_theme_customize_preview_js' );
