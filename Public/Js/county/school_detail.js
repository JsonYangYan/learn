var str=location.href; //取得整个地址栏
var schoolId = decodeURI(str.split("=")[1].split("&")[0]);
var date = window.location.href.split('&')[1].split("=")[1];
//本校、本地区和襄阳市的基本情况对比表
var data_table = function() {
	$.ajax({
		url: schoolAreaAllDetailsUrl,
		type: "post",
		data: {
			"id": schoolId,
			"currentdate":date
		},
		success: function(data) {
			var basicInfoJson = {"infoData":[]};
			basicInfoJson.infoData = data;
			$("#basicInfo_list").html(TrimPath.processDOMTemplate("list_template", basicInfoJson));
		},
		error: function() {
			console.log("失败");
		}
	});	
	
	$(".downLoad").click(function(){
		location.href = exportTypicalIndexBySchoolIdCurrentTimeUrl;
	});
	
	
}


/*
 * 加载雷达图
 */
var buildNettable = function(divplace,title,category,data) {
	$(divplace).highcharts({
	    chart: {
	        polar: true,
	        backgroundColor: "#fff",
	        type: 'line'
	    },
	    title: {
	        text: title,
	        x: -10
	    },
	    pane: {
	    	size: '80%'
	    },
	    xAxis: {
	        categories: category,
	        tickmarkPlacement: 'on',
	        lineWidth: 0
	    },
	    yAxis: {
	        gridLineInterpolation: 'polygon',
	        lineWidth: 0,
	        min: 0
	    },
	    tooltip: {
	    	shared: true,
	        pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.2f}</b><br/>'
	    },
	    
	    legend: {
	        align: 'right',
	        verticalAlign: 'top',
	        y: 70,
	        layout: 'vertical'
	    },
	    series: data
	});
}

//本校、本地区和襄阳市的指标对比----雷达图
var fPart = function() {
	var temp_index = new Array();
	//根据学校id查询本校、本地区的数据，，，此处用json代替查询过程
	//根据学校id查询学校名称、该地区的名称及5个方面的发展指数	
	$.getJSON(indexUrl,function(data) {
		for(var i=0; i<data.length; i++) {
			temp_index.push([data[i].index]);
		}
	//传输请求
	$.ajax({
		url: avgScoreUrl,
		type: "post",
		data: {
			"id": schoolId,
			"currentdate":date
		},
		success: function(data) {
			console.log(data);
			var strSchoolName = data[0].name;
			var strAreaName = data[1].name;
			buildNettable("#left_side",""+strSchoolName+"、"+strAreaName+"和襄阳市"+date+"月份的平均水平对比情况",temp_index,data);
		},
		error: function() {
			console.log("失败");
		}
	});		
	});
};



var init = function() {
	data_table();
    fPart();//本校、本地区和襄阳市的指标对比----雷达图
};

init();