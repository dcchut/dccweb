<?php
namespace dccweb\Controllers;

class Bio extends \dccweb\TemplateController {
    protected $title = 'bio';
  
    public function action_default() {
        $data = array('age' => $this->mm()->Load('dcc')->getAge(),
                      'posts' => $this->mm()->Load('Post')->getAllPosts());
                                            
        $this->content = $this->vm()->Load('Bio', $data);
    }
  
    public function action_secret() {
        $this->content = $this->vm()->Load('BioSecret');
    }
}