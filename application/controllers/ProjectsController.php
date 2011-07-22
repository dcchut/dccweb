<?php

class ProjectsController extends Zend_Controller_Action
{
    public function init()
    {
        $ajaxContext = $this->_helper->getHelper('AjaxContext');
        $ajaxContext->addActionContext('index', 'html')
                    ->initContext();
    }

    public function indexAction()
    {
    	$project = new Application_Model_Project();
    	$this->view->projects = $project->fetchAll();
    }
}

