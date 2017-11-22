<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewpoint" content="width=device-width; initial-scale=1" />
    <title>泛在学习环境评价系统</title>
    <link rel="icon" href="/learn/Public/Image/county/icon.png"/>
    <link type="text/css" rel="stylesheet" href="/learn/Public/Css/city/base.css" />
    <link type="text/css" rel="stylesheet" href="/learn/Public/Css/city/schoolRanking.css" />
    <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
    <script src="/learn/Public/Js/jquery1.8.2.min.js"></script>
    <script type="text/javascript" src="/learn/Public/Js/trimpath.js"></script>
    <script type="text/javascript" src="/learn/Public/Js/paging.js"> </script>
    <script src="/learn/Public/Js/jquery.cookie.js"></script>
    <script>
        var getAllUserUrl = "<?php echo U('Admin/getAllUser');?>";
    </script>
</head>
<body>
<div class="header">泛在学习环境评价系统</div>
<div id="container">
    <div id="floatNavStandard">
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
    <div style="height:1px"></div>
    <div class="content">

        <div class="middle_score">
            <div class="school_ranking"> </div>
            <ul class="ranking_title">
                <li>排名</li>
                <li>名称</li>
                <li>资源</li>
                <li>服务</li>
                <li>评价</li>
                <li>综合得分</li>
                <li>操作</li>
            </ul>
            <div class="middle_80" id="middle_school"> </div>
            <div id="page_numbers"> </div>
        </div>

    </div>
    <div class="clear"></div>
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
<!-- 学校基本信息表的模版加载 -->
<div id="list_template" style="display:none">
    {var j = currentPageNo}
    {var i = 1}
    {for s in schoolData}

    {if i%2 == 0}
    <ul style="background-color: #DCE9F9;">
        <li >${(j-1)*10+ (i++)}</li>
        <li >${s.depart}</li>
        <li >${s.firstScore[0]}</li>
        <li >${s.firstScore[1]}</li>
        <li >${s.firstScore[2]}</li>
        <li >${s.allScore}</li>
        <li ><a href="<?php echo U('Admin/school_detail');?>?val=${s.userId}">详情</a></li>
    </ul>

    {elseif i%2 == 1}
    <ul class="temp_list_style" style="">
        <li >${(j-1)*10+ (i++)}</li>
        <li >${s.depart}</li>
        <li >${s.firstScore[0]}</li>
        <li >${s.firstScore[1]}</li>
        <li >${s.firstScore[2]}</li>
        <li >${s.allScore}</li>
        <li ><a href="<?php echo U('Admin/school_detail');?>?val=${s.userId}">详情</a></li>
    </ul>
    {/if}
    {/for}
</div>

</body>
</html>

<script src="/learn/Public/Js/city/schoolRanking.js"></script>