<?php
namespace dccweb\Controllers;

class Contact extends \dccweb\TemplateController {
  protected $title = 'contact';
  
  public function action_default() {
    $this->content = $this->vm()->Load('Contact');
  }
}