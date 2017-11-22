<?php
/**
 * 关于市级管理员、县级管理员、超级管理员的应用
 * Created by PhpStorm.
 * User: xgj
 * Date: 2017/7/26
 * Time: 19:09
 */
namespace Home\Model;
use Think\Model;
class TuserModel extends  Model{

    /**
     * 登录操作
     * @param $username
     * @param $password
     */
    public function doLogin($username) {
        //查找用户名
        $result = M("Tuser")->where("username = '$username'")->find();
        return $result;
    }

    /**
     * 根据登录名获取用户Id
     * @param $username
     * author yan
     */
    public function getIdByUserName($username){
        $result = M("Tuser")->field('id')->where("username = '$username'")->find();
        $userId = $result["id"];
        return $userId;
    }

    /**
     * 根据登录名获取用户提交量表状态
     * @param $username
     * author yan
     */
    public function getStateByUserName($username){
        $result = M("Tuser")->field('state')->where("username = '$username'")->find();
        $userId = $result["state"];
        return $userId;
    }

    /**
     * 获取全部用户
     * @param $username
     * author yan
     */
    public function getUserInfor(){
        $sql = "SELECT id,depart,all_score,first_score FROM tuser WHERE `role` = 'user' AND state = 1 ORDER BY all_score DESC ";
        $result = M()->query($sql);
        $array = array();
        foreach($result as $k=>$v){
            $data["userId"] = $v['id'];
            $data["depart"] = $v['depart'];
            $data["allScore"] = $v['all_score'];
            $data["firstScore"] = explode(',',$v['first_score']);
            $array[] = $data;
        }
        return $array;
    }

    /**
     * 根据id获取用户的详细信息
     */
    public function getUserInforById($id){
        $sql = "SELECT first_score,second_score,third_score,depart FROM tuser WHERE `role` = 'user' AND id = $id ";
        $result = M()->query($sql);
        $array = array();
        //$data["firstScore"] = explode(',',$result[0]['first_score']);
        $data["secondScore"] = explode(',',$result[0]['second_score']);
        $data["thirdScore"] = explode(',',$result[0]['third_score']);
        $data["depart"] = $result[0]['depart'];
        $array[] = $data;
        return $array;
    }

    /**
     * 插入指标得分
     */
    public function updateScore($allScore,$firstScore,$secondScore,$thirdScore,$id,$state){
        $data["state"] = $state;
        $data["all_score"] = $allScore;
        $data["first_score"] = $firstScore;
        $data["second_score"] = $secondScore;
        $data["third_score"] = $thirdScore;
        $result = M("Tuser")->where("id = $id")->save($data);
        return $result;
    }


}