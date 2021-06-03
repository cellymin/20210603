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
            <h5><a class="collapse-link"><?php echo ($yiyuanName); ?></a></h5>
            <div style="display:inline-block;margin-top:-6px;padding:0;float:left; margin-left:10px;">
            <a class="btn btn-primary btn-xs" id="tianjiays" style="border-radius:3px 3px 0px 0px; border-bottom:0px;">添加网站</a>
            </div>
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
                          <th class="hidden-xs">ID</th>
                          <th>网站名</th>
                          <th class="hidden-xs">URL</th>
                          <th class="hidden-xs">排序</th>
                          <th>操作</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                      <td class="hidden-xs"><?php echo ($i); ?></td>
                      <td><?php echo ($vo["wangzhan_name"]); ?></td>
                      <td class="hidden-xs"><?php echo ($vo["wangzhan_url"]); ?></td>
                      <td class="hidden-xs"><?php echo ($vo["wangzhan_sort"]); ?></td>
                      <td>
                      <a href="/index.php/oa/system_site/system_wangzhan_stop/ID/<?php echo ($vo["wangzhan_ID"]); ?>/yyid/<?php echo ($yyid); ?>" title="<?php if($vo["wangzhan_del"] == 0): ?>停用<?php else: ?>启用<?php endif; ?>" class="btn btn-white btn-sm"><?php if($vo["wangzhan_del"] == 0): ?>启用中<?php else: ?><font color=red>停用中</font><?php endif; ?></a>
                      <a onClick="xiugaiwz('<?php echo ($vo["wangzhan_name"]); ?>','<?php echo ($vo["wangzhan_ID"]); ?>','<?php echo ($vo["wangzhan_sort"]); ?>','<?php echo ($vo["wangzhan_url"]); ?>','<?php echo ($yyid); ?>')" class="btn btn-white btn-sm">修改</a>
                      <a href="javascript:void(0)" onClick="shanchuwz('/index.php/oa/system_site/system_wangzhan_del/yyid/<?php echo ($yyid); ?>/ID/<?php echo ($vo["wangzhan_ID"]); ?>')" class="btn btn-white btn-sm">删除</a>
                      <!--<a href="javascript:void(0)" onClick="liuyanpz('<?php echo ($vo["wangzhan_ID"]); ?>')" class="btn btn-white btn-sm hidden-xs">留言配置</a>-->
                      <!--<a href="javascript:void(0)" onClick="shanchuwz('/index.php/oa/system_site/system_wangzhan_del/yyid/<?php echo ($yyid); ?>/ID/<?php echo ($vo["wangzhan_ID"]); ?>')" class="btn btn-white btn-sm hidden-xs" >统计配置</a>-->
                      </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        <tr>
                            <td colspan="5"><?php echo ($page); ?></td>
                        </tr>
                  </tbody>
              </table>

        </div>
 </div>
</div>
</div>

<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;" id="tianjiaysnn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index: 19891020; width:310px; height:280px; left:50%; margin-left:-155px;">
    <div class="layui-layer-title" style="cursor: move;">添加网站</div>
    <div class="layui-layer-content">
<div class='animated'><form action='/index.php/oa/system_site/yywangzhan_insert' method='post' class='form-horizontal'><div class='ibox float-e-margins' style='margin-bottom:0px;'><div class='ibox-content'><div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>网站名</span><input class='form-control' name='wangzhan_name' type='text' /><input class='form-control' name='yy_ID' type='hidden' value='<?php echo ($yyid); ?>' /></div><div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>网站URL</span><input class='form-control' name='wangzhan_url' type='text' /></div><div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>排序</span><input class='form-control' name='wangzhan_sort' type='text' /></div><div class='form-group' align='center' style='margin-bottom:5px;'><button class='btn btn-primary' type='submit' name='submit_addhuifang'>确定保存</button></div></div></div></form></div>
    </div>
    <span class="layui-layer-setwin" id="tianjiaysxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span>
  </div>
