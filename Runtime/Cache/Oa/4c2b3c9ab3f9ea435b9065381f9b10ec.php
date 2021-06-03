<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>苗博士CRM网络管理系统</title>
<link href="<?php echo (CSS_URL); ?>/bootstrap.min.css?v=3.3.5" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/animate.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/plugins/iCheck/custom.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/plugins/summernote/summernote.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/plugins/summernote/summernote-bs3.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/style.min.css?v=3.2.0" rel="stylesheet">
</head>
<body oncopy="alert('你想干啥，在我的眼皮底下复制，没有经我同意禁止复制！');return false;" class="gray-bg">
<div class="wrapper wrapper-content animated fadeInUp">
<form action="/index.php/oa/tongji/report_bingzhong" method="post" id="contact-form">
<div class="col-sm-12">
    <div class="ibox float-e-margins" id="shoujisf1">
        <div class="ibox-title">
            <h5><a class="collapse-link">病种数据 筛查选项</a></h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-wrench" id="shoujisf2"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content" style="padding-left:0px;padding-right:0px;" id="shoujisf3">
                <div class="col-sm-3">
                    <div class="input-group m-b">
                    <span class="input-group-addon"><font color="<?php echo ($yanse); ?>">所属门店</font></span>
                    <select class="form-control" name="yy_ID" id="register0">
                    <!-- <?php if($countyy > 1): ?>-->
                      <option value="">所有门店</option>
                    <!--<?php endif; ?> -->
                      <?php if(is_array($ssyy)): $i = 0; $__LIST__ = $ssyy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["yyid"] == $dqyyID): ?><option value="<?php echo ($vo["yyid"]); ?>" selected="selected"><?php echo ($vo["yyname"]); ?></option>
                      <?php else: ?>
                      <option value="<?php echo ($vo["yyid"]); ?>"><?php echo ($vo["yyname"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group m-b">
                    <span class="input-group-addon"><font color="<?php echo ($yanse1); ?>">咨询客服</font></span>
                    <select class="form-control" name="userID" id="userinfoZxy" >
                      <option value="">所有咨询员</option>
                      <?php if(is_array($zixunyuan1)): $i = 0; $__LIST__ = $zixunyuan1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zixunyuan11): $mod = ($i % 2 );++$i; if(($zixunyuan11["user_ID"] == $dqzxy)): ?><option value="<?php echo ($zixunyuan11["user_ID"]); ?>" selected="selected"><?php echo ($zixunyuan11["userchinaname"]); ?></option>
                       <?php else: ?>
                        <option value="<?php echo ($zixunyuan11["user_ID"]); ?>"><?php echo ($zixunyuan11["userchinaname"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    </div>
                </div>           
                <div class="col-sm-3">
                    <div class="input-group m-b">
                    <span class="input-group-addon"><font color="<?php echo ($yanse3); ?>">咨询方式</font></span>
                    <select name="zxfs_ID" id="userinfo0" class="form-control zxfspdxj">
                      <?php if($dqyyID == ''): ?><option value="">所有</option>
                      <?php else: ?>
                       <?php echo (zxfs_down_eyy2(0,$morenZxfsID,0,$dqyyID,$cishu)); endif; ?>
                    </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group m-b">
                    <span class="input-group-addon"><font color="<?php echo ($yanse5); ?>">信息来源</font></span>
                      <select name="xx_ID" id="userinfoXxly" class="form-control">
                       <option value="">请选择信息来源</option>
                      <?php if(is_array($xinxidata)): $i = 0; $__LIST__ = $xinxidata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voxinxi): $mod = ($i % 2 );++$i; if($voxinxi["ID"] == $morenxxID): ?><option value="<?php echo ($voxinxi["ID"]); ?>" selected="selected"><?php echo ($voxinxi["xx_name"]); ?></option>
                          <?php else: ?>
                          <option value="<?php echo ($voxinxi["ID"]); ?>"><?php echo ($voxinxi["xx_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>   
                      </select>
                    </div>
                </div>
                <div class="col-sm-3" style="padding-left:0px;padding-right:0px;">
                    <div class="col-md-6">
                    <div class="input-group m-b" style="width:100%;">
                    <input name="zx_timeStart" type="text" class="form-control layer-date" id="shijian1" placeholder="YYYY-MM-DD" value="<?php echo ($zx_timeStart); ?>"/>
                    <span class="input-group-addon" id="visible-xs">开始时间</span>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="input-group m-b" style="width:100%;">
                    <input name="zx_timeEnd" type="text" class="form-control layer-date" id="shijian2" placeholder="YYYY-MM-DD"  value="<?php echo ($zx_timeEnd); ?>"/>
                    <span class="input-group-addon" id="visible-xs">结束时间</span>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3">
                <button class="btn btn-primary" name="submit1" value="确定筛选" type="submit">确定筛选</button>
                </div>
        </div>
    </div>
</div>
</form>
<?php if($tubiao_zixun != null): ?><div class="col-sm-12 hidden-xs">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><a class="collapse-link">图形报表</a></h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-wrench"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content" style="margin-bottom:0px; padding-bottom:0px;">
         <div class='echarts' id='echarts-bar-chart' style="height:500px;"></div>
        </div>
    </div>
</div><?php endif; ?>
<div class="col-sm-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><a class="collapse-link">咨询统计</a></h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-wrench"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>日期</th>
                            <th>咨询量</th>
                            <th>预约量</th>
                            <th>实际到诊</th>
                            <th>日均到诊</th>
                            <th>应到诊</th>           
                            <th class="hidden-xs">预约率</th>
                            <th class="hidden-xs">到诊率</th>
                            <th class="hidden-xs">转化率</th>
                        </tr>
                    </thead>
                    <tbody>
         <?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr style="background: #E0E0E0">     
            <td><?php echo ($vo["bz_name"]); ?></td>
            <td><?php echo ($vo["zixun"]); ?></td>
            <td><?php echo ($vo["yuyue"]); ?></td>
            <td><?php echo ($vo["daozhen"]); ?></td>
            <td><?php echo ($vo["rijun"]); ?></td>
            <td><?php echo ($vo["ydaozhen"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["yuyuelv"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["daozhenlv"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["zhuanhualv"]); ?></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
         <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["bz_level"] == 1): ?><tr>
            <td><div style="display:none"><?php echo ($num++); ?></div><a href="javascript:yiji('a<?php echo ($num); ?>');" class="a<?php echo ($num); ?>" title="+"><i class='icon icon-plus'></i>&nbsp;</a><?php echo ($vo["bz_name"]); ?></td>
           <?php else: ?>
           <tr id="a<?php echo ($num); ?>" style="display:none">
            <td><?php echo ($vo["bz_name"]); ?></td><?php endif; ?>   
            <td><?php echo ($vo["zixun"]); ?></td>
            <td><?php echo ($vo["yuyue"]); ?></td>
            <td><?php echo ($vo["daozhen"]); ?></td>
            <td><?php echo ($vo["rijun"]); ?></td>
            <td><?php echo ($vo["ydaozhen"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["yuyuelv"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["daozhenlv"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["zhuanhualv"]); ?></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                     
                        <tr>
                            <td colspan="8" class="hidden-xs">
<form method="POST" action="/index.php/oa/tongji/ExcleDC_bingzhong">
<input type="hidden" name="excle" value='<?php echo ($daochu); ?>' />
<input type="hidden" name="excle1" value='<?php echo ($daochu_heji); ?>' />
<input type="submit" name="submit_1" class="btn btn-white btn-sm" value="全部导出xls">
</form>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
</div>
</div>

<!-- 全局js --> 
<script src="<?php echo (JS_URL); ?>/jquery.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script> 
<!-- layerjs --> 
<script src="<?php echo (JS_URL); ?>/plugins/layer/layer.min.js"></script>
<!-- 自定义js --> 
<script src="<?php echo (JS_URL); ?>/content.min.js?v=1.0.0"></script>
    <!-- layerDate plugin javascript -->
    <script src="<?php echo (JS_URL); ?>/plugins/layer/laydate/laydate.js"></script>
    <script>
var start = {
    elem: '#shijian1',
    format: 'YYYY-MM-DD',
    istime: false,
    istoday: true,
    choose: function(datas){
         end.min = datas; //开始日选好后，重置结束日的最小日期
         end.start = datas //将结束日的初始值设定为开始日
    }
};
var end = {
    elem: '#shijian2',
    format: 'YYYY-MM-DD',
    istime: false,
    istoday: true,
    choose: function(datas){
        start.max = datas; //结束日选好后，重置开始日的最大日期
    }
};
laydate(start);
laydate(end);
    </script>
    
<!-- 折叠js -->
<script type="text/javascript">
function yiji(erji){
 var erjiid='[id='+erji+']',erjics='.'+erji;
 if ($(erjics).attr("title")=="+")
  {
 $(erjiid).show();
 $(erjics).html("<i class='icon icon-minus'></i>&nbsp;");
 $(erjics).attr("title","-");
  }
 else
  {
 $(erjiid).hide();
 $(erjics).html("<i class='icon icon-plus'></i>&nbsp;");
 $(erjics).attr("title","+");
  }
};
</script>

<!--二级联动-->
<script type="text/javascript">
$(document).ready(function() {
<?php if($countyy == 1): ?><!-- 首次加载 --> 
$.ajax({
type:"post",
url:"<?php echo (DQURL); ?>ManageZx/zixunyuanLianDong",
data:"zixunyuan=" + $("#register0").val(),
success:function(msg){
$("#userinfoZxy").html(msg);
}
});
$.ajax({
type:"post",
url:"<?php echo (DQURL); ?>Addzixun/ZiXunLianDong",
data:"username=" + $("#register0").val(),
success:function(msg){
$("#userinfo0").html(msg);
}
});
$.ajax({
type:"post",
url:"<?php echo (DQURL); ?>Addzixun/xxlyLianDong",
data:"xxid=" + $("#register0").val(),
success:function(msg){
$("#userinfoXxly").html(msg);
}
});<?php endif; ?>
$("#register0").change(function(){  //咨询员联动
$.ajax({
type:"post",
url:"<?php echo (DQURL); ?>ManageZx/zixunyuanLianDong",
data:"zixunyuan=" + $("#register0").val(),
success:function(msg){
$("#userinfoZxy").html(msg);
}
});
});
$("#register0").change(function(){  //咨询方式联动
$.ajax({
type:"post",
url:"<?php echo (DQURL); ?>Addzixun/ZiXunLianDong",
data:"username=" + $("#register0").val(),
success:function(msg){
$("#userinfo0").html(msg);
}
});
});
$("#register0").change(function(){  //信息来源联动
$.ajax({
type:"post",
url:"<?php echo (DQURL); ?>Addzixun/xxlyLianDong",
data:"xxid=" + $("#register0").val(),
success:function(msg){
$("#userinfoXxly").html(msg);
}
});
});
});
</script>

<?php if($tubiao_zixun != ''): ?><!-- ECharts -->
<script src="<?php echo (JS_URL); ?>/plugins/echarts/echarts-all.js"></script> 
<script>
$(function() {
var myChart = echarts.init(document.getElementById('echarts-bar-chart')); 
option = {
    title : {
        text: ' 咨询病种统计图',
        subtext: ' <?php echo ($zx_timeStart); ?> - <?php echo ($zx_timeEnd); ?>'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['咨询','预约','到诊']
        },
    toolbox: {
        show : true,
        feature : {
            mark : {show: false},
            dataView : {show: false, readOnly: false},
            magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
            restore : {show: false},
            saveAsImage : {show: true}
        }
    },
        xAxis: [{
            type: "category",
            data : [<?php echo ($tubiao_bzName); ?>]
        }],
        yAxis: [{
            type : 'value',
			boundaryGap : ['0', '0.8'],
            axisLabel : {
                formatter: '{value}'
            }
        }],
    series : [
        {
            name: "咨询",
            type: "bar",
            data: [<?php echo ($tubiao_zixun); ?>],
			itemStyle: {normal: {
				 label : {show: true}
			}},
            markLine : {
                data : [
                    {type : 'average', name: '平均值'}
                ]
            }
        },
        {
            name: "预约",
            type: "bar",
            data: [<?php echo ($tubiao_yuyue); ?>],
			itemStyle: {normal: {
				 label : {show: true}
			}},
            markLine : {
                data : [
                    {type : 'average', name: '平均值'}
                ]
            }
        },
        {
            name: "到诊",
            type: "bar",
            data: [<?php echo ($tubiao_daozhen); ?>],
			itemStyle: {normal: {
				 label : {show: true}
			}},
            markLine : {
                data : [
                    {type : 'average', name: '平均值'}
                ]
            }
        },
		{
            name:'咨询占比',
            type:'pie',
            tooltip : {
                trigger: 'item',
                formatter: '{a} <br/>{b} : {c} ({d}%)'
            },
            center: [250,130],
            radius : [0, 75],
            itemStyle :　{
                normal : {
                    labelLine : {
                        length : 5
                    }
                }
            },
            data:[
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["bz_level"] == 1): ?>{value:<?php echo ($vo["zixun"]); ?>, name:'<?php echo ($vo["bz_name"]); ?>'},<?php endif; endforeach; endif; else: echo "" ;endif; ?>
            ]
        },
		{
            name:'预约占比',
            type:'pie',
            tooltip : {
                trigger: 'item',
                formatter: '{a} <br/>{b} : {c} ({d}%)'
            },
            center: [600,130],
            radius : [0, 75],
            itemStyle :　{
                normal : {
                    labelLine : {
                        length : 5
                    }
                }
            },
            data:[
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["bz_level"] == 1): ?>{value:<?php echo ($vo["yuyue"]); ?>, name:'<?php echo ($vo["bz_name"]); ?>'},<?php endif; endforeach; endif; else: echo "" ;endif; ?>
            ]
        },
		{
            name:'到诊占比',
            type:'pie',
            tooltip : {
                trigger: 'item',
                formatter: '{a} <br/>{b} : {c} ({d}%)'
            },
            center: [950,130],
            radius : [0, 75],
            itemStyle :　{
                normal : {
                    labelLine : {
                        length : 5
                    }
                }
            },
            data:[
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["bz_level"] == 1): ?>{value:<?php echo ($vo["daozhen"]); ?>, name:'<?php echo ($vo["bz_name"]); ?>'},<?php endif; endforeach; endif; else: echo "" ;endif; ?>
            ]
        }
    ]
};
// 为echarts对象加载数据 
myChart.setOption(option);
window.onresize = myChart.resize;
});
</script><?php endif; ?>
</body>
</html>