<?php
namespace DccSite\Controllers;

class Projects extends \DccSite\TemplateController {
  protected $title = 'projects';
  
  public function action_default() {
    $this->content = $this->vm()->Load('Projects');
  }
}