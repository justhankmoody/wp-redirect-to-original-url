<?php
/**
 * @package WP-redirect-to-original-url
 * @version 1.0
 */

/*
Plugin Name: WP-redirect-to-original-url
Plugin URI: https://github.com/justhankmoody/wp-redirect-to-original-url
Description: Stupid and simple wordpress plugin to redrect on original URL after login
Author: justhankmoody
Author URI: https://github.com/justhankmoody
Version: 1.0
*/


add_filter( 'login_url', 'rcmp_redirect_login' );

function rcmp_redirect_login( $url ) {
    
	if($_SERVER["REQUEST_URI"]!="/")
	{
	  $redirect_to = '?redirect_to=' . $_SERVER["REQUEST_URI"];
	}
	
	return get_site_url().'/wp-login.php'. $redirect_to;
}


