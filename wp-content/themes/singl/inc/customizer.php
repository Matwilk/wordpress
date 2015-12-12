<?php
/**
 * singl Theme Customizer
 *
 * @package Singl
 */

/**
 * Customizer real-time preview and settings.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function singl_customize_register( $wp_customize ) {
	/**
	 * Add real-time preview.
	 */
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/**
	 * Add the Theme section and settings.
	 */
	$wp_customize->add_section( 'singl_theme_options', array(
		'title'             => __( 'Theme', 'singl' ),
		'priority'          => 200,
	) );

	// Full background cover
	$wp_customize->add_setting( 'singl_background_size', array(
		'sanitize_callback' => 'singl_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'singl_background_size', array(
		'label'			    => __( 'Full Page Background Image', 'singl' ),
		'section'		    => 'singl_theme_options',
		'type'              => 'checkbox',
		'priority'		    => 1,
	) );

	// Subscribe form
	$wp_customize->add_setting( 'singl_subscribe_form', array(
		'sanitize_callback' => 'singl_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'singl_subscribe_form', array(
		'label'			    => __( 'Subscribe Form', 'singl' ),
		'section'		    => 'singl_theme_options',
		'type'              => 'checkbox',
		'priority'		    => 2,
	) );

	// Social media links
	$wp_customize->add_setting( 'singl_twitter_link', array(
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( 'singl_twitter_link', array(
		'label'             => __( 'Twitter Link', 'singl' ),
		'section'           => 'singl_theme_options',
		'type'              => 'text',
		'priority'          => 3,
	) );

	$wp_customize->add_setting( 'singl_facebook_link', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'singl_facebook_link', array(
		'label'             => __( 'Facebook Link', 'singl' ),
		'section'           => 'singl_theme_options',
		'type'              => 'text',
		'priority'          => 4,
	) );

	$wp_customize->add_setting( 'singl_pinterest_link', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'singl_pinterest_link', array(
		'label'             => __( 'Pinterest Link', 'singl' ),
		'section'           => 'singl_theme_options',
		'type'              => 'text',
		'priority'          => 5,
	) );

	$wp_customize->add_setting( 'singl_google_plus_link', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'singl_google_plus_link', array(
		'label'             => __( 'Google+ Link', 'singl' ),
		'section'           => 'singl_theme_options',
		'type'              => 'text',
		'priority'          => 6,
	) );

	$wp_customize->add_setting( 'singl_instagram_link', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'singl_instagram_link', array(
		'label'             => __( 'Instagram Link', 'singl' ),
		'section'           => 'singl_theme_options',
		'type'              => 'text',
		'priority'          => 7,
	) );

	$wp_customize->add_setting( 'singl_youtube_link', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'singl_youtube_link', array(
		'label'             => __( 'YouTube Link', 'singl' ),
		'section'           => 'singl_theme_options',
		'type'              => 'text',
		'priority'          => 8,
	) );

	$wp_customize->add_setting( 'singl_vimeo_link', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'singl_vimeo_link', array(
		'label'             => __( 'Vimeo Link', 'singl' ),
		'section'           => 'singl_theme_options',
		'type'              => 'text',
		'priority'          => 9,
	) );

	$wp_customize->add_setting( 'singl_vine_link', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'singl_vine_link', array(
		'label'             => __( 'Vine Link', 'singl' ),
		'section'           => 'singl_theme_options',
		'type'              => 'text',
		'priority'          => 10,
	) );

	$wp_customize->add_setting( 'singl_soundcloud_link', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'singl_soundcloud_link', array(
		'label'             => __( 'SoundCloud Link', 'singl' ),
		'section'           => 'singl_theme_options',
		'type'              => 'text',
		'priority'          => 11,
	) );

	$wp_customize->add_setting( 'singl_lastfm_link', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'singl_lastfm_link', array(
		'label'             => __( 'Last.fm Link', 'singl' ),
		'section'           => 'singl_theme_options',
		'type'              => 'text',
		'priority'          => 12,
	) );

	$wp_customize->add_setting( 'singl_spotify_link', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'singl_spotify_link', array(
		'label'             => __( 'Spotify Link', 'singl' ),
		'section'           => 'singl_theme_options',
		'type'              => 'text',
		'priority'          => 13,
	) );

	$wp_customize->add_setting( 'singl_itunes_link', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'singl_itunes_link', array(
		'label'             => __( 'iTunes Link', 'singl' ),
		'section'           => 'singl_theme_options',
		'type'              => 'text',
		'priority'          => 14,
	) );
	
	$wp_customize->add_setting( 'singl_beatport_link', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'singl_beatport_link', array(
		'label'             => __( 'Beatport Link', 'singl' ),
		'section'           => 'singl_theme_options',
		'type'              => 'text',
		'priority'          => 15,
	) );

}
add_action( 'customize_register', 'singl_customize_register' );

/**
 * Sanitize a checkbox setting.
 */
function singl_sanitize_checkbox( $value ) {
	return ( 1 == $value );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function singl_customize_preview_js() {
	wp_enqueue_script( 'singl-customizer-script', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130410', true );
}
add_action( 'customize_preview_init', 'singl_customize_preview_js' );