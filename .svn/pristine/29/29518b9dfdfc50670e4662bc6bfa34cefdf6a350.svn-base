<?php
/**
 * Created by PhpStorm.
 * User: yyn
 * Date: 2017/8/14
 * Time: 15:07
 */
namespace Home\Service;
use Think\Model;
class LoginService extends Model{
    /**
     * 登录
     */
    public function doLogin($username, $password) {
        $result = D("Tuser","Model")->doLogin($username);
        if (!$result) {
            return "username_error";
        }
        $password_db = $result["password"];
        $password_input = $password;
        if ($password_db != $password_input) {
            return "password_error";
        }
        $role = $result["role"];
        session("username",$username);
        return $role;
    }

    /**
     * 退出登录
     */
    public function logout(){
        session(null);
    }


}