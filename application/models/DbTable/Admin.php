<?php

class Application_Model_DbTable_Admin extends Zend_Db_Table_Abstract
{

    protected $_name = 'wtv_admin';
    protected $isOk = false;

    public function getAdminInfoByUserAndUserPass(&$arrayResult,$userName = "",$userPass = "") {
    	$sql = $this->select()
    				->where("admin_user_name = ?",$userName)
    				->where("admin_user_pass = ?",$userPass);
    	$arrayResult['admin'] = $this->fetchAll($sql)->toArray();
    	if (count($arrayResult['admin']) == 1) {
    		$this->isOk = true;
            $arrayResult['message'] = "";
    	}
    	return $this->isOk;
    } 
}

