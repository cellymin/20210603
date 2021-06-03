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
<body oncopy="alert('你想干啥，在我的眼皮底下复制，没有经我同意禁止复制！');return false;" class="gray-bg">
<div class="wrapper wrapper-content animated fadeInUp">
<div class="col-sm-12">
 <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><a class="collapse-link">权限组设置</a></h5>
            <div style="display:inline-block;margin-top:-6px;padding:0;float:left; margin-left:10px;">
            <a class="btn btn-primary btn-xs" id="tianjiaqxz" style="border-radius:3px 3px 0px 0px; border-bottom:0px;">添加权限组</a>
            </div>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-wrench"></i>
                </a>
            </div>
        </div>
        <form method="post" action="/index.php/oa/role/bz_submit">
        <div class="ibox-content" style="padding-bottom:0px;">
              <table class="table table-striped table-hover">
                  <thead>
                      <tr>
                          <th class="hidden-xs">ID</th>
                          <th>权限组</th>
                          <th>属性</th>
                          <th class="hidden-xs">排序</th>
                          <th>操作</th>
                      </tr>
                  </thead>
                  <tbody>
  <tr>
    <td class="hidden-xs">0</td>
    <td>系统</td>
	<td>
	<?php if($vo[role_xitongmoren] == 0){ echo '系统默认组'; } else{ echo '自定义组'; } ?>
	</td>
     <td class="hidden-xs">0</td>
    <td>
     <a class="btn btn-white btn-sm neianb" href="javascript:shezhibmd()">访问IP白名单设置</a>
     <a class="btn btn-white btn-sm neianb" href="javascript:shezhiyz()">手机登陆验证设置</a>
    </td>
  </tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td class="hidden-xs"><?php echo ($i); ?></td>
    <td><?php echo ($vo["role_name"]); ?></td>
	<td>
	<?php if($vo[role_xitongmoren] == 0){ echo '系统默认组'; } else{ echo '自定义组'; } ?>
	</td>
     <td class="hidden-xs"><?php echo ($vo["role_sort"]); ?></td>
    <td>
     <a class="btn btn-white btn-sm neianb" href="javascript:shezhiqxz('<?php echo ($vo["role_ID"]); ?>','<?php echo ($vo["role_name"]); ?>')">权限设置</a>
	<?php if($vo[role_xitongmoren] == 0){ } else{ ?>
	 <a class="btn btn-white btn-sm neianb" href="/index.php/oa/role<?php if($vo["role_del"] == 0): ?>/role_stop/<?php else: ?>/role_start/<?php endif; ?>ID/<?php echo ($vo["role_ID"]); ?>" title="<?php if($vo["role_del"] == 0): ?>停用<?php else: ?>启用<?php endif; ?>"><?php if($vo["role_del"] == 0): ?>启用中<?php else: ?><font color=red>停用中</font><?php endif; ?></a>
     <a class="btn btn-white btn-sm neianb" href="javascript:xiugaiqxz('<?php echo ($vo["role_name"]); ?>','<?php echo ($vo["role_ID"]); ?>','<?php echo ($vo["role_sort"]); ?>')">修改</a>
     <a class="btn btn-white btn-sm neianb" href="javascript:shanchuqx('/index.php/oa/role/role_del/ID/<?php echo ($vo["role_ID"]); ?>')">删除</a>
		<?php } ?>
    </td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
              </table>
        </div>
      </form>
 </div>
</div>
</div>

<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;" id="tianjiaqxznn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index: 19891020; width:310px; height:260px; left:50%; margin-left:-155px;">
    <div class="layui-layer-title" style="cursor: move;">添加权限组</div>
    <div class="layui-layer-content">
<div class='animated'>
  <form action='/index.php/oa/role/role_insert' method='post' class='form-horizontal'>
    <div class='ibox float-e-margins' style='margin-bottom:0px;'>
      <div class='ibox-content'>
        <div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>权限组名</span>
          <input class='form-control' name='role_name' type='text' />
        </div>
        <div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>排序</span>
          <input class='form-control' name='role_sort' type='text'/>
        </div>
        <div class='form-group' align='center' style='margin-bottom:5px;'>
          <button class='btn btn-primary' type='submit' name='submit_addhuifang'>确定添加</button>
        </div>
      </div>
    </div>
  </form>
</div>
    </div>
<span class="layui-layer-setwin" id="tianjiaqxzxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span>
  </div>
</div>

<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;" id="xiugaiqxznn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index: 19891020; width:310px; height:260px; left:50%; margin-left:-155px;">
    <div class="layui-layer-title" style="cursor: move;">修改权限组</div>
    <div class="layui-layer-content">
<div class='animated'>
  <form action='/index.php/oa/role/role_update' method='post' class='form-horizontal'>
    <div class='ibox float-e-margins' style='margin-bottom:0px;'>
      <div class='ibox-content'>
        <div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>来源名</span>
          <input class='form-control' name='role_name' type='text' value='' id='fuzhi11'/>
        </div>
        <div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>排序</span>
          <input class='form-control' name='role_sort' type='text' value='' id='fuzhi13'/>
          <input type='hidden' name='role_ID' id='fuzhi12' value=''>
        </div>
        <div class='form-group' align='center' style='margin-bottom:5px;'>
          <button class='btn btn-primary' type='submit' name='submit_addhuifang'>确定修改</button>
        </div>
      </div>
    </div>
  </form>
</div>
    </div>
<span class="layui-layer-setwin" id="xiugaiqxzxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span>
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
function shanchuqx(urldz){
parent.layer.confirm('确定删除？ 删除不能恢复!', {
    btn: ['确认删除','取消操作'], 
    shade: false //不显示遮罩
}, function(){
location.href = urldz
}, function(){

});
};
$('#tianjiaqxz').on('click', function(){
$('#tianjiaqxznn').show();
});
$('#tianjiaqxzxx').on('click', function(){
$('#tianjiaqxznn').hide();
});
function xiugaiqxz(role_name,role_id,role_sort){
$('#fuzhi11').val(role_name);
$('#fuzhi12').val(role_id);
$('#fuzhi13').val(role_sort);
$('#xiugaiqxznn').show();
};
$('#xiugaiqxzxx').on('click', function(){
$('#xiugaiqxznn').hide();
});
function shezhiqxz(role_id,role_name){
parent.layer.open({
    type: 2,
    title: role_name+' - 权限信息修改',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '<?php echo (DQURL); ?>Role/system_roleZu/roleID/'+role_id //iframe url
});
};
function shezhibmd(){
parent.layer.open({
    type: 2,
    title: '登陆白名单修改',
    shadeClose: true,
    shade: 0.8,
    area: ['315px', '405px'],
    content: '<?php echo (DQURL); ?>Role/system_allowip' //iframe url
});
};
function shezhiyz(){
parent.layer.open({
    type: 2,
    title: '登陆手机验证修改',
    shadeClose: true,
    shade: 0.8,
    area: ['315px', '286px'],
    content: '<?php echo (DQURL); ?>Role/system_shouji' //iframe url
});
};
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