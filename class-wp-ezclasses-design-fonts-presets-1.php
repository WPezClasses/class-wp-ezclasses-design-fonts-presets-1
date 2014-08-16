<?php
/** 
 * Predefined presets for web fonts (both style and script formats)
 *
 * Includes individual fonts, as well as predefined font combinations (combos)
 *
 * PHP version 5.3
 *
 * LICENSE: TODO
 *
 * @package WP ezClasses
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0
 * @license TODO
 */
 
/*
 * == Change Log == 
 *
 * --- 12 July 2013 - Ready!
 */

/*
 * Note: "global" properties inherited from wpezClassesMasterParent
 *
 * $_bool_ezc_log 					turns the log (wpezToolsClassesLog() on and off (protected, default: true)
 * $_bool_ezc_validate				turns off _validation methods (protected, default: true)
 * $_bool_ezc_apply_filters			if you want to use the filters then set this to true (protected, default: false)
 */


if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}


if ( !class_exists('wpezPresetsClassesFonts') ) {
	class wpezPresetsClassesFonts extends wpezClassesMasterParent{
	
		/**
		 * Note: We're not using the construct other than to get "global" properties defined in the master parent
		 */
		protected function __construct(){
			parent::__construct();
		}

		/**
		 * Kinda like the __construct(), but different. the get_instance() in the master parent calls the ez_init()
		 */
		public function ezc_init($arr_args = NULL){
		
		}

	
		/*
		 *
		 */
		public function presets_wp_enqueue_web_fonts($arr_args = NULL) {
			$str_return_source = 'Presets \ Fonts :: presets_wp_enqueue_web_fonts()'; 

			/*
			 * Keeping it simple and foregoing the usual formal _valiate method (at least for now)
			 */

			//TODO - Defaults
			if ( !is_array($arr_args) || empty($arr_args) ){	
				$arr_args = $this->presets_wp_enqueue_web_fonts_defaults();
			}

			//TODO - validate? 		

			$arr_fonts = array ( 
							'font_lobster'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,
																	'handle'			=> 'font_google_lobster',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Lobster',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',	// media is required for type: style
																	'in_footer'			=>	NULL,	// in_footer is required for type: script - both are listed for consistency / convenience
																),
																	
							'font_cabin'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),									
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,
																	'handle'			=> 'font_google_cabin',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Cabin',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=>	NULL,
																),								
								 
							'font_raleway'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_raleway',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Raleway:100',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=>	NULL,
																),
																	
							'font_goudy_bookletter_1911'	=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_goudy_bookletter_1911',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=>	NULL,
																),								
							
							'font_allerta'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_allerta',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Allerta',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=>	NULL,
																),
																	
							'font_crimson_text'				=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_crimson-text',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Crimson+Text',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=>	NULL,
																),								
	
							'font_arvo'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_arvo',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Arvo',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=>	NULL,
																),
																	
							'font_pt_sans'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_pt_sans',
																	'src'				=> 'http://fonts.googleapis.com/css?family=PT+Sans',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=>	NULL,
																),								
								
							'font_dancing_script'			=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_dancing_script',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Dancing+Script',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=>	NULL,
																),
																	
							'font_josefin_sans'				=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_josefin_sans',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Josefin+Sans',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=>	NULL,
																),								
			
							'font_allan_bold'				=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_allan_bold',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Allan:bold',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=>	NULL,
																),
																
							'font_cardo'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_cardo',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Cardo',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=>	NULL,
																),								

							'font_molengo'					=> array(
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_molengo',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Molengo',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=>	NULL,
																),
																
							'font_lekton'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_lekton',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Lekton',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=>	NULL,
																),								

							'font_droid_serif'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_droid_serif',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Droid+Serif',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),
																
							'font_droid_sans'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_droid_sans',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Droid+Sans',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),								

							'font_corben'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_corben',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Corben:bold',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),
																
							'font_nobile'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_nobile',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Nobile',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),								

							'font_ubuntu'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_ubuntu',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Ubuntu:bold',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),
															
							'font_vollkorn'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_vollkorn',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Vollkorn',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),								

							'font_bree_serif'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_bree_serif',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Bree+Serif',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),
																
							'font_open_sans'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_open_sans',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Open+Sans',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),								

							'font_bevan'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_bevan',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Bevan',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),
																
							'font_pontano_sans'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_pontano_sans',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Pontano+Sans',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),								

							'font_abril_fatface'				=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_abril_fatface',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Abril+Fatface',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),
																
							'font_average'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_average',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Average',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),								

							'font_playfair_display'				=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,
																	'handle'			=> 'font_google_playfair_display',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Playfair+Display',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),
																
							'font_muli'							=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_muli',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Muli',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),								

							'font_sansita_one'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_sansita_one',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Sansita+One',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),
																
							'font_kameron'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_kameron',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Kameron',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),								

							'font_istok_web'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_istok_web',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Istok+Web',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),
																
							'font_lora'							=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_lora',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Lora',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),								

							'font_pacifico'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_pacifico',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Pacifico',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),
																
							'font_arimo'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_arimo',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Arimo',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),								

							'font_nixie_one'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_nixie_one',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Nixie+One',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),
																
							'font_ledger'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_ledger',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Ledger',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),								

							'font_cantata_one'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),	
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_cantata_one',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Cantata+One',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),
																
							'font_imprima'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),				
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_imprima',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Imprima',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),								

							'font_rancho'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),	
																								),			
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_rancho',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Rancho',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),
																
							'font_gudea'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),	
																								),			
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_gudea',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Gudea',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),	

							'boogaloo'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),	
																								),			
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_boogaloo',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Boogaloo',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),	

							'economica'						=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),	
																								),			
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> $str_return_source,																	
																	'handle'			=> 'font_google_economica',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Economica:700,400italic',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=> NULL,
																),																
								);
	
			$arr_return = array();

			//DOTO - validate?
			foreach ($arr_args as $str_preset => $bool_status){ 
				if ( $bool_status === true ) {
					if ( isset($arr_fonts[$str_preset]) ){
						$arr_return[$str_preset] = $arr_fonts[$str_preset];
					} else{
						$arr_return = $this->presets_wp_enqueue_web_fonts_custom($str_preset);
						if ( is_array($arr_return)){
						$arr_return[$str_preset] = $arr_return;
						}
					}
					$arr_return[$str_preset]['ver'] = $str_preset;
				}		
			}
			
			//TODO - what if the arr_return is empty()? let the calling code sort it out? 
					
			return $arr_return;	

		}
		
		/**
		 * Extend the Setup Presets class with a child class and add your own presets with this method
		 *
		 */		
		public function presets_wp_enqueue_web_fonts_custom($str_preset) {	
			/*
			 * Does the MasterParent allow for the use of filters?
			 */
			if ( $this->_bool_ezc_apply_filters ){
				$arr_return = apply_filters('filter_ezc_presets_fonts_presets_wp_enqueue_web_fonts_custom', $str_preset);
				if ( is_array($arr_return) ){
					return $arr_return;
				}
			}
			/*
			 * Notice how we don't pass a preset value. By passing NULL we will force wp_enqueue_web_fonts_presets() to use the default value for this preset. 
			 */
			$arr_return = $this->presets_wp_enqueue_web_fonts();
			return $arr_return;	
		}
			
		/**
		 * Use a filter to override the default, or if you extend this class you can overide the whole method. 
		 *
		 */
		public function presets_wp_enqueue_web_fonts_defaults(){	
			$arr_defaults = $this->presets_wp_enqueue_web_fonts_combinations('combo1');
			/*
			 * Does the MasterParent allow for the use of filters?
			 */
			if ( $this->_bool_ezc_apply_filters ){
				$arr_defaults_via_filter = apply_filters('filter_ezc_presets_fonts_presets_wp_enqueue_web_fonts_defaults', $arr_defaults);
				if ( is_array($arr_defaults_via_filter) ){
					$arr_defaults = $arr_defaults_via_filter;
				}
			}
			return $arr_defaults;			
		}
		
		/*
		 * 
		 */
		public function presets_wp_enqueue_web_fonts_combinations($str_preset = NULL) {
		
			// No validation or defaults. Either you get what you asked for, or you get nothing at all
		
			/*
			 * http://designshack.net/articles/css/10-great-google-font_combinations-you-can-copy   <<< See also the comments (TODO: include combos mentioned in comments
			 */
			$arr_fonts_combo_1 = array('lobster_cabin' => true, 'combo1' => true, 'combo_1' => true);
			$arr_fonts_combo_2 = array('raleway_goudy' => true, 'combo2' => true, 'combo_2' => true);			
			$arr_fonts_combo_3 = array('allerta_crimson' => true, 'combo3' => true, 'combo_3' => true);		
			$arr_fonts_combo_4 = array('arvo_pt_sans' => true, 'combo4' => true, 'combo_4' => true, 'arvo_ptsans' => true,);		
			$arr_fonts_combo_5 = array('dancing_josefin' => true, 'combo5' => true, 'combo_5' => true);

			$arr_fonts_combo_6 = array('allan_cardo' => true, 'combo6' => true, 'combo_6' => true);			
			$arr_fonts_combo_7 = array('molengo_lekton' => true, 'combo7' => true, 'combo_7' => true);		
			$arr_fonts_combo_8 = array('droid_droid' => true, 'combo8' => true, 'combo_8' => true);	
			$arr_fonts_combo_9 = array('corben_nobile' => true, 'combo9' => true, 'combo_9' => true);
			$arr_fonts_combo_10 = array('ubuntu_vollkorn' => true, 'combo10' => true, 'combo_10' => true);

			/*
			 * http://designshack.net/articles/typography/10-more-great-google-font_combinations-you-can-copy
			 */
			$arr_fonts_combo_11 = array('bree_open' => true, 'combo11' => true, 'combo_11' => true);
			$arr_fonts_combo_12 = array('bevan_pontano' => true, 'combo12' => true, 'combo_12' => true);
			$arr_fonts_combo_13 = array('abril_average' => true, 'abril_fatface_average' => true, 'combo13' => true, 'combo_13' => true);	
			$arr_fonts_combo_14 = array('playfair_muli' => true, 'playfair_display_muli' => true, 'combo14' => true, 'combo_14' => true);
			$arr_fonts_combo_15 = array('sansita_kameron' => true, 'sansita_one_kameron' => true, 'combo15' => true, 'combo_15' => true);
	
			$arr_fonts_combo_16 = array('istok_lora' => true, 'istok_web_lora' => true, 'combo16' => true, 'combo_16' => true);	
			$arr_fonts_combo_17 = array('pacifico_arimo' => true, 'combo17' => true, 'combo_17' => true);
			$arr_fonts_combo_18 = array('nixie_ledger' => true, 'nixie_one_ledger' => true, 'combo18' => true, 'combo_18' => true);		
			$arr_fonts_combo_19 = array('cantata_imprima' => true, 'cantata_one_imprima' => true, 'combo19' => true, 'combo_19' => true);	
			$arr_fonts_combo_20 = array('rancho_gudea' => true, 'combo20' => true, 'combo_20' => true);
			
			$arr_fonts_combo_21 = array('smart' => true, 'combo21' => true, 'combo_22' => true);

			$arr_return = array();
			
			if ( isset ($arr_fonts_combo_1[$str_preset]) ){
				$arr_return = array('font_lobster' => true, 'font_cabin' => true);
			} elseif ( isset($arr_fonts_combo_2[$str_preset]) ){
				$arr_return = array('font_raleway' => true, 'font_goudy_bookletter_1911' => true);
			} elseif ( isset($arr_fonts_combo_3[$str_preset]) ){
				$arr_return = array('font_allerta' => true, 'font_crimson_text' => true);
			} elseif ( isset($arr_fonts_combo_4[$str_preset]) ){
				$arr_return = array('font_arvo' => true, 'font_pt_sans' => true);
			} elseif ( isset($arr_fonts_combo_5[$str_preset]) ){
				$arr_return = array('font_dancing_script' => true, 'font_josefin_sans' => true);
				
			} elseif ( isset($arr_fonts_combo_6[$str_preset]) ){
				$arr_return = array('font_allan_bold' => true, 'font_cardo' => true);			
			} elseif ( isset($arr_fonts_combo_7[$str_preset]) ){
				$arr_return = array('font_molengo' => true, 'font_lekton' => true);	
			} elseif ( isset($arr_fonts_combo_8[$str_preset]) ){
				$arr_return = array('font_droid_serif' => true, 'font_droid_sans' => true);					
			} elseif ( isset($arr_fonts_combo_9[$str_preset]) ){
				$arr_return = array('font_corben' => true, 'font_nobile' => true);
			} elseif ( isset($arr_fonts_combo_10[$str_preset]) ){
				$arr_return = array('font_ubuntu' => true, 'font_vollkorn' => true);
			 
			} elseif ( isset($arr_fonts_combo_11[$str_preset]) ){
				$arr_return = array('font_bree_serif' => true, 'font_open_sans' => true);
			} elseif ( isset($arr_fonts_combo_12[$str_preset]) ){
				$arr_return = array('font_bevan' => true, 'font_pontano_sans' => true);		
			} elseif ( isset($arr_fonts_combo_13[$str_preset]) ){
				$arr_return = array('font_abril_fatface' => true, 'font_average' => true);			
			} elseif ( isset($arr_fonts_combo_14[$str_preset]) ){
				$arr_return = array('font_playfair_display' => true, 'font_muli' => true);			
			} elseif ( isset($arr_fonts_combo_15[$str_preset]) ){
				$arr_return = array('font_sansita_one' => true, 'font_kameron' => true);

			} elseif ( isset($arr_fonts_combo_16[$str_preset]) ){
				$arr_return = array('font_istok_web' => true, 'font_lora' => true);
			} elseif ( isset($arr_fonts_combo_17[$str_preset]) ){
				$arr_return = array('font_pacifico' => true, 'font_arimo' => true);	
			} elseif ( isset($arr_fonts_combo_18[$str_preset]) ){
				$arr_return = array('font_nixie_one' => true, 'font_ledger' => true);
			} elseif ( isset($arr_fonts_combo_19[$str_preset]) ){
				$arr_return = array('font_cantata_one' => true, 'font_imprima' => true);
			} elseif ( isset($arr_fonts_combo_20[$str_preset]) ){
				$arr_return = array('font_rancho' => true, 'font_gudea' => true);				
			} elseif ( isset($arr_fonts_combo_21[$str_preset]) ){
				$arr_return = array('font_droid_sans' => true, 'font_droid_serif' => true, 'boogaloo' => true, 'economica' => true);		
			} else {
				$arr_return = array('font_lobster' => true, 'font_cabin' => true);
			}
			
			return $arr_return;
		}
		
	} // close: class
} // close: if class exists
?>