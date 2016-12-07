<?php
/**
 * Created by PhpStorm.
 * User: Luca
 * Date: 16/9/26
 * Time: 11:01
 */

use Mini\Redis;

class UserRedis extends Redis{

    public function getMoney(){
        return $this->redisReader()->get('event_rujia_money');
    }

    public function setMoney(){
        return $this->redisReader()->set('event_rujia_money',33);
    }

    public function popLog(){
        return $this->redisReader()->rPop('log_list');
    }
}