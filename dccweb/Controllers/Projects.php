<?php
namespace dccweb\Controllers;

class Projects extends \dccweb\TemplateController {
    protected $title = 'projects';
  
    public function action_default() {
        $data = array('projects' => $this->mm()->Load('Project')->getAllProjects());
        
        $this->content = $this->vm()->Load('Projects', $data);
    }
}