</div>

<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;" id="xiugaiwznn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index: 19891020; width:310px; height:280px; left:50%; margin-left:-155px;">
    <div class="layui-layer-title" style="cursor: move;">修改网站</div>
    <div class="layui-layer-content">
<div class='animated'><form action='/index.php/oa/system_site/system_wangzhan_update' method='post' class='form-horizontal'><div class='ibox float-e-margins' style='margin-bottom:0px;'><div class='ibox-content'><div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>网站名</span><input class='form-control' name='wangzhan_name' type='text' value='' id='fuzhi1'/></div><div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>网站URL</span><input class='form-control' name='wangzhan_url' type='text' value='' id='fuzhi4'/></div><div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>排序</span><input class='form-control' name='wangzhan_sort' type='text' value='' id='fuzhi3'/><input type='hidden' name='yy_ID' value='' id='fuzhi5'><input type='hidden' name='wangzhan_ID' value='' id='fuzhi2'></div><div class='form-group' align='center' style='margin-bottom:5px;'><button class='btn btn-primary' type='submit' name='submit_addhuifang'>确定修改</button></div></div></div></form></div>
    </div>
    <span class="layui-layer-setwin" id="xiugaiwzxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span>
  </div>
</div>

<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;" id="liuyanpznn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index: 19891020;width:90%;height:90%;left:50%;top:5%;margin-left:-45%;">
    <div class="layui-layer-title" style="cursor: move;">留言调用代码</div>
    <div class="layui-layer-content" style=" padding:15px;">
以下代码插入对于域名网站即可使用。
<textarea class="alert alert-warning" rows=16 style=" margin-top:5px; display:block; width:100%;" id="fuzhi20"></textarea>
<textarea id="fuzhi21" style="display:none">
&lt;form name="input" action="http://<?php echo ($HTTP_HOST); ?>/Web/liuyan.aspx" method="post"&gt;
</textarea>
<textarea id="fuzhi22" style="display:none">

&lt;input type="text" name="ly-name" /&gt;
&lt;input type="text" name="ly-tele" /&gt;
&lt;select name="ly-keshi"&gt;
<?php echo ($binzsjj); ?>

&lt;/select&gt;
&lt;input type="text" name="ly-time" /&gt;
&lt;input type="text" name="ly-liuyan" /&gt;
&lt;input type="submit" value="提交" /&gt;
&lt;/form&gt;
</textarea>
    </div>
    <span class="layui-layer-setwin" id="liuyanpzxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span>
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
function shanchuwz(urldz){
parent.layer.confirm('确定删除？ 删除不能恢复!', {
    btn: ['确认删除','取消操作'],
    shade: false //不显示遮罩
}, function(){
location.href = urldz
}, function(){

});
};
$('#tianjiays').on('click', function(){
$('#tianjiaysnn').show()
});
$('#tianjiaysxx').on('click', function(){
$('#tianjiaysnn').hide()
});
function xiugaiwz(wangzhan_name,wangzhan_id,wangzhan_sort,wangzhan_url,yyid){
$('#fuzhi1').val(wangzhan_name);
$('#fuzhi2').val(wangzhan_id);
$('#fuzhi3').val(wangzhan_sort);
$('#fuzhi4').val(wangzhan_url);
$('#fuzhi5').val(yyid);
$('#xiugaiwznn').show()
};
$('#xiugaiwzxx').on('click', function(){
$('#xiugaiwznn').hide()
});
function liuyanpz(wangzhan_id){
$('#liuyanpznn').show()
$('#fuzhi20').html($('#fuzhi21').html()+'&lt;input type="hidden" name="ly-id" value="'+wangzhan_id+'" /&gt;'+$('#fuzhi22').html());
};
$('#liuyanpzxx').on('click', function(){
$('#liuyanpznn').hide()
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