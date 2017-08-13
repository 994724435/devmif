<?php
namespace Admin\Controller;
use Think\Controller;
class ConfigController extends CommonController {
	public function index(){
	    $Config = M('config');
	    if($_POST){
	        $Config->where(array('id'=>1))->save(array('value'=>$_POST['jiage']));
            $Config->where(array('id'=>2))->save(array('value'=>$_POST['jintai']));

            $Config->where(array('id'=>3))->save(array('value'=>$_POST['tuijian1']));
            $Config->where(array('id'=>4))->save(array('value'=>$_POST['tuijian2']));
            $Config->where(array('id'=>5))->save(array('value'=>$_POST['tuijian3']));
            $Config->where(array('id'=>6))->save(array('value'=>$_POST['tuijian4']));
            $Config->where(array('id'=>7))->save(array('value'=>$_POST['tuijian5']));
            $Config->where(array('id'=>8))->save(array('value'=>$_POST['tuijian6']));

            $Config->where(array('id'=>9))->save(array('value'=>$_POST['huikui1']));
            $Config->where(array('id'=>10))->save(array('value'=>$_POST['huikui2']));
            $Config->where(array('id'=>11))->save(array('value'=>$_POST['huikui3']));
            $Config->where(array('id'=>12))->save(array('value'=>$_POST['huikui4']));
            $Config->where(array('id'=>13))->save(array('value'=>$_POST['huikui5']));
            $Config->where(array('id'=>14))->save(array('value'=>$_POST['huikui6']));

            echo "<script>alert('修改成功');window.location.href = '".__ROOT__."/index.php/Admin/Config/index';</script>";
        }
        $result = $Config->order('id asc')->select();
        $this->assign('res',$result);
	    $this->display();
    }

}



 ?>