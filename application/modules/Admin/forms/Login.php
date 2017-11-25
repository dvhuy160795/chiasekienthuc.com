<?php

class Admin_Form_Login extends Zend_Form
{

    public function init()
    {
        $adminName = new Zend_Form_Element_Text('name');
        $adminName->setLabel('Admin Name :');

        $adminPass = new Zend_Form_Element_Pass('pass');
        $adminPass->setLabel('Password :');

        $this->addElements([$adminName,$adminPass]);
    }


}

