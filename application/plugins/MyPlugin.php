<?php
class Application_Plugin_MyPlugin extends Zend_Controller_Plugin_Abstract
{
    protected $loggedAdmin = true;
    public function routeStartup(Zend_Controller_Request_Abstract $request)
    {
    }
 
    public function routeShutdown(Zend_Controller_Request_Abstract $request)
    {
        // $this->getResponse()
        //      ->appendBody("<p>routeShutdown () được gọi sau khi router hoàn thành định tuyến yêu cầu.</p>\n");
        // $arrayParam = $this->getRequest()->getParams();
        // var_dump($this->getRequest());
        // var_dump($arrayParam);die;
        // if (isset($arrayParam['module']) && $arrayParam['module'] == 'Admin') {

        //     $_SESSION['Admin']['logged'] = $this->loggedAdmin;

        //     if (!isset($_SESSION['Admin']['adminLogin'])){
        //         $this->loggedAdmin = false;
        //         $_SESSION['Admin']['logged'] = $this->loggedAdmin;
        //     }
        // }
    }
 
    public function dispatchLoopStartup(Zend_Controller_Request_Abstract $request)
    {
        // $this->getResponse()
        //      ->appendBody("<p>dispatchLoopStartup () được gọi trước khi Zend_Controller_Front vào vòng lặp gửi lệnh.</p>\n");
    }
 
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
        // $listTable = new Zend_Db_Table('list_post');
        
        // $listPostsDev = $listTable->fetchAll(["list_post_category_id = ?"=>1])->toArray();
        // $listPostsEdu = $listTable->fetchAll(["list_post_category_id = ?"=>2])->toArray();
        // $listPostsTech = $listTable->fetchAll(["list_post_category_id = ?"=>3])->toArray();
        // $listPostsTip = $listTable->fetchAll(["list_post_category_id = ?"=>4])->toArray();

        // Zend_Layout::getMvcInstance()->assign('listPostDev',$listPostsDev);
        // Zend_Layout::getMvcInstance()->assign('listPostsEdu',$listPostsEdu);
        // Zend_Layout::getMvcInstance()->assign('listPostsTech',$listPostsTech);
        // Zend_Layout::getMvcInstance()->assign('listPostsTip',$listPostsTip);
    }
 
    public function postDispatch(Zend_Controller_Request_Abstract $request)
    {
        // $this->getResponse()
        //      ->appendBody("<p>postDispatch() called</p>\n");
    }
 
    public function dispatchLoopShutdown()
    {
        // $this->getResponse()
        //      ->appendBody("<p>dispatchLoopShutdown() called</p>\n");
    }
}

