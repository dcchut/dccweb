<?php

class BioController extends Zend_Controller_Action
{

    public function init()
    {
    	$post = new Application_Model_Post();
    	$this->view->posts = $post->fetchAll();
    }

    public function indexAction()
    {
    }


}

