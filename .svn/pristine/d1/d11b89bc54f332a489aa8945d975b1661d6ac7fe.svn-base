$(function(){
	
	$(".sub").click(function(){
		var options = $("input[type='radio']:checked");
		if(options.length!=33){
			alert("存在未填选项，请认真检查！")
		}else {
			var name = [];
			var tempfirst = "3";
			var tempsecond = "1";
			var result = 0;
			var total = 0;
			var val = 0;

			for (var i = 0; i < options.length; i++) {
				name = options.eq(i).attr('name').split('_');
				val = parseFloat(options.eq(i).val());
				var temp = {};
				temp['level'] = name;
				temp['value'] = val;
				third.push(temp);
			}

			for (var j = 0; j < third.length; j++) {
				val = third[j]['value'];
				if(third[j]['level'][0] == tempfirst && third[j]['level'][1] != tempsecond){
					second[tempfirst].push(result);
					result = val * standard1[tempfirst][third[j]['level'][2]-1];
					tempsecond = third[j]['level'][1];
				}
				else if(third[j]['level'][0] == tempfirst && third[j]['level'][1] == tempsecond){
					result += val * standard1[tempfirst][third[j]['level'][2]-1];
				}
				else if(third[j]['level'][0] != tempfirst){
					second[tempfirst].push(result);
					tempfirst = third[j]['level'][0];
					tempsecond = third[j]['level'][1];
					result = val * standard1[tempfirst][third[j]['level'][2]-1];
				}
			}
			second[tempfirst].push(result);

			for (var i = 0; i < second["1"].length; i++) {
				total += standard2["1"][i] * second["1"][i];
			}

			first["1"] = total;
			total = 0;

			for (var i = 0; i < second["2"].length; i++) {
				total += standard2["2"][i] * second["2"][i];
			}

			first["2"] = total;
			total = 0;
			for (var i = 0; i < second["3"].length; i++) {
				total += standard2["3"][i] * second["3"][i];
			}

			first["3"] = total;
			var templevel3 = [];
			var templevel2 = [];
			var templevel1 = [];
			for (var i = 0; i < third.length; i++) {
				if(third[i]['level'][0] == "3"){
					templevel3.push(third[i]);
				}
				if(third[i]['level'][0] == "2"){
					templevel2.push(third[i]);
				}
				if(third[i]['level'][0] == "1"){
					templevel1.push(third[i]);
				}
			}
			thirdlevel = templevel1.concat(templevel2,templevel3);

			$.ajax({
				type:"post",
				url:getScoreUrl,
				async:true,
				data:{
					level1 : first,
					level2 : second,
					level3 : thirdlevel
				},
				success : function(data){
					if(data=="ok"){
						alert("提交成功");
					}else{
						alert("提交失败");
					}
				}
			});

			console.log(first);
			console.log(second);
			console.log(third);
		}


	});
})

