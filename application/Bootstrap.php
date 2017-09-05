<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initCategory(){
        // $categoryTable = new Zend_Db_Table('category');
        // $categoryTable->fetchAll()->toArray();
        $listCate = ['php','java','js'];
        return $listCate;
    }

}

