
/**
 * 获取上一个月
 *
 * @date 格式为yyyy-mm的日期，如：2014-01
 */
function getPreMonth(date) {
    var arr = date.split('-');
    var year = arr[0]; //获取当前日期的年份
    var month = arr[1]; //获取当前日期的月份
    var days = new Date(year, month, 0);
    days = days.getDate(); //获取当前日期中月的天数
    var year2 = year;
    var month2 = parseInt(month) - 1;
    if (month2 == 0) {//如果是1月份，则取上一年的12月份
        year2 = parseInt(year2) - 1;
        month2 = 12;
    }
    if (month2 < 10) {
        month2 = '0' + month2;//月份填补成2位。
    }
    var t2 = year2 + '-' + month2;
    return t2;
}


//月份显示
var start_time = "2017-3";//开始时间 不要加0，如2016-2
var now = new Date();
var arr = start_time.split('-');
var start_year = arr[0];//开始年份
var start_month = arr[1];//开始月份
var month = now.getMonth()+1;//现在的月份
var year = now.getFullYear();//现在的年份
var count = ( year-start_year ) * 12 + month - start_month +1;//循环的次数
var data = [];
for( i=0; i<count; i++) {

	if (start_month < 10) {
		start_month = "0" + start_month;
	}
	data[i] = start_year + "-" +start_month;
	if(start_month == 12) {
		start_year++;
		start_month =0;
	}
	start_month++;
}
for(var i=0; i<data.length;i++) {
    if (data[i] == '2017-07' || data[i] == '2017-08'||data[i]=='2017-10'){
        continue;
    }
	$(".total_title").append("<span class='total_span total_noraml'>"+data[i]+"</span>");
}
$(".total_title span:last-child").removeClass("total_noraml").addClass("total_active");
$(".total_span").click(function(){
	$(".total_span").removeClass("total_active").addClass("total_noraml");
	$(this).removeClass("total_normal").addClass("total_active");
	show_time_data();
});

//导航显示之前点击的
var navstation = $.cookie("navstation");
if (typeof(navstation) == "undefined") navstation = "img_before_1";
var img_before = navstation;
var img_after_arr = img_before.split("_");
var img_after = img_after_arr[0]+"_after_"+img_after_arr[2];
$("#"+img_before).hide();
$("#"+img_after).show();
