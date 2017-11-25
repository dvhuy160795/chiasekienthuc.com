<?php

class Application_Form_LoginAdmin extends Zend_Form
{

    public function init()
    {
        $adminName = new Zend_Form_Element_Text('userName');
        $adminName->setLabel('Admin Name :');
        $adminName->setAttrib('class','form-control');
        $adminName->setAttrib('placeholder','User Name');

        $adminPass = new Zend_Form_Element_Password('userPass');
        $adminPass->setLabel('Password :');
        $adminPass->setAttrib('class','form-control');
        $adminPass->setAttrib('placeholder','Password');

        $buttonLogin = new Zend_Form_Element_Submit('Login');
        $buttonLogin->setAttrib('class','btn btn-success');
        $this->addElements([$adminName,$adminPass,$buttonLogin]);

        //xoa cac layout default cho cac element
        foreach ($this->getElements() as $element) {
            $element->setDecorators(['viewHelper']);
        }
    }


}

