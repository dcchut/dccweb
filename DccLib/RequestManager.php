<?php
namespace DccLib;

class RequestManager {
  protected $_controller;
  protected $_method;
  protected $_args = array();
  
  public function __construct($uri, $namespace, $default_controller) {
    // expand our URI
    $uri   = strtolower(ltrim($uri, '/'));
    $parts = explode('/', $uri);
    
    // get the controller
    $controller = $namespace . ucfirst($parts[0]);
    $method     = 'action_default';
    $args       = array();
      
    // does this exist?
    if (!class_exists($controller)) {
      $controller = $namespace . ucfirst($default_controller);
    } else {
      if (count($parts) > 1 && method_exists($controller, 'action_' . $parts[1])) {
        $method = 'action_' . $parts[1];
        $args   = array_slice($parts, 2);
      }
    }
    
    // save these details
    $this->_controller = $controller;
    $this->_method = $method;
    $this->_args = $args;
  }
  
  public function setArgs($args) {
    $this->_args = $args;
  }
  
  public function Run($viewManager = null, $modelManager = null) {
    // create the controller
    $c = new $this->_controller();
    
    // is this actually a controller?
    if (!is_a($c, '\DccLib\Controller')) {
      throw new Exceptions\InvalidController();
    }
    
    // inject the view manager into the controller
    if (!is_null($viewManager) && is_a($viewManager, '\DccLib\ViewManager')) {
      $c->setViewManager($viewManager);
    }
    
    if (!is_null($modelManager) && is_a($modelManager, '\DccLib\ModelManager')) {
      $c->setModelManager($modelManager);
    }
    
    // run the before method
    $c->Before();
    
    // run the method w/ args
    call_user_func_array(array($c, $this->_method), $this->_args);
    
    // run the after method
    $c->After();
    
    // return the content
    return $c->Content();
  }
}