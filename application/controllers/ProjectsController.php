<?php

class ProjectsController extends Zend_Controller_Action
{

    public function init()
    {
    	$project = new Application_Model_Project();
    	$this->view->projects = $project->fetchAll();
    }

    public function indexAction()
    {
        // action body
    }


}

