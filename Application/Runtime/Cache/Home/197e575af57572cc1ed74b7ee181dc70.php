<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
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
    <body>
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
            <div class="mui-content">
            <ul class="tab">
              <li>
                <ul>
                  <li>动态钱包</li>
                  <li><?php echo ($username["dongbag"]); ?></li>
                  <li><button type="button" class="btn btn-primary btn-xs" onclick="location.href='transfers_dong.html'">转账</button>
                  <button type="button" class="btn btn-default btn-xs" onclick="location.href='tixian_dong.html'">提现</button></li>
                </ul>
              </li>
              <li>
                <ul>
                  <li>静态钱包</li>
                  <li><?php echo ($username["jingbag"]); ?></li>
                  <li><button type="button" class="btn btn-primary btn-xs" onclick="location.href='transfers_jing.html'">转账</button>
                  <button type="button" class="btn btn-default btn-xs" onclick="location.href='tixian_jing.html'">提现</button></li>
                </ul>
              </li>
              <li>
              </li>
            </ul>
                <ul class="mui-table-view">
                  <li class="mui-table-view-cell">
                       充值钱包
                       <span class="fr">余额：<?php echo ($username["chargebag"]); ?></span>
                  </li>
                  <li class="mui-table-view-cell">
                     <a class="mui-navigate-right" href="recharge.html">
                       积分充值
                       </a>
                  </li>
                  <li class="mui-table-view-cell">
                     <a class="mui-navigate-right" href="my_data.html">
                       个人资料
                       </a>
                  </li>
                    <li class="mui-table-view-cell">
                      <a class="mui-navigate-right" href="washan_data.html">
                        资料完善
                      </a>
                    </li>
                    <li class="mui-table-view-cell">
                      <a class="mui-navigate-right" href="buyMit.html">
                        买入MIF币
                      </a>
                    </li>
                     <li class="mui-table-view-cell">
                      <a class="mui-navigate-right" href="tuiben.html">
                        申请退本
                      </a>
                    </li>
                  <li class="mui-table-view-cell">
                      <a class="mui-navigate-right" href="jingtai.html">
                        静态收益
                      </a>
                    </li>
                     <li class="mui-table-view-cell">
                      <a class="mui-navigate-right" href="dongtai.html">
                        动态收益
                      </a>
                    </li>
                    <li class="mui-table-view-cell">
                      <a class="mui-navigate-right" href="my_gruop.html">
                         我的团队
                      </a>
                    </li>
                    <li class="mui-table-view-cell">
                      <a class="mui-navigate-right" href="kefu.html">
                        在线客服
                      </a>
                    </li>

                </ul>
              </div>
            </div>
       
        <script>
        
        </script>
    </body>

</html>