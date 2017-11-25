<?php

class Admin_Models_Admin extends Zend_Db_Table_Abstract
{

    protected $_dbTable = 'wtv_admin';

    public function getAdminInfo(&$arrayResult,$userName = "",$userPass = "") {
    	$sql = $this->_dbTable->select()
    					->where(['admin_user_name = ?' => $userName, 'admin_user_name = ?' => $userPass]);
    	$arrayResult = $this->_dbTable->fetchAll($sql);
    	return $arrayResult;
    } 
}

