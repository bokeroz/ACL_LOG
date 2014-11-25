<?php

namespace Permission\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{    
    public function denyAction(){
        $basePath = $this->getRequest()->getBasePath();
        echo '<h1>Access Denied</h1><br/><a href="'.$basePath.'">Home</a>';
        return $this->response;
    }
}