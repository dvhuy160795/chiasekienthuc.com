<?php
/**
* 
*/
class Admin_Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	
	protected function _initAutoLoad ()
	{
		$controllerFront = Zend_Controller_Front::getInstance();        
        $myPlugin = new Application_Plugin_MyPlugin();                       
        $controllerFront->registerPlugin($myPlugin);
        echo "sadfsa";
	}
}