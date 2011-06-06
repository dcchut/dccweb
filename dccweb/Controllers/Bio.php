<?php
namespace dccweb\Controllers;

class Bio extends \dccweb\TemplateController {
  protected $title = 'bio';
  
  public function action_default() {
    $this->content = $this->vm()->Load('Bio', 
                                  array('age' => 
                                        $this->mm()->Load('dcc')->getAge()));
  }
  
  public function action_secret() {
    $this->content = $this->vm()->Load('BioSecret');
  }
}