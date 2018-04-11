<?php
/*
Plugin Name: Hashids
Plugin URI: http://yourls.org/
Description: To change different type of hashing keyword.
Version: 0.1
Author: afahmiparidin
Author URI: https://my.linkedin.com/in/fahmiparidin
*/
require('lib/Hashids.php');

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();
 
// Generate a random keyword
yourls_add_filter( 'random_keyword', 'afp_random_keyword' );
function afp_random_keyword() {
        // elaboration from ozh random-keywords-master plugin
		global $afp_random_keyword;
		
		// get next decimal from 
		$id = yourls_get_next_decimal();
        $possible = yourls_get_shorturl_charset() ;
        $str='';
		
		$hashids = new Hashids\Hashids('qQZQlDX18C',6); // Salt is qQZQlDX18C, min hash character is 6
		$str = $hashids->encode($id);
		
        return $str;
}

