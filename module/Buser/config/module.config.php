<?php
return array(
    'view_helpers' => array(
        'factories' => array(
                'Categoryhelper' => function($sm){
                    $helper = new \Buser\View\Helper\Categoryhelper;
                    $sl = $sm->getServiceLocator();
                    $helper->setSm($sl);                
                    return $helper;
                }
        )
    ),     
);