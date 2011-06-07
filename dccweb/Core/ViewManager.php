<?php
namespace dccweb\Core;

class ViewManager {
  protected $_namespace;
  
  public function __construct(Namespace $namespace) {
    $this->_namespace = $namespace;
  }
  
  public function Load($name, $vars = array()) {
    // since we are loading actual files, have to change backslashes to forwardslashes
    // for this to work undex *ux
    $_view_name = strtr($this->_namespace->Get() . ucfirst($name), '\\', '/') . '.php';
    
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