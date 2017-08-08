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
	  <h1 class="mui-title">个人资料</h1>
	</header>

	<!-- 以下信息 有才显示 -->
	<div class="mui-content">
		<ul class="mui-table-view">
			<li class="mui-table-view-cell">
				会员编号
				<span class="fr"><?php echo ($username["uid"]); ?></span>
			</li>
			<li class="mui-table-view-cell">
				姓名
				<span class="fr"><?php echo ($username["realname"]); ?></span>
			</li>
			<li class="mui-table-view-cell">
				投资金额
				<span class="fr"><?php echo ($username["chargebag"]); ?></span>
			</li>
			<li class="mui-table-view-cell">
				动态积分
				<span class="fr"><?php echo ($username["dongbag"]); ?></span>
			</li>
			<li class="mui-table-view-cell">
				静态积分
				<span class="fr"><?php echo ($username["jingbag"]); ?></span>
			</li>
			<li class="mui-table-view-cell">
				支付宝账号
				<span class="fr"><?php echo ($username["zhifubao"]); ?></span>
			</li>

			<li class="mui-table-view-cell">
				银行卡号
				<span class="fr"><?php echo ($username["bank"]); ?></span>
			</li>
			<li class="mui-table-view-cell">
				开户行
				<span class="fr"><?php echo ($username["bankfrom"]); ?></span>
			</li>
			<li class="mui-table-view-cell">
				持卡人姓名
				<span class="fr"><?php echo ($username["bankname"]); ?></span>
			</li>

			<li class="mui-table-view-cell">
				微信账号
				<span class="fr"><?php echo ($username["weixin"]); ?></span>
			</li>
		</ul>
	</div>
</body>
</html>