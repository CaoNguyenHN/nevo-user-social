<?php
/*
Plugin Name: Nevo User Social
Plugin URI: https://nevothemes.com/
Description: Add social fields to author/user profile
Version: 1.0.0
Author: NevoThemes
Author URI: https://nevothemes.com/
Domain Path: /languages
License: GPL3
*/


if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly


/* Extend user social profiles  */

add_filter( 'user_contactmethods', 'nevo_user_social_profiles' );

if ( !function_exists( 'nevo_user_social_profiles' ) ):
	function nevo_user_social_profiles( $contactmethods ) {

        $social = nevo_get_user_social();
        
		foreach ( $social as $soc_id => $soc_name ) {
			if ( $soc_id !== 'url' ) {
				$contactmethods[$soc_id] = $soc_name;
			}
		}
		return $contactmethods;
	}
endif;


/* Get array of social options  */

if ( !function_exists( 'nevo_get_user_social' ) ) :
	add_filter( 'nevo_modify_user_social', 'nevo_get_user_social');
	function nevo_get_user_social() {

		$social = array(
			'url' => 'Website',
			'facebook' => 'Facebook',
			'twitter' => 'Twitter',
			'instagram' => 'Instagram',
			'pinterest' => 'Pinterest',
			'linkedin' => 'LinkedIN',
			'github' => 'Github',
			'tumblr' => 'Tumblr',
			'reddit' => 'ReddIT',
			'apple' => 'Apple',
			'behance' => 'Behance',
			'delicious' => 'Delicious',
			'deviantart' => 'DeviantArt',
			'digg' => 'Digg',
			'dribbble' => 'Dribbble',
			'flickr' => 'Flickr',
			'rss' => 'Rss',
			'skype' => 'Skype',
			'stumbleupon' => 'StumbleUpon',
			'soundcloud' => 'SoundCloud',
			'spotify' => 'Spotify',
			'vimeo' => 'Vimeo',
			'vine' => 'Vine',
			'wordpress' => 'WordPress',
			'xing' => 'Xing' ,
			'youtube' => 'Youtube'
		);
		return $social;
	}
endif;