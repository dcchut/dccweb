<?php
// dcc.nitrated.net
// by dcc

// introductory configuration
define('SITE_ROOT', 'http://dcc.nitrated.net/');
require_once('site.php');

// get the last portion of request URI
$request = explode("/", $_SERVER['REQUEST_URI']);
$request = end($request);

// is our request a "good" thing?
if (!preg_match('/^[\w @.-]*$/', $request)
	|| !file_exists(dirname(__FILE__) . '/pages/'.$request.'.php')) {
	$request = 'bio';
}

// include our request
require_once(dirname(__FILE__) . '/pages/' . $request . '.php');

// do the "magic"
echo show_site(get_page_content(), get_page_title());

// get our lock file
$f = fopen("/tmp/dccweb.lock", "w") or die();

// increase the hit counter
if (flock($f, LOCK_EX)) {
	file_put_contents('hits', "\n", LOCK_EX | FILE_APPEND);
}

fclose($f);