<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>MIF公排</title>
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
<body class="bodyColor">
	 <!-- 公共头部 -->
     <div class="container noPadding">
    <nav class="navbar navbar-default mynavbar">
        <div class="container-fluid">
            <!--按钮-->
            <div class="navbar-header">
                <img src="/register/Public/Home/images/logo.gif" alt="" class="logoImg">
                <span class="userInfo"><?php echo ($username["name"]); ?>：<?php echo ($username["tel"]); ?></span>
                <button type="button" class="navbar-toggle collapsed btn-sider" data-toggle="collapse" data-target="#side-menu" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- 导航条内容 -->
            <div class="collapse navbar-collapse" id="side-menu">
                <ul class="nav navbar-nav" id="side-item">
                    <li><a href="/register/index.php/Home/Index/index.html">网站首页</a></li>
                    <li><a href="/register/index.php/Home/Index/introduce.html">公司简介</a></li>
                    <li><a href="/register/index.php/Home/Index/advertising.html">公司公告</a></li>
                    <li><a href="/register/index.php/Home/Index/K.html">同步k线图</a></li>
                    <li><a href="/register/index.php/Home/Index/gruop.html">值班团队</a></li>
                    <li><a href="/register/index.php/Home/Index/professor.html">分析专家</a></li>
                    <li><a href="/register/index.php/Home/User/my.html">个人中心</a></li>
                    <li><a href="/register/index.php/Home/Index/gongPai.html">MIF公排</a></li>
                    <li><a href="/register/index.php/Home/Index/share/id/<?php echo ($username["uid"]); ?>">MIF分享</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
    <!-- 公共头部 -->
    <div class="container-fluid noPadding">
           <!-- <div class="mui-content"> -->
            <ul class="mui-table-view">
              <li class="mui-table-view-cell">
                  <a class="mui-navigate-right" href="gongpai_buy.html">
                    购买公排
                  </a>
              </li>
              <li class="mui-table-view-cell">
                公排收益
                <span class="fr"><?php echo ($username["jifeng"]); ?></span>
              </li>
              <li class="mui-table-view-cell">
                公排编号
                <span class="fr"><?php echo ($res["bianhao"]); ?></span>
              </li>
              <li class="mui-table-view-cell">
                所处系统公排
                <span class="fr"><?php echo ($res["ceng"]); ?>层</span>
              </li>
            </ul>
    </div>
</body>
</html>