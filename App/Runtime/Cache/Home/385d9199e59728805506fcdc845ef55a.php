<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" ></input>
		<title>泛在学习环境评价系统</title>
		<link type="text/css" rel="stylesheet" href="/learn/Public/Css/county/base.css" />
		<link rel="stylesheet" href="/learn/Public/Css/county/quiz.css" />
		<script src="/learn/Public/Js/jquery1.8.2.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/learn/Public/Js/jquery.cookie.js"></script>
		<script>
			var getScoreUrl = "<?php echo U('County/getScore');?>";
		</script>
	</head>
	<body>
		<div class="header">泛在学习环境评价系统</div>
		<div id="container1">
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

	<div id="change_phtot_statistics"><!--填报统计-->
		<img id="img_before_2" src="/learn/Public/Image/Admin/2_before.jpg" onmouseover="this.src='/learn/Public/Image/Admin/2_after.jpg'" onmouseout="this.src='/learn/Public/Image/Admin/2_before.jpg'"/>
		<img id="img_after_2" src="/learn/Public/Image/Admin/2_after.jpg" style="display: none"/>
	</div>


	<div id="change_phtot_school"><!--学校评估-->
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
		window.location.href = "<?php echo U('County/index');?>";
	});
    $("#change_phtot_standard").click(function(){
        $.cookie("navstation", "img_before_3", { path: "/" });
        window.location.href = "<?php echo U('County/standard');?>";
    });
    $("#change_phtot_statistics").click(function(){
        $.cookie("navstation", "img_before_2", { path: "/" });
        window.location.href = "<?php echo U('County/quiz');?>";
    });
	$("#change_phtot_dataactuality").click(function(){
        $.cookie("navstation", "img_before_12", { path: "/" });
		window.location.href = "<?php echo U('County/dataactuality');?>";
	});
    $("#change_phtot_tp").click(function(){
		$.cookie("navstation", "img_before_13", { path: "/" });
		window.location.href = "<?php echo U('County/tpstatistics');?>";
    });
    $("#change_phtot_school").click(function(){
        $.cookie("navstation", "img_before_10", { path: "/" });
        window.location.href = "<?php echo U('County/school');?>";
    });

    $("#change_phtot_allassessment").click(function(){
        $.cookie("navstation", "img_before_4", { path: "/" });
        window.location.href = "<?php echo U('County/allassessment');?>";
    });
    $("#change_phtot_schRanking").click(function(){
        $.cookie("navstation", "img_before_11", { path: "/" });
        window.location.href = "<?php echo U('County/schoolRanking');?>";
    });
    $("#change_phtot_ranking").click(function(){
        $.cookie("navstation", "img_before_6", { path: "/" });
        window.location.href = "<?php echo U('County/ranking');?>";
    });
    $("#change_phtot_printPDF").click(function(){
        $.cookie("navstation", "img_before_7", { path: "/" });
        window.location.href = "<?php echo U('County/printPDF');?>";
    });
	$("#change_phtot_index").click(function(){
        $.cookie("navstation", "img_before_8", { path: "/" });
		window.location.href = "<?php echo U('Index/index');?>";
	});
