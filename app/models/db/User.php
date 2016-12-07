<?php
/**
 * Created by PhpStorm.
 * User: Luca
 * Date: 16/8/7
 * Time: 15:15
 */
use Mini\DB;

class UserDB extends DB{

    #获取用户信息 通过id
    public function getUserInfoById($id){
        $sql  = "select * from yellowduck_sun_userinfo where id = :id limit 1";
        $params = [
            'id' => $id,
        ];
        return $this->fetch($sql,$params);
    }

    #更新用户信息
    public function updateUserInfo($id,$name){
        $sql = "update yellowduck_sun_userinfo set name = :name where id = :id";
        $params = [
            'id' => $id,
            'name' => $name,
        ];
        return $this->update($sql,$params);
    }

    public function insertUserInfo($openid,$name,$tel,$addtime){
        $sql = "insert into yellowduck_sun_userinfo (openid,name,tel,addtime) values (:openid,:name,:tel,:addtime)";
        $params = [
            'openid' => $openid,
            'name' => $name,
            'tel' => $tel,
            'addtime' => $addtime,
        ];
        return $this->insert($sql,$params);
    }
}