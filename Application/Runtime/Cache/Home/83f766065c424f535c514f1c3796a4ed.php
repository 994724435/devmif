<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>个人中心</title>
        <link href="/register/Public/Home/css/bootstrap.min.css" rel="stylesheet">
        <link href="/register/Public/Home/css/aui.min.css" rel="stylesheet">
        <link href="/register/Public/Home/css/mui.picker.css" rel="stylesheet">
        <link href="/register/Public/Home/css/mui.poppicker.css" rel="stylesheet">
        <link href="/register/Public/Home/css/style.css" rel="stylesheet">
         <script type="text/javascript" src="/register/Public/Home/js/jquery-3.1.1.min.js"></script>
         <script type="text/javascript" src="/register/Public/Home/js/aui.js"></script>
        <script type="text/javascript" src="/register/Public/Home/js/mui.picker.js"></script>
        <script type="text/javascript" src="/register/Public/Home/js/mui.poppicker.js"></script>
        <script type="text/javascript" src="/register/Public/Home/js/bootstrap.min.js"></script>
        <style>
         
        </style>
    </head>
</head>
<body class="bodyColor">
    <header class="mui-bar mui-bar-nav">
	  <a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
	  <h1 class="mui-title">完善资料</h1>
	</header>
	<div class="mui-content">
		<form class="mui-input-group" method="post" style="margin-top: 20px;" enctype="multipart/form-data">
		     <div class="mui-input-row">
		        <label>一级密码</label>
		        <input type="password" placeholder="一级密码" value="<?php echo ($username["pwd"]); ?>" name="pwd" id="selelcted" data-value=""  class="mui-input-password" >
		    </div>
		     <div class="mui-input-row">
		        <label>二级密码</label>
		        <input type="password" placeholder="二级密码" value="<?php echo ($username["pwd2"]); ?>" name="pwd2" id="selelcted" data-value=""  class="mui-input-password" >
		    </div>
		     <div class="mui-input-row">
		        <label>真实姓名</label>
		       <input type="text" class="mui-input-clear" value="<?php echo ($username["realname"]); ?>" name="realname" placeholder="真实姓名">
		    </div>
		     <div class="mui-input-row">
		        <label>支付宝账号</label>
		       <input type="text" class="mui-input-clear" value="<?php echo ($username["zhifubao"]); ?>" name="zhifubao" placeholder="支付宝账号">
		    </div>
		    <div class="mui-input-row">
		        <label>支付宝姓名</label>
		       <input type="text" class="mui-input-clear" value="<?php echo ($username["zhifubaoname"]); ?>" name="zhifubaoname" placeholder="支付宝姓名">
		    </div>
		    <div class="mui-input-row">
		        <label>微信账号</label>
		       <input type="text" class="mui-input-clear" value="<?php echo ($username["weixin"]); ?>" name="weixin" placeholder="微信账号">
		    </div>
		    <div class="mui-input-row">
		        <label>银行卡号</label>
		       <input type="text" class="mui-input-clear" value="<?php echo ($username["bank"]); ?>" name="bank" placeholder="银行卡号">
		    </div>
		     <div class="mui-input-row">
		        <label>银行卡姓名</label>
		       <input type="text" class="mui-input-clear" value="<?php echo ($username["bankname"]); ?>" name="bankname" placeholder="银行卡姓名">
		    </div>
		     <div class="mui-input-row">
		        <label>银行卡开户行</label>
		       <input type="text" class="mui-input-clear" value="<?php echo ($username["bankfrom"]); ?>" name="bankfrom" placeholder="银行卡开户行">
		    </div>
		    <button class="mui-btn mui-btn-block">确认</button>
		</form>
	</div>
</body>
</html>