<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoLoad(){
        //Session bat dau chay tai day
        Zend_Session::start();

        $controllerFront = Zend_Controller_Front::getInstance();        
        $myPlugin = new Application_Plugin_MyPlugin();                       
        $controllerFront->registerPlugin($myPlugin);
     //    $autoloader = Zend_Loader_Autoloader::getInstance();
	    // $autoloader->registerNamespace(array('Admin_'));
	    // $autoloader->setFallbackAutoloader(true);
	    // $autoloader->suppressNotFoundWarnings(false);   
	    // return $autoloader;
    }

}

