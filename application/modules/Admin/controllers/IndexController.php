<?php

class Admin_IndexController extends Zend_Controller_Action
{

    private $adminLogged = true;
    private $authAdmin = [];
    public function init()
    {

        /* Initialize action controller here */
        /* disable view render */
        //$this->_helper->viewRenderer->setNoRender(true);
        /* disable layout */
        $this->_helper->layout->disableLayout();
        //$this->_helper->layout->setLayout(APPLICATION_PATH . "/modules/Admin/layouts/scripts/layout");
        //var_dump($this);
        $this->authAdmin = new Zend_Session_Namespace('Admin');
        if (empty($authAdmin->adminLogin)) {
            $this->adminLogged = false;
        }
    }

    public function indexAction()
    {
        //$this->_redirect('Admin/Index/Add');
        // var_dump($this->_pluginLoader);
        
    }

    public function addAction()
    {
        var_dump($_SESSION);
        //$this->_redirect('Admin/Index');
        // var_dump($this->_invokeArgs['bootstrap']);
    }

    public function loginAction()
    {
        // $formLoginConfig = new Zend_Config_Ini(APPLICATION_PATH . "/modules/Admin/config/formLogin.ini", "Login");
        // $formLogin = new Zend_Form($formLoginConfig->formLogin);
        $authAdmin = new Zend_Session_Namespace('Admin');
        $tableAdmin = new Application_Model_DbTable_Admin();
        $formLogin = new Application_Form_LoginAdmin();

        $params = $this->getRequest()->getParams();
        //check user click button login;
        if (!isset($params['Login'])) {
            $this->view->formLogin = $formLogin;
            return;
        }
        // else
        $arrayResult = [];
        $userName = isset($params['userName']) ? $params['userName'] : "";
        $userPass = isset($params['userPass']) ? $params['userPass'] : "";
        $loginIsOk = $tableAdmin->getAdminInfoByUserAndUserPass($arrayResult,$userName,$userPass);

        if (!$loginIsOk) {
            $arrayResult['message'] = "User name or Password are wrong!!";
            $this->view->aryAdmin = $arrayResult;
            $this->view->formLogin = $formLogin;
            return;
        }
        $authAdmin->adminLogin = $params;
        $this->_redirect('Admin/Index');
    }

    public function logoutAction()
    {
        $authAdmin = new Zend_Session_Namespace('Admin');
        Zend_Session::destroy();
        $this->_redirect('Admin/Index');
    }


}







