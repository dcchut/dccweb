<?php
namespace DccSite\Controllers;

class Contact extends \DccSite\TemplateController {
  protected $title = 'contact';
  
  public function action_default() {
    $this->content = $this->vm()->Load('Contact');
  }
}