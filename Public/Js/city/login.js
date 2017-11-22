var longin = function() {

 	//向服务器请求登陆
	if($("#username").val() === "") {
		var txt=  "用户名不能为空！";
		window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.info);
		$("#username").focus();
	}else{
		if($("#password").val() === "") {
			var txt=  "密码不能为空！";
			window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.info);
			$("#password").focus();
		}else{
			//若用户名密码都不为空，则登陆
			$.ajax({
				url: login_url,
			   	type: "POST",
			   	data: {
					"name": $("#username").val(),
					"password": $("#password").val(),
				},
					success: function(data) {
					console.log(data);
					if(data == "username_error") {
						var txt=  "请输入正确用户名！";
						window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.info);
				      	$("#username").val("");
				      	$("#password").val("");
			      		$("#username").focus();
					}
					else if(data == "password_error") {
						var txt=  "请输入正确密码！";
						window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.info);
				      	$("#password").val("");
			      		$("#password").focus();
		            }
		            else if(data == "admin") {//市级管理员
						goToAdminPage();
					}
					else if(data == "user") {//非管理员
						goToSlPage();
					}
				},
				error: function() {
					var txt=  "连接服务器失败！";
					window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.info);
			      	$("#username").val("");
			      	$("#password").val("");
			      	$("#username").focus();
				}
			});
		};
	};

	//跳转到非管理员
	var goToSlPage = function() {
		window.document.location.href = location_county_url;
	};
	//页面跳转到管理员
	var goToAdminPage = function() {
		window.document.location.href = location_admin_url;
	};
};



//事件绑定
var bindLoginEvent = function() {	
	
	//点击登陆按钮
   	$(".login_btn").live("click", function(){
		 longin();
	});
   	   	
	//在输入框敲回车
   	$("#password").live("keypress", function(event){
		switch(event.keyCode) {
			case 13:
				$(".login_btn").addClass("login_key");
				setTimeout(function(){
					$(".login_btn").removeClass("login_key");
					longin();
				},100);

				break;
		}
	});

};

var init = function() {
	bindLoginEvent();
	$("#username").focus();
};

init();