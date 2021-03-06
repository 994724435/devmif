<?php

namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class UserController extends CommonController{

    public function my(){
        $this->display();
    }

    /*
     * 积分充值
     */
    public function recharge(){
        $this->display();
    }

    /*
     * 个人资料
     */
    public function my_data(){
        $this->display();
    }

    /*
    * 完善资料
     */
    public function washan_data(){
        $this->display();
    }

    /*
    * 退本
     */
    public function tuiben(){
        if($_POST){
            if($_POST['num']<=0){
                echo "<script>alert('请输入正确金额在');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/tuiben';";
                echo "</script>";
                exit;
            }
            $menber =M('menber');
            $res_user = $menber->where(array('name'=>session('uid')))->select();
            $left = bcmul($res_user[0]['chargebag'] - $_POST['num'],2);
            if($left > 0){
                $re = $menber->where(array('name'=>session('uid')))->save(array('chargebag'=>$left));
                if($re){
                    $income =M('incomelog');
                    $data['type'] =7;
                    $data['state'] =0;
                    $data['reson'] ='退本';
                    $data['addymd'] =date('Y-m-d',time());
                    $data['addtime'] =date('Y-m-d H:i:s',time());
                    $data['orderid'] =session('uid');
                    $data['userid'] =session('uid');
                    $data['income'] =$_POST['num'];
                    $income->add($data);
                    $resreson ="退本".$_POST['num']."元";
                    echo "<script>alert('".$resreson."待管理员确认');";
                    echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
                    echo "</script>";
                    exit;
                }
            }else{
                echo "<script>alert('余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
                echo "</script>";
                exit;
            }

        }
        $this->display();
    }

    /*
    * 静态
     */
    public function jingtai(){
        $this->display();
    }

    /*
    * 动态
     */
    public function dongtai(){
        $this->display();
    }

    /*
    * 我的团队
     */
    public function my_gruop(){
        $this->display();
    }

    /*
    * 客服
    */
    public function kefu(){
        $this->display();
    }

    /*
    * 静态体现
     */
    public function tixian_jing(){
        if($_POST){
            if($_POST['num']<=0){
                echo "<script>alert('请输入正确金额在');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/tuiben';";
                echo "</script>";
                exit;
            }
            $menber =M('menber');
            $res_user = $menber->where(array('name'=>session('uid')))->select();
            if($res_user[0]['pwd2'] != $_POST['pwd2']){
                echo "<script>alert('二级密码不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/tuiben';";
                echo "</script>";
                exit;
            }
            $left = bcmul($res_user[0]['chargebag'] - $_POST['num'],2);
            if($left > 0){
                $re = $menber->where(array('name'=>session('uid')))->save(array('chargebag'=>$left));
                if($re){
                    $income =M('incomelog');
                    $data['type'] =3;
                    $data['state'] =0;
                    $data['reson'] ='退本';
                    $data['addymd'] =date('Y-m-d',time());
                    $data['addtime'] =date('Y-m-d H:i:s',time());
                    $data['orderid'] =session('uid');
                    $data['userid'] =session('uid');
                    $data['income'] =$_POST['num'];
                    $income->add($data);
                    $resreson ="退本".$_POST['num']."元";
                    echo "<script>alert('".$resreson."待管理员确认');";
                    echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
                    echo "</script>";
                    exit;
                }
            }else{
                echo "<script>alert('余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
                echo "</script>";
                exit;
            }

        }
        $this->display();
    }

    /*
       * 动态体现
        */
    public function tixian_dong(){
        if($_POST){
            if($_POST['num']<=0){
                echo "<script>alert('请输入正确金额在');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/tuiben';";
                echo "</script>";
                exit;
            }
            $menber =M('menber');
            $res_user = $menber->where(array('name'=>session('uid')))->select();
            if($res_user[0]['pwd2'] != $_POST['pwd2']){
                echo "<script>alert('二级密码不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/tuiben';";
                echo "</script>";
                exit;
            }
            $left = bcmul($res_user[0]['chargebag'] - $_POST['num'],2);
            if($left > 0){
                $re = $menber->where(array('name'=>session('uid')))->save(array('chargebag'=>$left));
                if($re){
                    $income =M('incomelog');
                    $data['type'] =4;
                    $data['state'] =0;
                    $data['reson'] ='退本';
                    $data['addymd'] =date('Y-m-d',time());
                    $data['addtime'] =date('Y-m-d H:i:s',time());
                    $data['orderid'] =session('uid');
                    $data['userid'] =session('uid');
                    $data['income'] =$_POST['num'];
                    $income->add($data);
                    $resreson ="退本".$_POST['num']."元";
                    echo "<script>alert('".$resreson."待管理员确认');";
                    echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
                    echo "</script>";
                    exit;
                }
            }else{
                echo "<script>alert('余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
                echo "</script>";
                exit;
            }

        }
        $this->display();
    }


    /**
     *  动态钱包互转
     */
    public function transfers_dong()
    {
        if($_POST){
            if($_POST['num']<=0){
                echo "<script>alert('金额不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_dong';";
                echo "</script>";
                exit;
            }
            $menber =M('menber');
            $res_user = $menber->where(array('uid'=>session('uid')))->select();
            if($res_user[0]['pwd2']!=$_POST['pwd2']){
                echo "<script>alert('二级密码不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_dong';";
                echo "</script>";
                exit;
            }
            $res_user1 = $menber->where(array('name'=>$_POST['name']))->select();
            if($res_user1[0]['tel'] != $_POST['phone']){
                echo "<script>alert('账户不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_dong';";
                echo "</script>";
                exit;
            }
            if($res_user[0]['chargebag']<$_POST['num']){
                echo "<script>alert('充值钱包余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_dong';";
                echo "</script>";
                exit;
            }
            if($res_user[0]['name']==$_POST['name']){
                echo "<script>alert('自己不能给自己转账');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_dong';";
                echo "</script>";
                exit;
            }

            //处理自己
            $chargebagmy =bcsub($res_user[0]['chargebag'],$_POST['num'],2);
            $menber->where(array('uid'=>session('uid')))->save(array('chargebag'=>$chargebagmy));
            $income =M('incomelog');
            $logdata['type'] = 9 ;
            $logdata['state'] =2 ;
            $logdata['reson'] ='动态转账' ;
            $logdata['addymd'] =date('Y-m-d',time()) ;
            $logdata['addtime'] =date('Y-m-d H:i:s',time()) ;
            $logdata['orderid'] =$res_user1[0]['uid'] ;
            $logdata['userid'] =session('uid');
            $logdata['income'] =$_POST['num'];
            $income->add($logdata);

            //处理他人
            $chargebaghim =bcadd($res_user1[0]['chargebag'],$_POST['num'],2);
            $menber->where(array('name'=>$_POST['name']))->save(array('chargebag'=>$chargebaghim));

            $logdata['type'] = 9;
            $logdata['state'] =1 ;
            $logdata['reson'] ='动态转账' ;
            $logdata['addymd'] =date('Y-m-d',time()) ;
            $logdata['addtime'] =date('Y-m-d H:i:s',time()) ;
            $logdata['orderid'] =session('uid');
            $logdata['userid'] =$res_user1[0]['uid'];
            $logdata['income'] =$_POST['num'];
            $income->add($logdata);
            echo "<script>alert('转账成功');";
            echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
            echo "</script>";
            exit;
        }
        $this->display();
    }

    /**
     *  静态钱包互转
     */
    public function transfers_jing()
    {
        if($_POST){
            if($_POST['num']<=0){
                echo "<script>alert('金额不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_jing';";
                echo "</script>";
                exit;
            }
            $menber =M('menber');
            $res_user = $menber->where(array('uid'=>session('uid')))->select();
            if($res_user[0]['pwd2']!=$_POST['pwd2']){
                echo "<script>alert('二级密码不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_jing';";
                echo "</script>";
                exit;
            }
            $res_user1 = $menber->where(array('name'=>$_POST['name']))->select();
            if($res_user1[0]['tel'] != $_POST['phone']){
                echo "<script>alert('账户不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_jing';";
                echo "</script>";
                exit;
            }
            if($res_user[0]['chargebag']<$_POST['num']){
                echo "<script>alert('充值钱包余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_jing';";
                echo "</script>";
                exit;
            }
            if($res_user[0]['name']==$_POST['name']){
                echo "<script>alert('自己不能给自己转账');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_jing';";
                echo "</script>";
                exit;
            }
            //处理自己
            $chargebagmy =bcsub($res_user[0]['chargebag'],$_POST['num'],2);
            $menber->where(array('uid'=>session('uid')))->save(array('chargebag'=>$chargebagmy));
            $income =M('incomelog');
            $logdata['type'] = 8 ;
            $logdata['state'] =2 ;
            $logdata['reson'] ='静态转账' ;
            $logdata['addymd'] =date('Y-m-d',time()) ;
            $logdata['addtime'] =date('Y-m-d H:i:s',time()) ;
            $logdata['orderid'] =$res_user1[0]['uid'] ;
            $logdata['userid'] =session('uid');
            $logdata['income'] =$_POST['num'];
            $income->add($logdata);
            //处理他人
            $chargebaghim =bcadd($res_user1[0]['chargebag'],$_POST['num'],2);
            $menber->where(array('name'=>$_POST['name']))->save(array('chargebag'=>$chargebaghim));

            $logdata['type'] =8 ;
            $logdata['state'] =1 ;
            $logdata['reson'] ='静态转账' ;
            $logdata['addymd'] =date('Y-m-d',time()) ;
            $logdata['addtime'] =date('Y-m-d H:i:s',time()) ;
            $logdata['orderid'] =session('uid');
            $logdata['userid'] =$res_user1[0]['uid'];
            $logdata['income'] =$_POST['num'];
            $income->add($logdata);
            echo "<script>alert('转账成功');";
            echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
            echo "</script>";
            exit;
        }
        $this->display();
    }






    public function regNext(){  //注册下级
        if($_POST['name']&&$_POST['pwd']){
            if(preg_match("/^1[34578]{1}\d{9}$/",$_POST['name'])){

            }else{
                echo "<script>alert('请用手机号码注册');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/regNext';";
                echo "</script>";
                exit;
            }
//            if($_POST['pwd']!=$_POST['pwd1']){
//                echo "<script>alert('密码不一致');";
//                echo "window.location.href='".__ROOT__."/index.php/Home/User/regNext';";
//                echo "</script>";
//                exit;
//            }
            $menber =M('menber');
            //  用户名
            $res_user =$menber->where(array('name'=>$_POST['name']))->select();
            if($res_user[0]){
                echo "<script>alert('用户名已存在');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/regNext';";
                echo "</script>";
                exit;
            }
            //  金额
            $res_menber =$menber->where(array('uid'=>session('uid')))->select();
            if($res_menber[0]['recast']<$_POST['radio1']){
                echo "<script>alert('复投钱包余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/regNext';";
                echo "</script>";
                exit;
            }
            $data['name'] =$_POST['name'];
            $data['pwd'] =$_POST['pwd'];
            $data['pwd2'] =$_POST['pwd1'];
            $data['type'] =0;
            $data['fuid'] =session('uid');
            $data['addtime'] =date('Y-m-d H:i:s',time());
            $data['addymd'] = date('Y-m-d',time());
            $data['chargebag'] =$_POST['radio1'];
            $data['incomebag'] =0;
            $res =$menber->add($data);
            if($res){
//                $chargebag =$res_menber[0]['chargebag']-$_POST['radio1'];
                $chargebag =bcsub($res_menber[0]['recast'],$_POST['radio1'],2);
                $menber->where(array('uid'=>session('uid')))->save(array('recast'=>$chargebag));
                // 上家金额记录
//                $datas['state'] = 2;
//                $datas['reson'] = "注册下级";
//                $datas['type'] = 5;
//                $datas['addymd'] = date('Y-m-d',time());
//                $datas['addtime'] = date('Y-m-d H:i:s',time());
//                $datas['orderid'] = $res;
//                $datas['userid'] = session('uid');
//                $datas['income'] = $_POST['radio1'];
//                $this->savelog($datas);
                //下家金额记录
                $data1['state'] = 1;
                $data1['reson'] = "注册收入";
                $data1['type'] = 1;
                $data1['addymd'] = date('Y-m-d',time());
                $data1['addtime'] = date('Y-m-d H:i:s',time());
                $data1['orderid'] = session('uid');     // 注册上家
                $data1['userid'] =$res;
                $data1['income'] = $_POST['radio1'];
                $this->savelog($data1);
            }
            echo "<script>alert('用户".$_POST['name']."注册成功');";
            echo "window.location.href='".__ROOT__."/index.php/Home/User/regNext';";
            echo "</script>";
            exit;

        }

        $this->display();
    }


    private function savelog($data){
        $incomelog =M('incomelog');
        return $incomelog->add($data);
    }


    public function payRecord(){  //充值记录
        $incomelog =M('incomelog');
        $condtion['userid'] =session('uid');
        $condtion['type']=2;
        $condtion['state']=1;
        $res = $incomelog->order('id DESC')->where($condtion)->select();
        $this->assign('res',$res);
        $this->display();
    }

    public function cancel(){
        $incomelog =M('incomelog');
        $condtion['uid'] =session('uid');
        $condtion['id']  =$_GET['id'];
        $res = $incomelog->where($condtion)->select();
        $income =$res[0]['income'];
        if($income<=0){
            echo "<script>alert('取消失败');";
            echo "window.location.href='".__ROOT__."/index.php/Home/User/cashRecord';";
            echo "</script>";
            exit;
        }
        $menber =M('menber');
        $useinfo = $menber->where(array('uid'=>session('uid')))->select();
//        $res_usermoney = $useinfo[0]['incomebag']+$income;
        $res_usermoney = bcadd($useinfo[0]['incomebag'],$income,2);
        $menber->where(array('uid'=>session('uid')))->save(array('incomebag'=>$res_usermoney));
        $incomelog->where(array('id'=>$_GET['id']))->save(array('state'=>3));
        echo "<script>alert('操作成功');";
        echo "window.location.href='".__ROOT__."/index.php/Home/User/cashRecord';";
        echo "</script>";
        exit;
    }

    public function cashRecord(){  //提现记录
        $incomelog =M('incomelog');
        $condtion['userid'] =session('uid');
        $condtion['type']=3;
//        $condtion['state']=2;
        $res = $incomelog->order('id DESC')->where($condtion)->select();
        $this->assign('res',$res);
        $this->display();
    }

    public function cashDetail(){  //资金明细
        $incomelog =M('incomelog');
        $condtion['userid'] =session('uid');
        $condtion['type']   =array('gt',0);
        $res = $incomelog->order('id DESC')->where($condtion)->select();
        $this->assign('res',$res);
        $this->display();
    }

    public function switchMoney(){  //钱包互转
        if($_POST['chargebag']){  // 处理充值钱包转入到收益钱包
            if($_POST['chargebag']<=0){
                echo "<script>alert('请输入正确金额');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/switchMoney';";
                echo "</script>";
                exit;
            }
            // 处理充值钱包转入到收益钱包
            $menber =M('menber');
            $useinfo =$menber->where(array('uid'=>session('uid')))->select();
            if($useinfo[0]['chargebag']>$_POST['chargebag']){
//                $chargebag =$useinfo[0]['chargebag']-$_POST['chargebag'];
                $chargebag =bcsub($useinfo[0]['chargebag'],$_POST['chargebag'],2);
                $data['chargebag']=$chargebag;
//                $incomebag =$useinfo[0]['incomebag']+$_POST['chargebag'];
                $incomebag =bcadd($useinfo[0]['incomebag'],$_POST['chargebag'],2);
                $data['incomebag']=$incomebag;
                $menber->where(array('uid'=>session('uid')))->save($data);
                echo "<script>alert('转入成功');";
                echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
                echo "</script>";
                exit;
            }else{
                echo "<script>alert('账户余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/switchMoney';";
                echo "</script>";
                exit;
            }
        }
        //收益钱包转入到充值钱包
        if($_POST['incomebag']){
            if($_POST['incomebag']<=0){
                echo "<script>alert('请输入正确金额');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/switchMoney';";
                echo "</script>";
                exit;
            }
            // 处理充值钱包转入到收益钱包
            $menber =M('menber');
            $useinfo =$menber->where(array('uid'=>session('uid')))->select();
            if($useinfo[0]['incomebag']>$_POST['incomebag']){
//                $chargebag =$useinfo[0]['chargebag']+$_POST['incomebag'];
                $chargebag =bcadd($useinfo[0]['chargebag'],$_POST['incomebag'],2);
                $data['chargebag']=$chargebag;
//                $incomebag =$useinfo[0]['incomebag']-$_POST['incomebag'];
                $incomebag =bcsub($useinfo[0]['incomebag'],$_POST['incomebag'],2);
                $data['incomebag']=$incomebag;
                $menber->where(array('uid'=>session('uid')))->save($data);
                echo "<script>alert('转入成功');";
                echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
                echo "</script>";
                exit;
            }else{
                echo "<script>alert('账户余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/switchMoney';";
                echo "</script>";
                exit;
            }
        }
        $this->display();
    }


}