</script>
		</div>
		<div class="nav">
			<ul class="navbar">
				<li><a href="#1" name="1" class="current">资源</a></li>
				<li><a href="#2" name="2">服务</a></li>
				<li><a href="#3" name="3">评价</a></li>
			</ul>
		</div>
		<div class="content">
			<div class="detail" id="3">
				<table>
					<tr>
						<th class="title">评价标准</th>
						<th>非常不好  不好  一般  好  非常好</th>
					</tr>
					<tr>
						<td class="title">1、在任何时间都可以获取反馈评价</td>
						<td class="option">
							<input type="radio" name="3_1_1" value="1.00"></input>
							<input type="radio" name="3_1_1" value="2.00"></input>
							<input type="radio" name="3_1_1" value="3.00"></input>
							<input type="radio" name="3_1_1" value="4.00"></input>
							<input type="radio" name="3_1_1" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">2、在任何时间都可以获取反馈评价</td>
						<td class="option">
							<input type="radio" name="3_1_2" value="1.00"></input>
							<input type="radio" name="3_1_2" value="2.00"></input>
							<input type="radio" name="3_1_2" value="3.00"></input>
							<input type="radio" name="3_1_2" value="4.00"></input>
							<input type="radio" name="3_1_2" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">3、评价标准与当前学习目标匹配</td>
						<td class="option">
							<input type="radio" name="3_2_3" value="1.00"></input>
							<input type="radio" name="3_2_3" value="2.00"></input>
							<input type="radio" name="3_2_3" value="3.00"></input>
							<input type="radio" name="3_2_3" value="4.00"></input>
							<input type="radio" name="3_2_3" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">4、评价标准与当前学习者特征匹配</td>
						<td class="option">
							<input type="radio" name="3_2_4" value="1.00"></input>
							<input type="radio" name="3_2_4" value="2.00"></input>
							<input type="radio" name="3_2_4" value="3.00"></input>
							<input type="radio" name="3_2_4" value="4.00"></input>
							<input type="radio" name="3_2_4" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">5、学习者能够实时获得反馈评价</td>
						<td class="option">
							<input type="radio" name="3_3_5" value="1.00"></input>
							<input type="radio" name="3_3_5" value="2.00"></input>
							<input type="radio" name="3_3_5" value="3.00"></input>
							<input type="radio" name="3_3_5" value="4.00"></input>
							<input type="radio" name="3_3_5" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">6、可获得他人对于自身学习结果的反馈评价</td>
						<td class="option">
							<input type="radio" name="3_4_6" value="1.00"></input>
							<input type="radio" name="3_4_6" value="2.00"></input>
							<input type="radio" name="3_4_6" value="3.00"></input>
							<input type="radio" name="3_4_6" value="4.00"></input>
							<input type="radio" name="3_4_6" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">7、可对他人的学习结果进行评价</td>
						<td class="option">
							<input type="radio" name="3_4_7" value="1.00"></input>
							<input type="radio" name="3_4_7" value="2.00"></input>
							<input type="radio" name="3_4_7" value="3.00"></input>
							<input type="radio" name="3_4_7" value="4.00"></input>
							<input type="radio" name="3_4_7" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">8、提供交互式的反馈评价方式，例如可回复他人评价等</td>
						<td class="option">
							<input type="radio" name="3_5_8" value="1.00"></input>
							<input type="radio" name="3_5_8" value="2.00"></input>
							<input type="radio" name="3_5_8" value="3.00"></input>
							<input type="radio" name="3_5_8" value="4.00"></input>
							<input type="radio" name="3_5_8" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">9、反馈评价是基于学习全程数据的，与具体学习场景无关</td>
						<td class="option">
							<input type="radio" name="3_6_9" value="1.00"></input>
							<input type="radio" name="3_6_9" value="2.00"></input>
							<input type="radio" name="3_6_9" value="3.00"></input>
							<input type="radio" name="3_6_9" value="4.00"></input>
							<input type="radio" name="3_6_9" value="5.00"></input>
						</td>
					</tr>
				</table>
			</div>
			<div class="detail" id="2">
				<table>
					<tr>
						<th class="title">评价标准</th>
						<th>非常不好  不好  一般  好  非常好</th>
					</tr>
					<tr>
						<td class="title">1、在任何时间都可以获取学习支持服务</td>
						<td class="option">
							<input type="radio" name="2_1_1" value="1.00"></input>
							<input type="radio" name="2_1_1" value="2.00"></input>
							<input type="radio" name="2_1_1" value="3.00"></input>
							<input type="radio" name="2_1_1" value="4.00"></input>
							<input type="radio" name="2_1_1" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">2、在任何时间都可以获取学习支持服务</td>
						<td class="option">
							<input type="radio" name="2_1_2" value="1.00"></input>
							<input type="radio" name="2_1_2" value="2.00"></input>
							<input type="radio" name="2_1_2" value="3.00"></input>
							<input type="radio" name="2_1_2" value="4.00"></input>
							<input type="radio" name="2_1_2" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">3、能够为学习者推荐当前学习情景相匹配的学习资源</td>
						<td class="option">
							<input type="radio" name="2_2_3" value="1.00"></input>
							<input type="radio" name="2_2_3" value="2.00"></input>
							<input type="radio" name="2_2_3" value="3.00"></input>
							<input type="radio" name="2_2_3" value="4.00"></input>
							<input type="radio" name="2_2_3" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">4、能够为学习者推荐当前学习情景相匹配的学习活动</td>
						<td class="option">
							<input type="radio" name="2_2_4" value="1.00"></input>
							<input type="radio" name="2_2_4" value="2.00"></input>
							<input type="radio" name="2_2_4" value="3.00"></input>
							<input type="radio" name="2_2_4" value="4.00"></input>
							<input type="radio" name="2_2_4" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">5、能够为学习者推荐经历过相似学习情景的学习者</td>
						<td class="option">
							<input type="radio" name="2_2_5" value="1.00"></input>
							<input type="radio" name="2_2_5" value="2.00"></input>
							<input type="radio" name="2_2_5" value="3.00"></input>
							<input type="radio" name="2_2_5" value="4.00"></input>
							<input type="radio" name="2_2_5" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">6、学习者能够实时获取学习支持服务</td>
						<td class="option">
							<input type="radio" name="2_3_6" value="1.00"></input>
							<input type="radio" name="2_3_6" value="2.00"></input>
							<input type="radio" name="2_3_6" value="3.00"></input>
							<input type="radio" name="2_3_6" value="4.00"></input>
							<input type="radio" name="2_3_6" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">7、可直接获得他人的学习帮助</td>
						<td class="option">
							<input type="radio" name="2_4_7" value="1.00"></input>
							<input type="radio" name="2_4_7" value="2.00"></input>
							<input type="radio" name="2_4_7" value="3.00"></input>
							<input type="radio" name="2_4_7" value="4.00"></input>
							<input type="radio" name="2_4_7" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">8、可从与他人的交往中获得学习帮助</td>
						<td class="option">
							<input type="radio" name="2_4_8" value="1.00"></input>
							<input type="radio" name="2_4_8" value="2.00"></input>
							<input type="radio" name="2_4_8" value="3.00"></input>
							<input type="radio" name="2_4_8" value="4.00"></input>
							<input type="radio" name="2_4_8" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">9、提供可人机交互的学习活动，例如概念图等</td>
						<td class="option">
							<input type="radio" name="2_5_9" value="1.00"></input>
							<input type="radio" name="2_5_9" value="2.00"></input>
							<input type="radio" name="2_5_9" value="3.00"></input>
							<input type="radio" name="2_5_9" value="4.00"></input>
							<input type="radio" name="2_5_9" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">10、学习支持服务可在不同设备上进行无缝承接</td>
						<td class="option">
							<input type="radio" name="2_6_10" value="1.00"></input>
							<input type="radio" name="2_6_10" value="2.00"></input>
							<input type="radio" name="2_6_10" value="3.00"></input>
							<input type="radio" name="2_6_10" value="4.00"></input>
							<input type="radio" name="2_6_10" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">11、切换学习情景后，学习支持服务可与前次服务无缝衔接</td>
						<td class="option">
							<input type="radio" name="2_6_11" value="1.00"></input>
							<input type="radio" name="2_6_11" value="2.00"></input>
							<input type="radio" name="2_6_11" value="3.00"></input>
							<input type="radio" name="2_6_11" value="4.00"></input>
							<input type="radio" name="2_6_11" value="5.00"></input>
						</td>
					</tr>
				</table>
			</div>
			<div class="detail" id="1">
				<table>
					<tr>
						<th class="title">评价标准</th>
						<th>非常不好  不好  一般  好  非常好</th>
					</tr>
					<tr>
						<td class="title">1、在任何时间都可以获取学习资源</td>
						<td class="option">
							<input type="radio" name="1_1_1" value="1.00"></input>
							<input type="radio" name="1_1_1" value="2.00"></input>
							<input type="radio" name="1_1_1" value="3.00"></input>
							<input type="radio" name="1_1_1" value="4.00"></input>
							<input type="radio" name="1_1_1" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">2、在任何地点都可以获取学习资源</td>
						<td class="option">
							<input type="radio" name="1_1_2" value="1.00"></input>
							<input type="radio" name="1_1_2" value="2.00"></input>
							<input type="radio" name="1_1_2" value="3.00"></input>
							<input type="radio" name="1_1_2" value="4.00"></input>
							<input type="radio" name="1_1_2" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">3、任何物体都可以成为学习资源</td>
						<td class="option">
							<input type="radio" name="1_1_3" value="1.00"></input>
							<input type="radio" name="1_1_3" value="2.00"></input>
							<input type="radio" name="1_1_3" value="3.00"></input>
							<input type="radio" name="1_1_3" value="4.00"></input>
							<input type="radio" name="1_1_3" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">4、提供的学习资源与当前学习目标匹配</td>
						<td class="option">
							<input type="radio" name="1_2_4" value="1.00"></input>
							<input type="radio" name="1_2_4" value="2.00"></input>
							<input type="radio" name="1_2_4" value="3.00"></input>
							<input type="radio" name="1_2_4" value="4.00"></input>
							<input type="radio" name="1_2_4" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">5、提供的学习资源与当前学习者特征匹配</td>
						<td class="option">
							<input type="radio" name="1_2_5" value="1.00"></input>
							<input type="radio" name="1_2_5" value="2.00"></input>
							<input type="radio" name="1_2_5" value="3.00"></input>
							<input type="radio" name="1_2_5" value="4.00"></input>
							<input type="radio" name="1_2_5" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">6、提供的学习资源能够在当前学习设备上自适应呈现</td>
						<td class="option">
							<input type="radio" name="1_2_6" value="1.00"></input>
							<input type="radio" name="1_2_6" value="2.00"></input>
							<input type="radio" name="1_2_6" value="3.00"></input>
							<input type="radio" name="1_2_6" value="4.00"></input>
							<input type="radio" name="1_2_6" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">7、学习者能够实时获取学习资源</td>
						<td class="option">
							<input type="radio" name="1_3_7" value="1.00"></input>
							<input type="radio" name="1_3_7" value="2.00"></input>
							<input type="radio" name="1_3_7" value="3.00"></input>
							<input type="radio" name="1_3_7" value="4.00"></input>
							<input type="radio" name="1_3_7" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">8、可获得来自他人推荐的学习资源</td>
						<td class="option">
							<input type="radio" name="1_4_8" value="1.00"></input>
							<input type="radio" name="1_4_8" value="2.00"></input>
							<input type="radio" name="1_4_8" value="3.00"></input>
							<input type="radio" name="1_4_8" value="4.00"></input>
							<input type="radio" name="1_4_8" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">9、可向他人推荐学习资源</td>
						<td class="option">
							<input type="radio" name="1_4_9" value="1.00"></input>
							<input type="radio" name="1_4_9" value="2.00"></input>
							<input type="radio" name="1_4_9" value="3.00"></input>
							<input type="radio" name="1_4_9" value="4.00"></input>
							<input type="radio" name="1_4_9" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">10、人也是一种学习资源</td>
						<td class="option">
							<input type="radio" name="1_4_10" value="1.00"></input>
							<input type="radio" name="1_4_10" value="2.00"></input>
							<input type="radio" name="1_4_10" value="3.00"></input>
							<input type="radio" name="1_4_10" value="4.00"></input>
							<input type="radio" name="1_4_10" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">11、学习者与学习资源可进行交互，如批注、修改等</td>
						<td class="option">
							<input type="radio" name="1_5_11" value="1.00"></input>
							<input type="radio" name="1_5_11" value="2.00"></input>
							<input type="radio" name="1_5_11" value="3.00"></input>
							<input type="radio" name="1_5_11" value="4.00"></input>
							<input type="radio" name="1_5_11" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">12、学习资源可在不同设备上进行无缝呈现</td>
						<td class="option">
							<input type="radio" name="1_6_12" value="1.00"></input>
							<input type="radio" name="1_6_12" value="2.00"></input>
							<input type="radio" name="1_6_12" value="3.00"></input>
							<input type="radio" name="1_6_12" value="4.00"></input>
							<input type="radio" name="1_6_12" value="5.00"></input>
						</td>
					</tr>
					<tr>
						<td class="title">13、切换学习情景后，学习资源可与前次学习内容无缝衔接</td>
						<td class="option">
							<input type="radio" name="1_6_13" value="1.00"></input>
							<input type="radio" name="1_6_13" value="2.00"></input>
							<input type="radio" name="1_6_13" value="3.00"></input>
							<input type="radio" name="1_6_13" value="4.00"></input>
							<input type="radio" name="1_6_13" value="5.00"></input>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="submit">
			<input type="button" value="提交" class="sub"/>
		</div>
		</div>
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
	<script src="/learn/Public/Js/county/calc.js" type="text/javascript" charset="utf-8"></script>
	<script src="/learn/Public/Js/county/level.js" type="text/javascript" charset="utf-8"></script>
</html>