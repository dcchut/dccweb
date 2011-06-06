<?php
namespace DccLib;

class ModelManager {
  protected $_namespace;
  
  public function __construct($namespace) {
    $this->_namespace = $namespace;
  }
  
  public function Load($name) {
    $modelName = $this->_namespace . ucfirst($name);
    
    return new $modelName();
  }
}