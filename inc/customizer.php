<?php
/**
 * auto-fuentes Theme Customizer
 *
 * @package auto-fuentes
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function auto_fuentes_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Añado el panel
	$wp_customize->add_panel('contacto-panel',array(
		'title' => 'Datos de contacto',
		'description' => '',
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => ''
	));

	// Añado section
	$wp_customize->add_section('info_contacto',array(
		'title' => 'Información de contacto',
		'panel' => 'contacto-panel',
		'priority' => 1,
		'capability' => 'edit_theme_options'
	));

	// Añado settings
	$wp_customize->add_setting('campo_texto', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options'
	));
	$wp_customize->add_setting('campo_numero', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options'
	));

	// Añado controls
	$wp_customize->add_control('campo_texto', array(
		'label' => 'Añade un correo eletronico',
		'section' => 'info_contacto' ,
		'priority' => 1,
		'type' => 'mail'
	));
	$wp_customize->add_control('campo_numero', array(
		'label' => 'Añade un numero telefonico',
		'section' => 'info_contacto' ,
		'priority' => 2,
		'type' => 'number'
	));
	
	



	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'auto_fuentes_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'auto_fuentes_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'auto_fuentes_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function auto_fuentes_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function auto_fuentes_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function auto_fuentes_customize_preview_js() {
	wp_enqueue_script( 'auto-fuentes-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'auto_fuentes_customize_preview_js' );
