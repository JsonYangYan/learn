$(function(){
	window.standard1 = {
	"1":[0.40,0.40,0.20,0.34,0.33,0.33,1.00,0.34,0.34,0.32,1.00,0.50,0.50],
	"2":[0.50,0.50,0.33,0.36,0.31,1.00,0.52,0.48,1.00,0.49,0.51],
	"3":[0.54,0.46,0.51,0.49,1.00,0.54,0.46,1.00,1.00]
	};
	window.standard2 = {
		"1":[0.21,0.25,0.06,0.21,0.07,0.18],
		"2":[0.20,0.26,0.08,0.18,0.07,0.20],
		"3":[0.21,0.22,0.14,0.23,0.11,0.09]
	};
	window.standard3 = {
		"1":0.40,
		"2":0.35,
		"3":0.24
	};
	window.first = {
		"1": 0.00,
		"2": 0.00,
		"3": 0.00
	};
	window.second = {
		"1":[],
		"2":[],
		"3":[]
	};
	window.third = [];


	$(".navbar a").click(function(){
		var a = $(".navbar a");
		for(var i = 0 ; i < a.length ; i++){
			a.eq(i).removeClass("current");
		}
		$(this).addClass("current");
	});

})
