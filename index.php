<?php
// dcc.nitrated.net
// by dcc

// our autoloading function
spl_autoload_register(function($class_name) {
  $file_name = __DIR__ . '/' . strtr($class_name, '\\', '/') . '.php';
  
  // does this file exist?
  if (file_exists($file_name)) {
    require($file_name);
  }
});

// get our namespace object
use dccwweb\Core\Namespace as ns;

// parse this URI
$requestManager = new dccweb\Core\RequestManager($_SERVER['REQUEST_URI'],
                                                    new ns(array('dccweb', 'Controllers')),
                                                    'Bio');
                                                    
// get a view manager
$viewManager = new dccweb\Core\ViewManager(new ns(array('dccweb', 'Views')));

// get a model manager
$modelManager = new dccweb\Core\ModelManager(new ns(array('dccweb', 'Models')));

// run the request
echo $requestManager->Run($viewManager, $modelManager);

// get our lock file
$f = fopen("/tmp/dccweb.lock", "w") or die();

// increase the hit counter
if (flock($f, LOCK_EX)) {
	file_put_contents('hits', "\n", LOCK_EX | FILE_APPEND);
}

fclose($f);

exit();
