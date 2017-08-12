<?php
namespace Admin\Controller;
use Think\Controller;
class ConfigController extends CommonController {
	public function index(){
	    $Config = M('config');
	    if($_POST){
	        $Config->where(array('id'=>1))->save(array('value'=>$_POST['dongtai']));
            $Config->where(array('id'=>2))->save(array('value'=>$_POST['tuijian']));
            $Config->where(array('id'=>3))->save(array('value'=>$_POST['jintai']));
            $Config->where(array('id'=>4))->save(array('value'=>$_POST['xiajia']));
            echo "<script>alert('修改成功');window.location.href = '".__ROOT__."/index.php/Admin/Config/index';</script>";
        }
        $result = $Config->order('id asc')->select();
        $this->assign('res',$result);
	    $this->display();
    }

}



 ?>