<?php

class UserController extends Zend_Controller_Action
{

    public function init()
    {
        $dbUser = new Application_Model_DbTable_User();
    }

    public function indexAction()
    {
        // action body
    }

    public function registerAction()
    {
        $this->_helper->layout->disableLayout();
        $params = $this->_request->getParams();
        $this->_response->setBody(json_encode($params));
    }


}



