<?php
/**
 * Created by PhpStorm.
 * User: Luca
 * Date: 16/8/6
 * Time: 17:19
 */
use Mini\Controller;
use Mini\Model;

class IndexController extends Controller{
    public function indexAction(){
        echo 'index';
    }

    public function testAction(){
        $userModel = Model::getInstance('user');
        $userModel->update();
        $userModel->insert();
        $userModel->getData();
        $userModel->setMoney();
        $userModel->getMoney();
        $this->view()->name = 'luca';
        $this->view()->age = 18;
        $this->display('test');
    }
}