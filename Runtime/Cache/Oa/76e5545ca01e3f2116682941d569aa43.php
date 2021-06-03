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
        <div class="ibox-title">
            <h5><a class="collapse-link">信息来源</a></h5>
            <div style="display:inline-block;margin-top:-6px;padding:0;float:left; margin-left:10px;">
            <a class="btn btn-primary btn-xs" id="tianjialy" style="border-radius:3px 3px 0px 0px; border-bottom:0px;">添加来源</a>
            </div>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-wrench"></i>
                </a>
            </div>
        </div>
        <form method="post" action="/index.php/oa/system_site/bz_submit">
        <div class="ibox-content">
              <table class="table table-striped table-hover">
                  <thead>
                      <tr>
                          <th class="hidden-xs">ID</th>
                          <th>来源名</th>
                          <th class="hidden-xs">排序</th>
                          <th>操作</th>
                      </tr>
                  </thead>
                  <tbody>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td class="hidden-xs"><?php echo ($i); ?></td>
    <td><?php echo ($vo["xx_name"]); ?></td>
    <td class="hidden-xs"><?php echo ($vo["xx_sort"]); ?></td>
    <td>
    <a href="/index.php/oa/system_site/system_xx_stop/ID/<?php echo ($vo["ID"]); ?>" title="<?php if($vo["xx_del"] == 0): ?>停用<?php else: ?>启用<?php endif; ?>" class="btn btn-white btn-sm"><?php if($vo["xx_del"] == 0): ?>启用中<?php else: ?><font color=red>停用中</font><?php endif; ?></a>
    <a href="javascript:xiugaily('<?php echo ($vo["xx_name"]); ?>','<?php echo ($vo["ID"]); ?>','<?php echo ($vo["xx_sort"]); ?>')" class="btn btn-white btn-sm">修改</a>
    <a href="javascript:shanchuly('/index.php/oa/system_site/system_xx_del/ID/<?php echo ($vo["ID"]); ?>')" class="btn btn-white btn-sm">删除</a>
    </td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        <tr>
                            <td colspan="4">
<div class="pagee"><?php echo ($page); ?></div>
                            </td>
                        </tr>
                  </tbody>
              </table>
        </div>
      </form>
 </div>
</div>
</div>

<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;" id="tianjialynn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index: 19891020; width:310px; height:250px; left:50%; margin-left:-155px;">
    <div class="layui-layer-title" style="cursor: move;">添加来源</div>
    <div class="layui-layer-content">
<div class='animated'><form action='/index.php/oa/system_site/xx_insert' method='post' class='form-horizontal'><div class='ibox float-e-margins' style='margin-bottom:0px;'><div class='ibox-content'><div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>来源名</span><input class='form-control' name='xx_name' type='text' /></div><div class='form-group' align='center' style='margin-bottom:5px;'><button class='btn btn-primary' type='submit' name='submit_addhuifang'>确定添加</button></div></div></div></form></div>
    </div>
<span class="layui-layer-setwin" id="tianjialyxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span>
  </div>
</div>

<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;" id="xiugailynn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index: 19891020; width:310px; height:250px; left:50%; margin-left:-155px;">
    <div class="layui-layer-title" style="cursor: move;">修改来源</div>
    <div class="layui-layer-content">
<div class='animated'><form action='/index.php/oa/system_site/xx_update' method='post' class='form-horizontal'><div class='ibox float-e-margins' style='margin-bottom:0px;'><div class='ibox-content'><div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>来源名</span><input class='form-control' name='xx_name' id='fuzhi1' type='text' value=''/></div><div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>排序</span><input class='form-control' name='xx_sort' id='fuzhi3' type='text' value=''/><input type='hidden' name='ID' value='' id='fuzhi2'></div><div class='form-group' align='center' style='margin-bottom:5px;'><button class='btn btn-primary' type='submit' name='submit_addhuifang'>确定修改</button></div></div></div></form></div>
    </div>
<span class="layui-layer-setwin" id="xiugailyxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span>
  </div>
</div>

 <!-- 全局js --> 
<script src="<?php echo (JS_URL); ?>/jquery.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script> 
<!-- 自定义js --> 
<script src="<?php echo (JS_URL); ?>/content.min.js?v=1.0.0"></script>
<!-- layerjs --> 
<script src="<?php echo (JS_URL); ?>/plugins/layer/layer.min.js"></script>
<script>
function shanchuly(urldz){
parent.layer.confirm('确定删除？ 删除不能恢复!', {
    btn: ['确认删除','取消操作'], 
    shade: false //不显示遮罩
}, function(){
location.href = urldz
}, function(){

});
};
$('#tianjialy').on('click', function(){
$('#tianjialynn').show()
});
$('#tianjialyxx').on('click', function(){
$('#tianjialynn').hide()
});
function xiugaily(xx_name,xx_id,xx_sort){
$('#fuzhi1').val(xx_name);
$('#fuzhi2').val(xx_id);
$('#fuzhi3').val(xx_sort);
$('#xiugailynn').show()
};
$('#xiugailyxx').on('click', function(){
$('#xiugailynn').hide()
});
</script>

<!--全选-->
<script type="text/javascript">
  $(function() {
	 $("#checkAll").click(function() {
		  $('input[id="quanxuan"]').prop("checked",this.checked); 
	  });
	  var $subBox = $("input[id='quanxuan']");
	  $subBox.click(function(){
		  $("#checkAll").prop("checked",$subBox.length == $("input[id='quanxuan']:checked").length ? true : false);
	  });
  });
$('.btn-primary').click(function () {  //筛选等待
  var $btn = $(this);
  $btn.button('loading');
    setTimeout(function(){
      $btn.button('reset');
  }, 2000);
});
</script>
</body>
</html>