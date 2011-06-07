<?php
namespace dccweb\Core;

class ModelManager {
  protected $_namespace;
  
  public function __construct(Namespace $namespace) {
    $this->_namespace = $namespace;
  }
  
  public function Load($name) {
    $modelName = $this->_namespace->Get() . ucfirst($name);
    
    return new $modelName();
  }
}