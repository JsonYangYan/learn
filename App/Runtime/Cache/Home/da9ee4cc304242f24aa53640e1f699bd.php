<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<title>泛在学习环境评价系统</title>
	<link rel="icon" href="../images/icon.png"/>
	<link type="text/css" rel="stylesheet" href="/learn/Public/Css/city/base.css" />
	<link type="text/css" rel="stylesheet" href="/learn/Public/Css/city/standard.css" />

	<script type="text/javascript" src="/learn/Public/Js/jquery1.8.2.min.js"></script>
	<script type="text/javascript" src="/learn/Public/Js/trimpath.js"></script>
	<script src="/learn/Public/Js/jquery.cookie.js"></script>
</head>
<script>
	var standard_json = "/learn/Public/Json/standard.json";
</script>
<body>
	<div class="header">泛在学习环境评价系统</div>
	
	<div class="main_body" id="container">
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
		<div id="content_box">
			<div id="assetment_box"> </div>
			<!--<div class="rule_explain_01">-->
			    <!--<h2>襄阳教育信息化影响因素关系引导图</h2>-->
			    <!--<img src="/learn/Public/Image/Admin/yinsuguanxi.jpg"/>-->
			<!--</div>-->
			<!--<br/>-->
			<div class="rule_explain_02">
				<h2>算法--线性加权模型</h2>
				<img src="/learn/Public/Image/Admin/suanfa.jpg"/>
			</div>
			<!--<div class="clear"> </div>-->
		</div>
	</div><!--container end-->
	<!--<div class="clear"> </div>-->
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

	<textarea id="assetment_template" style="display: none">
		<table id="tb_box">
			<caption>
				<h2>泛在学习环境评估指标</h2>
			</caption>
			<tr>
				<td class="title">一级指标</td>
				<td class="column_tb">
					<table class="title rank2_tb">
						<tr>
							<td class="column_rank2">二级指标</td>
							<td class="assessment">三级指标</td>
							<!--<td class="weight_3">权重</td>-->
						</tr>
					</table>
				</td>
			</tr>
			{for p in list.tb}
				<tr>
					<td class="column_rank1" section_id="${p.section_id}" weight_1="${p.weight_1}">${p.rank1}</td>
					<td class="column_tb">
						{for t in p.reg_tb} 
							<table class="rank2_tb">
								<tr>
									<td class="column_rank2" rank2_id = "${t.id}" weight_2 = ${t.weight_2}>${t.rank2}</td>
									<td class="assessment">
										<ul>
											{for i in t.detail_tb}
											<li>${i.detail_id}.${i.detail}</li>
											{/for}
										</ul>
									</td>
									
								</tr>
							</table>
						{/for}
					</td>
				</tr>
			{/for}
		</table>
	</textarea>
</body>
</html>
<script src="/learn/Public/Js/city/base.js"></script>
<script type = "text/javascript" src="/learn/Public/Js/city/standard.js"></script>