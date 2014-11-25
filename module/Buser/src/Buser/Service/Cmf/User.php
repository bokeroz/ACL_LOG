<?php

namespace Buser\Service\Cmf;

use Zend\ServiceManager\ServiceManagerAwareInterface;
use Zend\ServiceManager\ServiceManager;

class User implements ServiceManagerAwareInterface{ 

    public function __construct(ServiceManager $serviceManager) {
        $this->setServiceManager($serviceManager);
    }

   
    public function getBasicInfo(){
        $auth = $this->getServiceManager()->get('zfcuser_auth_service');
        $data = array();
        if(!is_null($auth->getStorage()->read())){
            $session = $auth->getStorage()->read();
            $info = $this->getUserinfo($session->getId());
            $data = array(
                'id'=>$session->getId(),
                'username'=>$session->getUsername(),
                'email'=>$session->getEmail(),
                'displayName'=>$session->getDisplayname(),
                'gid'=> $this->getGid($session->getId()),
            );            
        }
        return $data;        
    }
    
    public function getUserinfo($user_id){
        $UserData = $this->getServiceManager()
                ->get('Buser\Model\UserTable');
        return $UserData->finduserInfo($user_id);
    }
    
    public function getGid($user_id){
        $UserData = $this->getServiceManager()
                ->get('Buser\Model\UserTable');
        return $UserData->findGid($user_id);
    }
 
    public function getServiceManager(){
        return $this->serviceManager;
    }

    
    public function setServiceManager(ServiceManager $serviceManager){
        $this->serviceManager = $serviceManager;
        return $this;
    }      
}
