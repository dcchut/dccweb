<?php
// dcc.nitrated.net
// by dcc

// introductory configuration
define('SITE_ROOT', 'http://localhost/bio/');
require_once('site.php');

// get the last portion of request URI
$request = explode("/", $_SERVER['REQUEST_URI']);
$request = end($request);

// is our request a "good" thing?
if (!preg_match('/^[\w @.-]*$/', $request)
	|| !file_exists(dirname(__FILE__).'/pages/'.$request.'.php')) {
	$request = 'bio';
}

// include our request
require_once('/pages/' . $request . '.php');

// do the "magic"
echo show_site(get_page_content(), get_page_title());