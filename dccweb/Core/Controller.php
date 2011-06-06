<?php
namespace dccweb\Core;

abstract class Controller {
  private $_viewManager;
  private $_modelManager;
  protected $content;
  
  /*
   * Set and Get the view manager
   */
  final public function setViewManager(ViewManager $manager) {
    $this->_viewManager = $manager;
  }
  
  final public function getViewManager() {
    return $this->_viewManager;
  }
  
  final public function vm() {
    return $this->getViewManager();
  }

  /*
   * Set and Get the model manager
   */
  final public function setModelManager(ModelManager $manager) {
    $this->_modelManager = $manager;
  }
  
  final public function getModelManager() {
    return $this->_modelManager;
  }
  
  final public function mm() {
    return $this->getModelManager();
  }
  
  /*
   * Functions dealing with content
   */
  public function Content() {
    return $this->content;
  }
  
  // executed before the action
  public function Before() {}
  
  // execute after the action
  public function After() {}
  
  /*
   * Actions
   */
  
  // <must> have a default action
  abstract public function action_default();
}