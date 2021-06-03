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
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInUp">
<form action="/index.php/oa/tongji/report_tongji" method="post" id="contact-form">
<div class="col-sm-12">
    <div class="ibox float-e-margins" id="shoujisf1">
        <div class="ibox-title">
            <h5><a class="collapse-link">咨询数据 筛查选项</a></h5>
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
                      <option value="">所有门店</option>
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
                    <span class="input-group-addon"><font color="<?php echo ($yanse2); ?>">所属病种</font></span>
                      <select name="bz_ID" id="userinfoBZ" class="form-control">
                       <?php if($dqyyID == ''): ?><option value="">所有</option> 		  
                        <?php else: ?>
                          <?php echo (column_down_eyy2(0,$morenBzID,0,$dqyyID,$cishu)); endif; ?>
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
                <div class="col-sm-3" id="shijian11" style="padding-left:0px;padding-right:0px;">
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
                <div class="col-sm-3" id="shijian22" style="padding-left:0px;padding-right:0px;display:none;">
                    <div class="col-md-6">
                    <div class="input-group m-b" style="width:100%;">
                    <input name="zx_timeStart2" type="text" class="form-control layer-date" id="shijian3" placeholder="YYYY-MM" value="<?php echo ($zx_timeStart2); ?>"/>
                    <span class="input-group-addon" id="visible-xs">开始时间</span>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="input-group m-b" style="width:100%;">
                    <input name="zx_timeEnd2" type="text" class="form-control layer-date" id="shijian4" placeholder="YYYY-MM"  value="<?php echo ($zx_timeEnd2); ?>"/>
                    <span class="input-group-addon" id="visible-xs">结束时间</span>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3" id="shijian33" style="padding-left:0px;padding-right:0px;display:none;">
                    <div class="input-group m-b">
                    <span class="input-group-addon"><font color="<?php echo ($yanse5); ?>">环比天数</font></span>
                       <select name="tianshu"  class="form-control">
					       <option value="">请选择环比天数</option>
								<?php if(is_array($tianshu)): $i = 0; $__LIST__ = $tianshu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo == $xz_tianshu): ?><option value="<?php echo ($vo); ?>" selected><?php echo ($vo); ?></option>
								 <?php else: ?>	
								    <option value="<?php echo ($vo); ?>"><?php echo ($vo); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
						   </potion>		
					   </select>
                    </div>
                </div>
                <div class="col-sm-3" style="padding-left:0px;padding-right:0px;">
                <div class="col-xs-6">
                <button class="btn btn-primary" type="submit">确定筛选</button>
                </div>
                <div class="col-xs-6">
                  <div data-toggle="buttons" class="btn-group">
                      <label class="btn btn-sm btn-white <?php echo ($active_tian); ?>" id="option11">
                          <input type="radio" id="option1" name="tian_geshi" value="天" >天</label>
                      <label class="btn btn-sm btn-white <?php echo ($active_yue); ?>" id="option22">
                          <input type="radio" id="option2" name="tian_geshi" value="月" <?php echo ($checked_yue); ?>>月</label>

                  </div>
                </div>
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
         <div class='echarts' id='echarts-bar-chart'></div>
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
        <div class="ibox-content" style="margin-bottom:0px; padding-bottom:0px;">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>日期</th>
                            <th>咨询量</th>
                            <th>预约量</th>
                            <th>实际到诊</th>
                            <th>应到诊</th>           
                            <th class="hidden-xs">预约率</th>
                            <th class="hidden-xs">到诊率</th>
                            <th class="hidden-xs">转化率</th>
                        </tr>
                    </thead>
                    <tbody>
         <?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr style="background: #E0E0E0">     
            <td><?php echo ($vo["riqi"]); ?></td>
            <td><?php echo ($vo["zixun"]); ?></td>
            <td><?php echo ($vo["yuyue"]); if($vo["yuyue"] > 0): ?><span class="pie"><?php echo ($vo["yuyue"]); ?>/<?php echo ($vo["zixun"]); ?></span><?php endif; ?></td>
            <td><?php echo ($vo["daozhen"]); if($vo["daozhen"] > 0): ?><span class="pie"><?php echo ($vo["daozhen"]); ?>/<?php echo ($vo["zixun"]); ?></span><?php endif; ?></td>
            <td><?php echo ($vo["ydaozhen"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["yuyuelv"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["daozhenlv"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["zhuanhualv"]); ?></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
         <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>     
            <td><?php echo ($vo["riqi"]); ?></td>
            <td><?php echo ($vo["zixun"]); ?></td>
            <td><?php echo ($vo["yuyue"]); ?></td>
            <td><?php echo ($vo["daozhen"]); ?></td>
            <td><?php echo ($vo["ydaozhen"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["yuyuelv"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["daozhenlv"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["zhuanhualv"]); ?></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                     
                        <tr>
                            <td colspan="8" class="hidden-xs">
<form method="POST" action="/index.php/oa/tongji/ExcleDC_tongji">
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
<!-- Peity -->
<script src="<?php echo (JS_URL); ?>/plugins/peity/jquery.peity.min.js"></script>
<!-- Peity -->
<script src="<?php echo (JS_URL); ?>/demo/peity-demo.min.js"></script>
<!-- 自定义js --> 
<script src="<?php echo (JS_URL); ?>/content.min.js?v=1.0.0"></script>
<!-- layerDate plugin javascript -->
<script src="<?php echo (JS_URL); ?>/plugins/layer/laydate/laydate.js"></script>

<!--二级联动-->
<script type="text/javascript">
$(document).ready(function() {

var shijian1 = {
    elem: '#shijian1',
    format: 'YYYY-MM-DD',
    istoday: true,
    choose: function(datas){
    shijian2.min = datas;
    }
};
var shijian2 = {
    elem: '#shijian2',
    format: 'YYYY-MM-DD',
    istoday: true,
    choose: function(datas){
    shijian1.max = datas;
    }
};
var shijian3 = {
    elem: '#shijian3',
    format: 'YYYY-MM',
    istoday: true,
    choose: function(datas){
    shijian4.min = datas;
    }
};
var shijian4 = {
    elem: '#shijian4',
    format: 'YYYY-MM',
    istoday: true,
    choose: function(datas){
    shijian3.max = datas;
    }
};
laydate(shijian1);
laydate(shijian2);
laydate(shijian3);
laydate(shijian4);

<?php if($checked_yue == 'checked'): ?>$("#shijian11").hide();
  $("#shijian22").show();
  $("#shijian33").show();<?php endif; ?>



$("#option11").click(function(){  //日
  $("#shijian11").show();
  $("#shijian22").hide();
  $("#shijian33").hide();
  var shijianb1 = $("#shijian3").val() + "-00";
  var shijianb2 = $("#shijian4").val() + "-00";
  $("#shijian1").val(shijianb1.substr(0, 10));
  $("#shijian2").val(shijianb2.substr(0, 10));
});
$("#option22").click(function(){  //月
  $("#shijian11").hide();
  $("#shijian22").show();
  $("#shijian33").show();
  var shijianb1 = $("#shijian1").val();
  var shijianb2 = $("#shijian2").val();
  $("#shijian3").val(shijianb1.substr(0, 7));
  $("#shijian4").val(shijianb2.substr(0, 7));
});

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
$("#register0").change(function(){  //病种联动
$.ajax({
type:"post",
url:"<?php echo (DQURL); ?>Addzixun/bzLianDong",
data:"bzid=" + $("#register0").val(),
success:function(msg){
$("#userinfoBZ").html(msg);
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
        text: ' 数据汇总统计图',
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
            data : [<?php echo ($tubiao_riqi); ?>]
        }],
        yAxis: [{
            type : 'value',
			boundaryGap : ['0', '0'],
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
        }
    ]
};
// 为echarts对象加载数据 
myChart.setOption(option);
window.onresize = myChart.resize;
});
</script><?php endif; ?>
<script>
 $(document).ready(function() {  //手机下缩选项
var w  = document.body.clientWidth;
if (w<500)  {
 $("#shoujisf1").addClass('border-bottom')
 $("#shoujisf2").addClass('fa-chevron-up')
 $("#shoujisf2").addClass('fa-chevron-down')
 $("#shoujisf3").css("display","none");
  }
});
</script>
</body>
</html>