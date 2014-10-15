<?php
/**
 * Common global theme configuration
 *
 * @author Fabian Wolf
 * @package cc2
 * @since 2.0-r1
 */

/**
 * ONE constant to rule them all, one constant to bind them .. ;-)
 */

if( !defined('CC2_THEME_CONFIG' ) ) :

define('CC2_THEME_CONFIG', serialize(
	array(
		'theme_prefix' => 'cc2_',
		'admin_sections' => array(
			'getting-started' => array(
				'title' => 'Getting Started',
				'settings_slug' => 'cc2_options',
			),
			'slider-options' => array(
				'title' => 'Slideshow',
				'settings_slug' => 'cc2_slider_options',
			),
			'advanced-settings' => array(
				'title' => 'Advanced Settings',
				'settings_slug' => 'cc2_advanced_settings_options',
			),
			'backup' => array(
				'title' => 'Backup & Reset Settings',
				'settings_slug' => 'cc2_export_import_page',
			),
		),
		
		'fonts' => array(
			'inherit' => 'inherit',
			'"Lato", "Droid Sans", "Helvetica Neue", Tahoma, Arial, sans-serif' => 'Lato',
			'"Ubuntu Condensed", "Droid Sans", "Helvetica Neue", Tahoma, Arial, sans-serif' => 'Ubuntu Condensed',
			'"Pacifico", "Helvetica Neue", Arial, sans-serif' => 'Pacifico',
			'"Helvetica Neue", Tahoma, Arial, sans-serif' => 'Helvetica Neue',
			'Garamond, "Times New Roman", Times, serif' => 'Garamond',
			'Georgia, "Times New Roman", Times, serif' => 'Georgia',
			'Impact, Arial, sans-serif' => 'Impact',
			'Arial, sans-serif'	=> 'Arial',
			'Arial Black, Arial, sans-serif' => 'Arial Black',
			'Verdana, Arial, sans-serif' => 'Verdana',
			'Tahoma, Arial, sans-serif' => 'Tahoma',
			'"Century Gothic", "Avant Garde", Arial, sans-serif' => 'Century Gothic',
			'"Times New Roman", Times, serif' => 'Times New Roman',
		),
		
		'color_schemes' => array(
			'default' => array(
				'title' => 'Orange &amp; Black',
				'file' => 'style.less', /** if no filename is given, we assume its {$slug}.less */
				'scheme' => array(
					'font_color' => '333333', /** @gray-dark: lighten(#000, 20%); // #333 */
					'font_family' => 'font-family-sans-serif',
					'link_color' => 'f2694b',
					'hover_color' => 'f2854b',
				),
			),
			'dark' => array(
				'title' => 'Dark Colours',
				
			),
			
			
			'light' => array(
				'title' => 'Light Colours',
			),
			'_test' => array(
				'title' => 'Test Scheme',
				'file' => 'test.less',
				'output_file' => 'test.css',
				'scheme' => array(
					'font_color' => '111', /** @gray-dark: lighten(#000, 20%); // #333 */
					'font_family' => 'font-family-sans-serif',
					'link_color' => '#F24B8C',
					'hover_color' => '#F34B6A',
				),
			),
		),
		
		'support_settings' => array(
			'zendesk' => array(
				'css' => 'https://assets.zendesk.com/external/zenbox/v2.6/zenbox.css',
				'js' => 'https://assets.zendesk.com/external/zenbox/v2.6/zenbox.js',
			),
		),
	) 
) );


endif; // avoid conflicts with child theme config
