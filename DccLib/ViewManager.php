<?php
namespace DccLib;

class ViewManager {
  protected $_namespace;
  
  public function __construct($namespace) {
    $this->_namespace = $namespace;
  }
  
  public function Load($name, $vars = array()) {
    $_view_name = $this->_namespace . ucfirst($name) . '.php';
    
    ob_start();
    
    // set up a 'clean' function to run the view from
    $clean = function() use ($_view_name, $vars) {
      extract($vars);
      require($_view_name);
    };
    
    $clean();
    
    return ob_get_clean();
  }
}