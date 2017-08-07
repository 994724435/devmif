<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>注册</title>
<meta content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width" name="viewport" />
<link type="text/css" rel="stylesheet" href="/Public/Home/css/basic.css" />
  <script type="text/javascript" src="/Public/Home/js/jquery-3.1.1.min.js"></script>
</head>
<body>
<div class="w"> 
  <!--header 开始-->
  <header>
    <div class="header"> 
      <h2>注册</h2>
    </div>
  </header>
  <!--header 结束-->
  <div class="page">
    <div class="main">
      <form id="frm_login" method="post" action="">
        <div class="item item-username">
          <input class="txt-input txt-username" type="text" placeholder="账号" value="" name="username">
        </div>

        <div class="item item-username">
          <input class="txt-input txt-username" type="password" placeholder="密码" value="">
        </div>

         <div class="item item-username">
          <input class="txt-input txt-username" type="password" placeholder="确认密码" value="">
        </div>

         <div class="item item-username">
          <input class="txt-input txt-username" type="number" placeholder="手机"  id="tel">
        </div>

        <div class="item item-captcha">
          <div class="input-info">
            <input id="validateCode" class="txt-input txt-captcha" type="text" placeholder="手机验证码">
            <b class="input-close" style="display: block;"></b> <button class="captcha-img" id="getTelCode" type="button">获取验证码 </button> </div>
        </div>


        <div class="item item-username">
          <input class="txt-input txt-username" type="text" placeholder="邮箱" id="eamil">
        </div>

        <div class="item item-captcha">
          <div class="input-info">
            <input id="validateCode" class="txt-input txt-captcha" type="text" placeholder="邮箱验证码">
            <b  class="input-close" style="display: block;"></b> <button class="captcha-img" type="button" id="geteamilCode">获取验证码 </button>  </div>
        </div>
        
        <div class="ui-btn-wrap"> <button class="ui-btn-lg ui-btn-primary" type="submit">用户注册</button> </div>
      
      </form>
    </div>
 
  </div>

</div>
<script type="text/javascript">
var sendCode=function(id){
    var time=120;
    $(id).attr('disabled', 'true').addClass('sending disabled');
    setInterval(function(){
        time--;
        $(id).html("重新发送("+time+")");
        if(time==0){
            $(id).removeAttr('disabled').removeClass('sending disabled');
            $(id).html("获取验证码");
            time=120;
            clearInterval(config.timer);
        }   

    }, 1000);
    return false;
}

// 发送短信
  $("#getTelCode").click(function() {
       var tel=$.trim($("#tel").val());
       console.log(11)
       var myreg = /^(1\d{10})$/; 
       if(tel==""||!myreg.test(tel)){
           alert("请输入正确的手机号");
           return false
       }
       $.ajax({
         type: "POST",
         url: "",
          dataType: "json"
         data: {

         },
         success: function(msg){
           sendCode(this);

         },
         error: function(msg){
         
         }
      });
     

  });


  // 发送邮键
  $("#geteamilCode").click(function() {
       var eamil=$.trim($("#eamil").val());
       console.log(11)
       if(eamil==""){
           alert("请输入邮箱");
           return false
       }
       $.ajax({
         type: "POST",
         url: "",
          dataType: "json"
         data: {

         },
         success: function(msg){
           sendCode(this);

         },
         error: function(msg){
         
         }
      });
     

  });





</script>

</body>
</html>