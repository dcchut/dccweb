<?php

class BioController extends Zend_Controller_Action
{
    public function init()
    {
        $ajaxContext = $this->_helper->getHelper('AjaxContext');
        $ajaxContext->addActionContext('index', 'html')
                    ->initContext();
    }

    public function indexAction()
    {
    	$post = new Application_Model_Post();
    	$this->view->posts = $post->fetchAll();
    }
}

