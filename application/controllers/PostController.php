<?php

class PostController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $postTable = new Zend_Db_Table('post');

        $queryBestView = $postTable->fetchAll($postTable->select()->order('post_view DESC')->limit(0,2));
        $listBestView = $queryBestView->toArray();

        $queryNewest = $postTable->fetchAll($postTable->select()->order('id DESC')->limit(0,2));
        $listNewest = $queryNewest->toArray();

        $queryNewest = $postTable->fetchAll($postTable->select()->order('id DESC')->limit(0,2));
        $listNewest = $queryNewest->toArray();
        
        $this->view->listBestView = $listBestView;
        $this->view->listNewest = $listNewest;
    }


}

