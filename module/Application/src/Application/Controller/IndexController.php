<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {
        $login = $this->getServiceLocator()->get('zfcuser_login_form');
        return new ViewModel(array(
            'loginForm' => $login,
        ));
    }

    public function basesAction() {
        $cmf_service_user = $this->getServiceLocator()->get('cmf_service_user');
        $user = $cmf_service_user->getUser()->getBasicInfo();
        return new ViewModel(array('userGid' => (int)$user['gid']));
    }

}
