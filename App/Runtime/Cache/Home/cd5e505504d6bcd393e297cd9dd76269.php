<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewpoint" content="width=device-width; initial-scale=1" />
	<title>泛在学习环境评价系统</title>
	<link rel="icon" href="/learn/Public/Image/icon.png"/>
	<link type="text/css" rel="stylesheet" href="/learn/Public/Css/city/base.css" />
	<link type="text/css" rel="stylesheet" href="/learn/Public/Css/city/main.css" />
	<script src="/learn/Public/Js/jquery1.8.2.min.js"></script>
	<script src="/learn/Public/Js/jquery.cookie.js"></script>
</head>
<body>
	<div class="header">泛在学习环境评价系统</div>
	<div id="container">
		<div id="floatNavMain">
			<!--导航-->
<div id="img_nav" >

	<div id="change_phtot_main"><!--首页-->
		<img id="img_before_1" src="/learn/Public/Image/Admin/1_before.jpg" onmouseover="this.src='/learn/Public/Image/Admin/1_after.jpg'" onmouseout="this.src='/learn/Public/Image/Admin/1_before.jpg'"/>
		<img id="img_after_1" src="/learn/Public/Image/Admin/1_after.jpg" style="display: none"/>
	</div>

	<div id="change_phtot_standard"><!--评分标准-->
		<img id="img_before_3" src="/learn/Public/Image/Admin/3_before.jpg" onmouseover="this.src='/learn/Public/Image/Admin/3_after.jpg'" onmouseout="this.src='/learn/Public/Image/Admin/3_before.jpg'"/>
		<img id="img_after_3" src="/learn/Public/Image/Admin/3_after.jpg" style="display: none"/>
	</div>

	<!--<div id="change_phtot_statistics">&lt;!&ndash;填报统计&ndash;&gt;-->
		<!--<img id="img_before_2" src="/learn/Public/Image/Admin/2_before.jpg" onmouseover="this.src='/learn/Public/Image/Admin/2_after.jpg'" onmouseout="this.src='/learn/Public/Image/Admin/2_before.jpg'"/>-->
		<!--<img id="img_after_2" src="/learn/Public/Image/Admin/2_after.jpg" style="display: none"/>-->
	<!--</div>-->

	<div id="change_phtot_school"><!--评价结果-->
		<img id="img_before_10" src="/learn/Public/Image/Admin/10_before.jpg" onmouseover="this.src='/learn/Public/Image/Admin/10_after.jpg'" onmouseout="this.src='/learn/Public/Image/Admin/10_before.jpg'"/>
		<img id="img_after_10" src="/learn/Public/Image/Admin/10_after.jpg" style="display: none"/>
	</div>

	<div id="change_phtot_index"><!--退出-->
		<img id="img_before_8" src="/learn/Public/Image/Admin/8_before.jpg"/>
		<img id="img_after_8" src="/learn/Public/Image/Admin/8_after.jpg"  style="display: none"/>
	</div>
</div>

<script>

	$("#change_phtot_main").click(function(){
        $.cookie("navstation", "img_before_1", { path: "/" });
		window.location.href = "<?php echo U('Admin/index');?>";
	});
    $("#change_phtot_education").click(function(){
        $.cookie("navstation", "img_before_9", { path: "/" });
        window.location.href = "<?php echo U('Admin/education');?>";
    });
    $("#change_phtot_standard").click(function(){
        $.cookie("navstation", "img_before_3", { path: "/" });
        window.location.href = "<?php echo U('Admin/standard');?>";
    });
    $("#change_phtot_statistics").click(function(){
        $.cookie("navstation", "img_before_2", { path: "/" });
        window.location.href = "<?php echo U('Admin/statistics');?>";
    });
	$("#change_phtot_dataactuality").click(function(){
        $.cookie("navstation", "img_before_12", { path: "/" });
		window.location.href = "<?php echo U('Admin/dataactuality');?>";
	});
    $("#change_phtot_tp").click(function(){
		$.cookie("navstation", "img_before_13", { path: "/" });
		window.location.href = "<?php echo U('Admin/tpstatistics');?>";
    });
    $("#change_phtot_school").click(function(){
        $.cookie("navstation", "img_before_10", { path: "/" });
        window.location.href = "<?php echo U('Admin/school');?>";
    });
    $("#change_phtot_citytown").click(function(){
        $.cookie("navstation", "img_before_5", { path: "/" });
        window.location.href = "<?php echo U('Admin/citytown');?>";
    });
    $("#change_phtot_allassessment").click(function(){
        $.cookie("navstation", "img_before_4", { path: "/" });
        window.location.href = "<?php echo U('Admin/allassessment');?>";
    });
    $("#change_phtot_schRanking").click(function(){
        $.cookie("navstation", "img_before_11", { path: "/" });
        window.location.href = "<?php echo U('Admin/schoolRanking');?>";
    });
    $("#change_phtot_ranking").click(function(){
        $.cookie("navstation", "img_before_6", { path: "/" });
        window.location.href = "<?php echo U('Admin/ranking');?>";
    });
    $("#change_phtot_printPDF").click(function(){
        $.cookie("navstation", "img_before_7", { path: "/" });
        window.location.href = "<?php echo U('Admin/printPDF');?>";
    });
	$("#change_phtot_index").click(function(){
        $.cookie("navstation", "img_before_1", { path: "/" });
		window.location.href = "<?php echo U('Admin/logout');?>";
	});
</script>
		</div>
		<div class="content">
			<div class="cont_text" style="margin-top: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;泛在学习是在普适计算技术、移动互联网技术、移动终端等技术快速发展下产生并发展的一种新型学习方式，是未来学习发展的重要趋势之一。它是一种无处不在的学习，即任何人在任何时间任何地点使用任何设备均可获得所需要的任何资源，它具有泛在性、情境性、易获取性、即时性、适应性等特征，正符合“人人皆学、处处能学、时时可学的学习型社会”理念。泛在学习环境是开展泛在学习的重要基础。泛在学习环境是一种新兴的学习环境，在将这种学习环境应用于教学之前，应该检验其是否能够促进有效学习的发生。建设有效的泛在学习环境对推动学习型社会和终身教育的建立有积极作用。</div>
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
<script src="/learn/Public/Js/city/base.js"></script>