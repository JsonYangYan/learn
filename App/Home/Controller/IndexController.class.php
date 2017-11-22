<?php
//评估系统登录页的操作
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //显示登录首页
    public function index(){
	    $this->show();
    }

    //登录操作
    public function doLogin() {
        $username = I("post.name");
        $password = I("post.password");
        $result = D("Login","Service")->doLogin($username, $password);
        $this->ajaxReturn($result);
    }


}