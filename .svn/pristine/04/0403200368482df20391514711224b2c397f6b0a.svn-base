<?php
/**
 * 市级管理员操作
 * Created by PhpStorm.
 * User: yyn
 * Date: 2017/7/26
 * Time: 19:40
 */
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function __construct()
    {
        parent::__construct();
        if (!session("username")) {
            $this->redirect('Index/index');
        }
    }

    /**
     * 首页
     */
    public function index() {
        $this->display();
    }

    /**
     * 评分标准
     */
    public function standard() {
        $this->display();
    }

    /**
     * 显示所有用户
     */
    public function getAllUser(){
        $result = D("Tuser","Model")->getUserInfor();
        $this->ajaxReturn($result);
    }

    /**
     * 根据id显示用户详细信息
     */
    public function getUserInfor(){
        $id = I("post.id",2);
        $result = D("Tuser","Model")->getUserInforById($id);
        $this->ajaxReturn($result);
    }


    /**
     * 退出登录
     * @author：yyn
     */
    public function logout() {
        D("Login","Service")->logout();
        $this->redirect("Index/index","页面跳转中……");
    }
}