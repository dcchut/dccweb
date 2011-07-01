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

// do the activerecord shit!
require_once('php-activerecord/ActiveRecord.php');

ActiveRecord\Config::initialize(function($cfg){
    $cfg->set_model_directory('dccweb/Models');
    $cfg->set_connections(array(
        'development' => 'sqlite:///home/dcchut/dccweb/shared/db/dccweb.db'));
});

// get our namespace object
use \dccweb\Core\NS as ns;

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

// increment hits counter

exit();
