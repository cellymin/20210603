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
<form action="/index.php/oa/operationlog/denglu" method="post" id="contact-form">
<div class="col-sm-12">
    <div class="ibox float-e-margins" id="shoujisf1">
        <div class="ibox-title">
            <h5><a class="collapse-link">登入日志查询  保留半年登入记录</a></h5>
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
                <div class="col-sm-3">
                    <div class="input-group m-b">
                    <span class="input-group-addon"><font color="<?php echo ($yanse2); ?>">所属组</font></span>
                    <select class="form-control" name="gongzuozu" id="gongzuozu" >
                      <option value="">所有组</option>
                       <?php if(is_array($gongzuozu)): $i = 0; $__LIST__ = $gongzuozu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["role_ID"] == $dqrole_ID): ?><option value="<?php echo ($vo["role_ID"]); ?>"  selected="selected" ><?php echo ($vo["role_name"]); ?></option>
                       <?php else: ?>
                         <option value="<?php echo ($vo["role_ID"]); ?>"><?php echo ($vo["role_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
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
                            <th class="hidden-xs"></th>
                            <th>操作人</th>
                            <th class="hidden-xs">账号</th>
                            <th>登陆时间</th>
                            <th class="hidden-xs">操作IP</th>
                            <th class="hidden-xs">IP地址</th>
                        </tr>
                    </thead>
                    <tbody>
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td class="hidden-xs"><img alt="image" class="img-circle" src="<?php echo (IMG_URL); ?>/a<?php echo mt_rand(1,9);?>.jpg"></td>
            <td><?php echo ($vo["userchinaname"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["username"]); ?></td>
            <td><?php echo ($vo["dr_time"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["user_IP"]); ?></td>
            <td class="hidden-xs"><?php echo ($vo["diqu"]); ?></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
      <!--   <div style="margin-top:-20px; margin-bottom:10px;">
        <form method="POST" action="/index.php/oa/operationlog/ExcleDC_zixunyuan">
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

<?php if($countyy == 1): ?><!-- 首次加载 --> 
$.ajax({  //联动
type:"post",
url:"<?php echo (DQURL); ?>Employee/yuangongliandong",
data:"zixunyuan=" + $("#register0").val(),
success:function(msg){
$("#userinfoZxy").html(msg);
}
});<?php endif; ?>

$("#register0").change(function(){  //联动
$.ajax({
type:"post",
url:"<?php echo (DQURL); ?>Employee/yuangongliandong",
data:"zixunyuan=" + $("#register0").val(),
success:function(msg){
$("#userinfoZxy").html(msg);
}
});
});
$(".dataTables-example").dataTable({pageLength:10});  //表格排序
});
</script>
</body>
</html>