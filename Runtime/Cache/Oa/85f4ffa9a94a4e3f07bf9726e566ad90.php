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
<body  class="gray-bg">
<div class="wrapper wrapper-content animated fadeInUp">
<form action="/index.php/oa/returnvisit/huifangjihua_list" method="post" id="contact-form">
<div class="col-sm-12">
    <div class="ibox float-e-margins" id="shoujisf1">
        <div class="ibox-title">
            <h5><a class="collapse-link">回访计划 筛查选项</a></h5>
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
                    <span class="input-group-addon"><font color="<?php echo ($yanse4); ?>">到诊状态</font></span>
                      <select name="shifoudaozhen" class="form-control">
                        <option value="0" <?php echo ($huichuan0); ?>>所有咨询</option>
                        <option value="1" <?php echo ($huichuan1); ?>>仅咨询</option>
                        <option value="2" <?php echo ($huichuan2); ?>>已预约</option>
                        <option value="3" <?php echo ($huichuan3); ?>>已到诊</option>
                        <option value="4" <?php echo ($huichuan4); ?>>未到诊</option>
                      </select>
                    </div>
                </div>
              <div class="row" style="margin:0;">
                <div class="col-sm-3" style="padding:0px;">
                            <div class="form-group">
                                        <label class="col-sm-12 control-label">咨询时间</label>
                                        <div class="col-md-6">
                                            <input name="zx_timeStart" type="text" class="form-control layer-date" placeholder="YYYY-MM-DD" value="<?php echo ($zx_timeStart); ?>" id="shijian11"/>
                                        </div>
                                        <div class="col-md-6">
                                           <input name="zx_timeEnd" type="text" class="form-control layer-date" placeholder="YYYY-MM-DD"  value="<?php echo ($zx_timeEnd); ?>" id="shijian12"/>
                                        </div>
                            </div>
                </div>
                <div class="col-sm-3" style="padding:0px;">
                            <div class="form-group">
                                        <label class="col-sm-12 control-label">计划回访时间</label>
                                        <div class="col-md-6">
          <input name="hfTimeStart" type="text" class="form-control layer-date" placeholder="YYYY-MM-DD" value="<?php echo ($hfTimeStart); ?>" id="shijian21"/>
                                        </div>
                                        <div class="col-md-6">
          <input name="hfTimeEnd" type="text" class="form-control layer-date" placeholder="YYYY-MM-DD" value="<?php echo ($hfTimeEnd); ?>" id="shijian22"/>
                                        </div>
                            </div>
                </div>
                <div class="col-sm-3">
                <label class="col-sm-12 control-label">&nbsp;</label>
                <button class="btn btn-primary" type="submit">确定筛选</button>
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
            <h5><a class="collapse-link">计划回访列表</a></h5>
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
                            <th>计划回访日期</th>
                            <th class="hidden-xs">计划添加者</th>
							<th>完成状态</th>
                            <th class="hidden-xs">患者姓名</th>
							<th class="hidden-xs">咨询员</th>
                            <th class="hidden-xs">病种</th>
                            <th class="hidden-xs">咨询日期</th>
							<th class="hidden-xs">预约日期</th>
							<th class="hidden-xs">到诊日期</th>
                            <th class="hidden-xs">到诊状态</th>
                            <th>计划回访主题</th>
                        </tr>
                    </thead>
                    <tbody>
         <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["hfjh_time"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["adduser_ID"]); ?></td>
			<?php if($vo["zxhf_ID"] == ''): ?><td><span class="badge badge-warning">未完成</span></td>
			<?php else: ?>
			<td><span class="badge badge-info">完成/<?php echo ($vo["hfzuser_ID"]); ?></span></td><?php endif; ?>
            <td class="hidden-xs"><?php echo ($vo["huanzeName"]); ?></td>
			<td class="hidden-xs"><?php echo ($vo["userchinaname"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["bz_name"]); ?></td>
            <td class="hidden-xs"><?php echo (substr($vo["zx_time"],0,10)); ?></td>
            <td class="hidden-xs"><?php echo (substr($vo["yuyueTime"],0,10)); ?></td>
			<td class="hidden-xs"><?php echo (substr($vo["daozhen_time"],0,10)); ?></td>
			<?php if($vo["shifoudaozhen"] == 0): ?><td class="hidden-xs"><span class="badge badge-info">已到诊</span></td>
			<?php else: ?>
			<td class="hidden-xs"><span class="badge">未到诊</span></td><?php endif; ?>
			<td><?php echo ($vo["hfjh_zhuti"]); ?></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        <tr>
                            <td colspan="11" class="hidden-xs">
                              <div style="height:30px; overflow:hidden; text-align:right;">
                              <?php echo ($fenye5); ?>
                              </div>
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

<!--二级联动-->
<script type="text/javascript">
$(document).ready(function() {

var shijian1 = {
    elem: '#shijian11',
    format: 'YYYY-MM-DD',
    istoday: true,
    choose: function(datas){
    shijian2.min = datas;
    }
};
var shijian2 = {
    elem: '#shijian12',
    format: 'YYYY-MM-DD',
    istoday: true,
    choose: function(datas){
    shijian1.max = datas;
    }
};
var shijian3 = {
    elem: '#shijian21',
    format: 'YYYY-MM-DD',
    istoday: true,
    choose: function(datas){
    shijian4.min = datas;
    }
};
var shijian4 = {
    elem: '#shijian22',
    format: 'YYYY-MM-DD',
    istoday: true,
    choose: function(datas){
    shijian3.max = datas;
    }
};
laydate(shijian1);
laydate(shijian2);
laydate(shijian3);
laydate(shijian4);

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