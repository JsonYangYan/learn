<?php
/**
 * 区县管理员操作
 * Created by PhpStorm.
 * User: yyn
 * Date: 2017/8/14
 * Time: 15:37
 */
namespace Home\Controller;
use Think\Controller;
class CountyController extends Controller {

//    public function __construct()
//    {
//        parent::__construct();
//        if (!session("username")) {
//            $this->redirect('Index/index');
//        }
//    }
    /**
     * 获取登录用户的所在区域
     */
    public function getAranName(){
        $username = session('username');
        $areaName = D("Tuser")->getAreaNameByUserName($username);
        $this->ajaxReturn($areaName);
    }

    /**
     * 用户首页
     * @author:yyn
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
     * 填报问卷
     */
    public function quiz() {
        $this->display();
    }


    //从前端获取每个用户的得分并更新
    public function getScore() {
        $username = session('username');
        $id = D("Tuser","Model")->getIdByUserName($username);

        $firstScore = I("post.level1");
        $secondScore = I("post.level2");
        $thirdScore = I("post.level3");

        $arr1[] = round($firstScore["1"],2);
        $arr1[] = round($firstScore["2"],2);
        $arr1[] = round($firstScore["3"],2);
        $arr2 = array();
        foreach($secondScore as $k=>$v){
                foreach($v as $kk=>$vv){
                    $arr2[] = round($vv,2);
                }
        }

       // $arr2 = implode(',',$secondScore["1"])."," .implode(',',$secondScore["2"])."," . implode(',',$secondScore["3"]);

        $arr3 = array();
        foreach($thirdScore as $k=>$v){
            $arr3[] = $v["value"];
        }

        $allScore = $firstScore["1"].value *0.40 + $firstScore["2"].value * 0.35 + $firstScore["3"].value *0.24;
        $result = D("Tuser","Model")->updateScore($allScore,implode(',',$arr1),implode(',',$arr2),implode(',',$arr3),$id,1);
        if ( false !== $result ){
            $this->ajaxReturn("ok");
        }else{
            $this->ajaxReturn("fail");
        }

    }

    /**
     * 根据id显示用户详细信息
     */
    public function getUserInfor(){
        $username = session('username');
        $id = D("Tuser","Model")->getIdByUserName($username);
        $result = D("Tuser","Model")->getUserInforById($id);
        $this->ajaxReturn($result);
    }

    /**
     * 评价结果
     */
    public function school() {
        $username = session('username');
        $state = D("Tuser","Model")->getStateByUserName($username);
        if($state == 0){
            $this->redirect('County/quiz',array(),2,'<p style="margin: auto">正在跳转在线评估页面</p>');
        }else{
            $this->display();
        }
    }

    //退出
    public function logout() {
        D("Login","Service")->logout();
        $this->redirect("Index/index","页面跳转中……");
    }
}