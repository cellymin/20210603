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
<form action="/mbs/index.php/oa/operationlog/buyuyuecaozuo" method="post" id="contact-form">
<div class="col-sm-12">
    <div class="ibox float-e-margins" id="shoujisf1">
        <div class="ibox-title">
            <h5><a class="collapse-link">咨询员补预约操作记录</a></h5>
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
                    <?php if($countyy > 1): ?><option value="">所有门店</option><?php endif; ?>
                      <?php if(is_array($ssyy)): $i = 0; $__LIST__ = $ssyy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["yyid"] == $dqyyID): ?><option value="<?php echo ($vo["yyid"]); ?>" selected="selected"><?php echo ($vo["yyname"]); ?></option>
                      <?php else: ?>
                      <option value="<?php echo ($vo["yyid"]); ?>"><?php echo ($vo["yyname"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
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
                <button class="btn btn-primary" type="submit" name="submit1" value="确定">确定筛选</button>
                </div>
        </div>
    </div>
</div>
</form>
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
                <table class="table table-striped table-bordered table-hover dataTables-example" style=" width:100% !important;">
                    <thead>
                        <tr>
                            <th>操作人</th>
                            <th>客户名</th>
                            <th class="hidden-xs">咨询病种</th>
                            <th class="hidden-xs">联系方式</th>
							<th class="hidden-xs">首次咨询时间</th>
							<th >补录预约状态时间</th>
                            <th class="hidden-xs">预约时间</th> 
							<th class="hidden-xs">到诊时间</th> 
                            <!--<th class="hidden-xs">咨询编号</th>-->
                        </tr>
                    </thead>
                    <tbody>
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["userchinaname"]); ?></td>
            <td><?php echo ($vo["huanzeName"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["bz_name"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["shouji"]); ?> <a href="javascript:sjhm('<?php echo ($vo["shouji"]); ?>');">查看</a></td>
			<td class="hidden-xs"><?php echo ($vo["zx_time"]); ?></td>
			<td ><?php echo ($vo["buyuyue_caozuotime"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["yuyuetime"]); ?></td>
			<td class="hidden-xs"><?php echo ($vo["daozhen_time"]); ?></td>
            <!--<td class="hidden-xs"><?php echo ($vo["zx_ID"]); ?></td>-->
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
       <!--  <div style="margin-top:-20px; margin-bottom:10px;">
        <form method="POST" action="/mbs/index.php/oa/operationlog/ExcleDC_zixunyuan">
        <input type="hidden" name="excle" value='<?php echo ($daochu); ?>' />
        <input type="hidden" name="excle1" value='<?php echo ($daochu_heji); ?>' />
        <input type="submit" name="submit_1" class="btn btn-white btn-sm" value="全部导出xls">
        </form>
        </div>  -->
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
<!-- Data Tables -->
<link href="<?php echo (CSS_URL); ?>/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<script src="<?php echo (JS_URL); ?>/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo (JS_URL); ?>/plugins/dataTables/dataTables.bootstrap.js"></script>
<script>
function sjhm(sjhm){
parent.layer.open({
    type: 2,
    title: '咨询记录',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '<?php echo (DQURL); ?>ManageZx/manage/shouji/'+sjhm //iframe url
});
};
$(document).ready(function() {
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

$(".dataTables-example").dataTable({pageLength:10});  //表格排序
});
</script>
</body>
</html>