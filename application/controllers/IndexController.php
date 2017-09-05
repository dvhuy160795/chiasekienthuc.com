<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $bootstrap = $this -> getInvokeArg ( 'bootstrap' ) ;
        $view = $bootstrap -> getResource ( 'category' ) ;
        var_dump($view);
    }


}

