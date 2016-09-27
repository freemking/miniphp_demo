<?php
/**
 * Created by PhpStorm.
 * User: Luca
 * Date: 16/8/6
 * Time: 23:44
 */
use Mini\Model;

class userModel extends Model{

    public function get(){
        echo 'model:get';
    }

    public function getData(){
        $userInfo = $this->db()->getUserInfoById(1);
        print_r($userInfo);
    }

    public function getMoney(){
        $money = $this->redis()->getMoney();
        print_r($money);
    }

    public function setMoney(){
        $money = $this->redis()->setMoney();
    }

    public function update(){
        $this->db()->updateUserInfo(1,'刘超');
    }


    public function insert(){
        $this->db()->insertUserInfo('ooCkDj-TKHOs9V0to231LgSAHPdd','刘思序','18602161234','1473647061');
    }
}