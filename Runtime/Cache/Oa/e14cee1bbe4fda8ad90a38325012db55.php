<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<title>苗博士CRM网络管理系统</title>
<link href="<?php echo (CSS_URL); ?>/bootstrap.min.css?v=3.3.5" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/animate.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/plugins/iCheck/custom.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/style.min.css?v=3.2.0" rel="stylesheet">
</head>
<body  class="gray-bg">
<div class="wrapper wrapper-content animated fadeInUp">
  <div class="col-sm-12">
    <div class="ibox float-e-margins">
        <div class="ibox-content" style="padding-bottom:0px;">
          <table class="table table-striped table-hover">
            <tbody>
              <tr>
                <td>
<strong>当前导入的门店为：<?php echo ($yyname); ?> </strong>
                </td>
              </tr>
              <tr>
                <td>
<strong>导入格式要求：</strong><br>
<b>1、</b>请将第一行的“网站商务通 历史记录报表” 和 第二行的“设定的条件如下:时间段: 从201X/X/XX 0:00:00到201X/X/XX XX:18:06” 删除；<br>
<b>2、</b>编号必须在第一列；<br>
<b>3、</b>商务通中导出的EXCLE表的字段名，请不要进行修改，否则无法识别；<br>
<b>4、</b>必须上传的列有：编号 、开始访问时间、开始对话时间、对话类型、IP地址、永久身份、对话来源、访问来源、初次访问网址、关键词、初始接待客服、客人类别、开始方式；<br>
<b>5、</b>其它的列即便上传，也不会进入系统，会被系统自动丢弃(最方便的方式：可将商务通全选导出，将编号放在第一列上传即可；系统自动识别)。<br>
<font color='#ED5565'>备注：a,请将无效咨询删除，避免导入后暂用系统资源和等待时间较长；b, 单词最大上传条数为2000条。</font>
                </td>
              </tr>
              <tr>
                <td>
<?php echo ($yyname); ?> 最后导入咨询量的咨询时间为：<?php echo ($lastdaoru); ?>
                </td>
              </tr>
              <tr style="display:none;">
                <td>
<form action="/index.php/oa/system_site/system_swttb" method="post"enctype="multipart/form-data">
<input name="zx_timeStart" type="text" class="form-control layer-date" id="shijian1" placeholder="YYYY-MM-DD" value="<?php echo ($yestoday); ?>" style="width:260px; display:inline-block;"/>
<input name="zx_timeEnd" type="text" class="form-control layer-date" id="shijian2" placeholder="YYYY-MM-DD"  value="<?php echo ($tomorrow); ?>" style="width:260px; display:inline-block;"/>
<input type="hidden" name="yyid" value="<?php echo ($yyid); ?>">
<input type="submit" name="submit" value="数据同步" class="btn btn-primary" id="xuanzhongz" style="display:inline-block;vertical-align:bottom"/>
</form>
                </td>
              </tr>
              <tr>
                <td>
<form action="/index.php/oa/system_site/system_swt" method="post"enctype="multipart/form-data">
<input type="hidden" name="yyid" value="<?php echo ($yyid); ?>">
<input type="file" name="swt" id="file" style="display:inline-block;"/>
<input type="submit" name="submit" value="数据上传" class="btn btn-primary" id="xuanzhongz" style="display:inline-block;"/><br>
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
<!-- 自定义js --> 
<script src="<?php echo (JS_URL); ?>/content.min.js?v=1.0.0"></script>
<!-- layerjs --> 
<script src="<?php echo (JS_URL); ?>/plugins/layer/layer.min.js"></script>
<!-- layerDate plugin javascript -->
<script src="<?php echo (JS_URL); ?>/plugins/layer/laydate/laydate.js"></script>

<script type="text/javascript">
$(document).ready(function(){
<!-- 时间 --> 
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
        start.max = datas //结束日选好后，重置开始日的最大日期
    }
};
laydate(start);
laydate(end);

$('[id=xuanzhongz]').click(function () {  //筛选等待
//loading层
var index = layer.load(2,{
  shade: [0.3,'#000'] //0.1透明度的白色背景
});

  var $btn = $(this);
  $btn.button('loading');
    setTimeout(function(){
      $btn.button('reset');
  }, 5000);
});
});
</script>
</body>
</html>