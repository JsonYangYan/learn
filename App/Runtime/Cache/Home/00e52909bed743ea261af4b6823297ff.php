<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<meta http-equiv="X-UA-Compatible" content="IE=8">
	<meta name="renderer" content="webkit" />
	<title>泛在学习环境评价系统</title>
	<link rel="icon" href="/learn/Public/Image/icon.png"/>
	<link type="text/css" rel="stylesheet" href="/learn/Public/Css/school/base.css" />
	<link type="text/css" rel="stylesheet" href="/learn/Public/Css/school/login.css" />
	<link type="text/css" rel="stylesheet" href="/learn/Public/Css/jquery_alert.css" />
	<script type="text/javascript" src="/learn/Public/Js/jquery1.8.2.min.js"></script>
	<script type="text/javascript" src="/learn/Public/Js/placeholderfriend.js"></script>
	<script>
		var login_url = "<?php echo U('Index/doLogin');?>";//login登录页面url
		var location_admin_url = "<?php echo U('Admin/index');?>";//管理员首页url
		var location_county_url = "<?php echo U('County/index');?>";//非管理员url
	</script>
</head>
<body>
<div id="main_body">
	<div class="right_box">
		<div id="login_form">
			<div class="login_user">
				<input class="input_class" type="text" name="username" id="username" placeholder="用户名/手机号/邮箱"/>
			</div>
			<div class="login_pwd">
				<input class="input_class" type="password" name="password" id="password" placeholder="密   码"/>
			</div>

		</div>
		<button class="forget_pwd" onclick="count_down(this)">忘记密码?</button>
		<div id="button_form">
			<div class="login_btn" id="login_action">登&nbsp;&nbsp;&nbsp;&nbsp;录</div>
			<!--<div id="dowload"><a href="<?php echo U('School/course');?>" target="_blank">填报系统使用教程</a></div>-->
		</div>
	</div>
</div>
<div class="clear"> </div>
<div id="footer">
	<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>	
		<div style="min-height: 50px;line-height: 25px;text-align: center;color: #fff;padding-top:15px;">

			版权所有：教育部教育信息化战略研究基地（华中）
			<br />
			联系地址：湖北 武汉 珞喻路152号 华中师范大学科学会堂501 邮编：430079
			
			<!--<br />联系电话：027-67867213  传真：027-67862995  -->
		</div>
   </body>
</html>

</div>
</body>
</html>
<script type="text/javascript" src="/learn/Public/Js/city/login.js"></script>
<script type="text/javascript" src="/learn/Public/Js/jquery_alert.js"></script>