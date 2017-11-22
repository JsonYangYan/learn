/**
 * Created by S on 2017/11/14.
 */
var myChart = echarts.init(document.getElementById('rador'));
function getUrlParam(name)
{
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
    var r = window.location.search.substr(1).match(reg);  //匹配目标参数
    if (r!=null) return unescape(r[2]);
    return null; //返回参数值
}
$(function(){
    $.ajax({
        url:getUserInforUrl,
        type:'post',
        data :{
            id : getUrlParam('val')
        },
        success:function(data){
            $(".school_title").text(data[0].depart + "泛在学习环境建设情况");
            var arr_total = new Array();
            var arr1 = new Array();
            var arr2 = new Array();
            var arr3 = new Array();
           arr_total = data[0].secondScore;
            for (var i=0;i<6;i++){
                arr1.push(arr_total[i]);
            }
            for (var i=6;i<12;i++){
                arr2.push(arr_total[i]);
            }
            for (var i=12;i<18;i++){
                arr3.push(arr_total[i]);
            }

            myChart.setOption({
                title: {
                     text: ''
                },
                tooltip: {},
                color:['red','yellow','blue'],
                legend: {
                    data: ['学习资源', '学习服务','学习评价']
                },
                radar: {
                   // shape: 'circle',
                    name: {
                        textStyle: {
                            color: '#fff',
                            backgroundColor: '#999',
                            borderRadius: 3,
                            padding: [3, 5]
                        }
                    },
                    indicator: [
                        { name: '泛在性', max:6},
                        { name: '情境适应', max:6},
                        { name: '即时性', max:6},
                        { name: '社会性', max:6},
                        { name: '交互性', max:6},
                        { name: '无缝性', max:6},

                    ],
                    //splitArea: {
                    //    areaStyle: {
                    //        color: ['#B8D3E4', '#96C5E3', '#7DB5DA', '#72ACD1']
                    //    }
                    //}
                },
                series: [{
                    name: '学习资源 vs 学习服务 vs 学习评价',
                    type: 'radar',
                    // areaStyle: {normal: {}},
                    data : [
                        {
                            //itemStyle: {
                            //    normal: {
                            //        lineStyle: {
                            //            //type: 'default',
                            //            //opacity: 0.8, // 图表中各个图区域的透明度
                            //            color: "red" // 图表中各个图区域的颜色
                            //        }
                            //    }
                            //},
                            name :'学习资源',
                            value :arr1
                        },
                        {
                            //itemStyle: {
                            //    normal: {
                            //        lineStyle: {
                            //            //type: 'default',
                            //            //opacity: 0.8, // 图表中各个图区域的透明度
                            //            color: "yellow" // 图表中各个图区域的颜色
                            //        }
                            //    }
                            //},
                            name :'学习服务',
                            value :arr2
                        },
                        {
                            //itemStyle: {
                            //    normal: {
                            //        lineStyle: {
                            //            //type: 'default',
                            //            //opacity: 0.8, // 图表中各个图区域的透明度
                            //            color: "blue" // 图表中各个图区域的颜色
                            //        }
                            //    }
                            //},
                            name :'学习评价',
                            value :arr3
                        }
                    ]
                }]
            });

        },
        error:function(){
            alert('ajax调用不成功！');
        }
    })
})
