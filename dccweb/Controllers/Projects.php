<?php
namespace dccweb\Controllers;

class Projects extends \dccweb\TemplateController {
  protected $title = 'projects';
  
  public function action_default() {
    $this->content = $this->vm()->Load('Projects');
  }
}