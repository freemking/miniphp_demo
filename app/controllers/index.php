<?php
/**
 * Created by PhpStorm.
 * User: Luca
 * Date: 16/8/6
 * Time: 17:19
 */
use Mini\Controller;
use Mini\Model;
use Mini\Config;


class IndexController extends Controller{
    public function indexAction(){
        //$userModel = Model::getInstance('user');
        //$rs = $userModel->popLog();
        echo date('Y-m-d H:i:s');
    }

    public function testAction(){
        $userModel = Model::getInstance('User');
//        $userModel->update();
//        $userModel->insert();
        $userModel->getData();
//        $userModel->setMoney();
//        $userModel->getMoney();
        $this->view()->name = 'luca';
        $this->view()->age = 18;
        $this->display('test');
    }
}