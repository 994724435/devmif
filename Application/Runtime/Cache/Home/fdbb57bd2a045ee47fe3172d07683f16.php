<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>个人中心</title>
        <link href="/Public/Home/css/bootstrap.min.css" rel="stylesheet">
        <link href="/Public/Home/css/aui.min.css" rel="stylesheet">
        <link href="/Public/Home/css/mui.picker.css" rel="stylesheet">
        <link href="/Public/Home/css/mui.poppicker.css" rel="stylesheet">
        <link href="/Public/Home/css/style.css" rel="stylesheet">
         <script type="text/javascript" src="/Public/Home/js/jquery-3.1.1.min.js"></script>
         <script type="text/javascript" src="/Public/Home/js/aui.js"></script>
        <script type="text/javascript" src="/Public/Home/js/mui.picker.js"></script>
        <script type="text/javascript" src="/Public/Home/js/mui.poppicker.js"></script>
        <script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script>
        <style>
         
        </style>
    </head>
</head>
<body class="bodyColor">
    <header class="mui-bar mui-bar-nav">
	  <a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
	  <h1 class="mui-title">买入MIF币</h1>
	</header>
	<div class="mui-content">
        <div class="codeTIP">我的MIF币<span>20</span>个</div>
		<form class="mui-input-group">
		     <div class="mui-input-row" >
		        <label class="labelWidth">购买MIF币数量</label>
		       <input type="number" class="mui-input-clear inputWidth" placeholder="数量">
		    </div>
		   <div class="codeTIP">每个MIF币价值50积分，每次至少购买1或整数</div>
		    <button class="mui-btn mui-btn-block">确认</button>
		</form>
	</div>
</body>
</html>