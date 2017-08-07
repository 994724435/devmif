<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" href="/register/Public/Home/css/aui.min.css">
		<link rel="stylesheet" href="/register/Public/Home/css/style.css">
		<link rel="stylesheet" href="/register/Public/Home/css/mui.ttf">
	    <script type="text/javascript" src="/register/Public/Home/js/aui.js"></script>
	    <script type="text/javascript" src="/register/Public/Home/js/jquery-3.1.1.min.js"></script>
		<style>
			.mui-input-row label{width: 15%;}
			.mui-input-row label .mui-icon{position: relative;top: -2px;color:#1b7ac0 ;}
			.mui-input-row label~input{width: 85%;font-size: 14px;text-indent: 8px;font-family: "微软雅黑";}
			.mui-btn-block{padding: 8px 0;width: 90%;margin: 30px auto;font-size: 15px;}
			.mui-btn-primary{background: #1b7ac0;border-color:#1b7ac0;}
			.logo{display: block;width:153px;margin: 40px auto 10px;}
			.logotext{text-align: center;margin: 0;color: #000;font-family: "微软雅黑";}
			.mui-input-group{margin-top: 25px;}
		</style>
	</head>

	<body>
		<!--<header class="mui-bar mui-bar-nav">
		  <h1 class="mui-title">登录</h1>
		</header>-->
		<div class="mui-content">
			 <img src="/register/Public/Home/images/sitelogo.png" class="logo"/>
			 <!-- <p class="logotext">物流通</p> -->
			<form class="mui-input-group" action="" method="post" enctype="multipart/form-data">
			<div class="mui-input-row">
				<label><span class="mui-icon mui-icon-person"></span></label>
				<input type="text" name="name" class="mui-input-clear" placeholder="请输入用户名"  id="user">
			</div>
			<div class="mui-input-row">
				<label><span class="mui-icon mui-icon-locked"></span></label>
				<input type="password" name="pwd" class="mui-input-clear" placeholder="请输入密码" id="pwd">
			</div>
				<button class="mui-btn mui-btn-primary mui-btn-block" id="login">立即登录</button>
			</form>
			<!--<button class="mui-btn mui-btn-primary mui-btn-block" id="login">立即登录</button>-->

		</div>	
	</body>

</html>