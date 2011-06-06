<?php
namespace dccweb;

abstract class TemplateController extends Core\Controller {
  private $site_root   = '/';
  protected $template  = 'Template';
  protected $title     = 'dccweb';

  public function Content() {
    // we want to remap our content through the template
    $vars = array('title'     => $this->title, 
                  'site_root' => $this->site_root, 
                  'content'   => $this->content);
              
    // get the vm
    $vm = $this->getViewManager();
    
    // run the template!
    return $vm->Load(ucfirst($this->template), $vars);
  }
}