<?php
namespace Buser;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    public function getServiceConfig(){
        return array(
            'factories' => array(
       
                'core_service_cmf_cart'=>  function ($sm){
                    $cmf = new \Buser\Service\Cmf;
                    $cmf->setServiceManager($sm);
                    return $cmf;
                }, 
           
                'core_service_cmf_category'=>  function ($sm){
                    $cmf = new \Buser\Service\Cmf;
                    $cmf->setServiceManager($sm);
                    return $cmf;
                },   
              
                'cmf_service_user'=>function($sm){
                    $cmf = new \Buser\Service\Cmf;
                    $cmf->setServiceManager($sm);
                    return $cmf;
                }, 
              
                'Buser\Model\UserTable' => function($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $table = new Model\UserTable($dbAdapter);
                    return $table;
                },
           
                'Buser\Model\ModArchivosDatosFailTable' => function($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $table = new Model\ModArchivosDatosFailTable($dbAdapter);
                    return $table;
                },
            )    
        );
    }     
}
