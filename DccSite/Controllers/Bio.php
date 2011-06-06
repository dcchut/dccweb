<?php
namespace DccSite\Controllers;

class Bio extends \DccSite\TemplateController {
  protected $title = 'bio';
  
  public function action_default() {
    $this->content = $this->vm()->Load('Bio', 
                                  array('age' => 
                                        $this->mm()->Load('dcc')->getAge()));
  }
}