<?php

namespace Home\Controller;
use function Sodium\add;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class LoginController extends Controller{
    public function login(){
        if($_POST){
            $menber =M('menber');
            $res = $menber->where(array('tel'=>$_POST['name'],'pwd'=>$_POST['pwd']))->select();
            if($res[0]){
                session_start();
                session('name',$_POST['name']);
                session('uid',$res[0]['uid']);
                echo "<script>window.location.href='".__ROOT__."/index.php/Home/Index/index';</script>";
            }else{
                echo "<script>alert('用户名或密码错误');</script>";
            }
        }
        $this->display();
    }

    public function reg(){
        if($_POST){
            $fid = $_GET['fid'];
            $data['name'] = $_POST['name'];
            $data['pwd'] = $_POST['pwd'];
            $data['pwd2'] = $_POST['pwd2'];
            $menber = M('menber');
            $userid = $menber->add($data);
            if($fid){
                $menber->where(array('uid'=>$fid))->select();
            }
        }
        $this->display();
    }

    public function forgetPwd(){
        $this->display();
    }
}