<?php
/**
 * Created by PhpStorm.
 * User: Luca
 * Date: 16/8/6
 * Time: 17:19
 */
use Mini\Controller;

class CallbackController extends Controller{
    public function indexAction(){
        $this->redirect('/');
    }

    public function ceaAction(){
        echo htmlspecialchars($_GET['code']);
    }

}