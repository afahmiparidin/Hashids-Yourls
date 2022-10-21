<?php
/*
Plugin Name: Hashids-Yourls
Plugin URI: https://github.com/afahmiparidin/Hashids-Yourls/
Description: To change different type of hashing keyword.
Version: 0.2
Author: afahmiparidin
Author URI: https://my.linkedin.com/in/fahmiparidin

Modified by Jens-U. Mozdzen <jmozdzen@nde.ag>

History:
2022-10-21 JMo: we're now using HASHID_SALT and HASHID_MINLEN global parameters
2022-10-21 JMo: cosmetic changes
*/

require('lib/Hashids.php');

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

// We use two global parameters
if( !defined( 'HASHID_SALT' ) ) die();
if( !defined( 'HASHID_MINLEN' ) ) die();
 
// Generate a random keyword
yourls_add_filter( 'random_keyword', 'afp_random_keyword' );

function afp_random_keyword() {
	// elaboration from ozh random-keywords-master plugin
	global $afp_random_keyword;

	// Define Salt
	$salt = HASHID_SALT;

	// Set minimum character of keyword
	$minchar = HASHID_MINLEN;

	// get next decimal from 
	$id = yourls_get_next_decimal();
	$possible = yourls_get_shorturl_charset() ;
	$str='';

	$hashids = new Hashids\Hashids($salt,$minchar);
	$str = $hashids->encode($id);

	return $str;
}

