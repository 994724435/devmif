<?php
namespace Admin\Controller;
use Think\Controller;
class ConfigController extends CommonController {
	public function index(){
	    $Config = M('config');
        $result = $Config->order('id asc')->select();
        $this->assign('res',$result);
	    $this->display();
    }

}



 ?>