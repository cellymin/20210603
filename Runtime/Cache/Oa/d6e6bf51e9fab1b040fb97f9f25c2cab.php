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
            <h5><a class="collapse-link">门店管理</a></h5>
            <div style="display:inline-block;margin-top:-6px;padding:0;float:left; margin-left:10px;">
            <a class="btn btn-primary btn-xs" id="tianjiayy" style="border-radius:3px 3px 0px 0px; border-bottom:0px;">添加门店</a>
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
                          <th>门店名</th>
                          <th>门店信息管理</th>
                          <th class="hidden-xs">排序</th>
                          <th>操作</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                      <td class="hidden-xs"><?php echo ($vo["yy_ID"]); ?></td>
                      <td><?php echo ($vo["yy_name"]); ?></td>
                      <td>
     <a onClick="javascript:szyyys('<?php echo ($vo["yy_ID"]); ?>')"><span class="badge badge-info neian">设置门店医生</span></a>
     <a onClick="javascript:szyywz('<?php echo ($vo["yy_ID"]); ?>')"><span class="badge badge-info neian">设置门店网站</span></a>
     <a onClick="javascript:szxxly('<?php echo ($vo["yy_ID"]); ?>')"><span class="badge badge-warning neian">选择门店信息来源</span></a>
     <a onClick="javascript:xzyybz('<?php echo ($vo["yy_ID"]); ?>')"><span class="badge badge-warning neian">选择门店病种</span></a>
     <a onClick="javascript:xzzxfs('<?php echo ($vo["yy_ID"]); ?>')"><span class="badge badge-warning neian">选择门店咨询方式</span></a>
     <!-- <a onClick="javascript:dxfssz('<?php echo ($vo["yy_ID"]); ?>')"><span class="badge badge-warning neian">短信发送设置</span></a>
     <a onClick="javascript:baidu('<?php echo ($vo["yy_ID"]); ?>')"><span class="badge badge-info neian">百度账户设置</span></a> -->
	 <a onClick="javascript:swt('<?php echo ($vo["yy_ID"]); ?>')"><span class="badge badge-warning neian">商务通导入</span></a>
	 <a onClick="javascript:yuemubiao('<?php echo ($vo["yy_ID"]); ?>')"><span class="badge badge-warning neian">月到诊目标设置</span></a>
     <a onClick="javascript:gxhsz('<?php echo ($vo["yy_ID"]); ?>','<?php echo ($vo["yy_name"]); ?>')"><span class="badge badge-info neian">门店个性化设置</span></a>
                      </td>
                      <td class="hidden-xs"><?php echo ($vo["yy_sort"]); ?></td>
                        <td>
     <a href="/index.php/oa/system_site/system_yy_stop/ID/<?php echo ($vo["yy_ID"]); ?>" title="<?php if($vo["yy_del"] == 0): ?>停用<?php else: ?>启用<?php endif; ?>" class="btn btn-white btn-sm neiana"></if><?php if($vo["yy_del"] == 0): ?>启用中<?php else: ?><font color=red>停用中</font><?php endif; ?></a>
     <a href="javascript:xiugaiyy('<?php echo ($vo["yy_name"]); ?>','<?php echo ($vo["yy_ID"]); ?>','<?php echo ($vo["yy_sort"]); ?>')" class="btn btn-white btn-sm neiana">修改</a>
     <a href="javascript:shanchuyy('/index.php/oa/system_site/system_yy_del/ID/<?php echo ($vo["yy_ID"]); ?>')" class="btn btn-white btn-sm neiana">删除</a>
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

<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;" id="tianjiayynn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index: 19891020; width:310px; height:250px; left:50%; margin-left:-155px;">
    <div class="layui-layer-title" style="cursor: move;">添加门店</div>
    <div class="layui-layer-content">
<div class="animated">
  <form action="/index.php/oa/system_site/yy_insert" method="post" class="form-horizontal">
    <div class="ibox float-e-margins" style="margin-bottom:0px;">
      <div class="ibox-content">
        <div class="input-group m-b" style="margin-bottom:5px;"><span class="input-group-addon">门店名</span>
          <input class="form-control" name="yy_name" type="text" />
        </div>
        <div class="form-group" align="center" style="margin-bottom:5px;">
          <button class="btn btn-primary" type="submit" name="submit_addhuifang">确定保存</button>
        </div>
      </div>
    </div>
  </form>
</div>
    </div>
    <span class="layui-layer-setwin" id="tianjiayyxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span>
  </div>
</div>

<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;" id="xiugaiyynn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index: 19891020; width:310px; height:250px; left:50%; margin-left:-155px;">
    <div class="layui-layer-title" style="cursor: move;">修改门店</div>
    <div class="layui-layer-content">
<div class="animated">
  <form action="/index.php/oa/system_site/yy_update" method="post" class="form-horizontal">
    <div class="ibox float-e-margins" style="margin-bottom:0px;">
      <div class="ibox-content">
        <div class="input-group m-b" style="margin-bottom:5px;"><span class="input-group-addon">门店名</span>
          <input class="form-control" name="yy_name" type="text" id="fuzhi1" value=""/>
        </div>
        <div class="input-group m-b" style="margin-bottom:5px;"><span class="input-group-addon">排序</span>
          <input class="form-control" name="yy_sort" type="text" id="fuzhi3" value=""/>
          <input type="hidden" name="yy_ID" id="fuzhi2" value=""/>
        </div>
        <div class="form-group" align="center" style="margin-bottom:5px;">
          <button class="btn btn-primary" type="submit" name="submit_addhuifang">确定修改</button>
        </div>
      </div>
    </div>
  </form>
</div>
    </div>
    <span class="layui-layer-setwin" id="xiugaiyyxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span>
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
function shanchuyy(urldz){
parent.layer.confirm('确定删除？ 删除不能恢复!', {
    btn: ['确认删除','取消操作'], 
    shade: false //不显示遮罩
}, function(){
location.href = urldz
}, function(){

});
};
$('#tianjiayy').on('click', function(){
$('#tianjiayynn').show()
});
$('#tianjiayyxx').on('click', function(){
$('#tianjiayynn').hide()
});
function xiugaiyy(yiyuan_name,yiyuan_id,yiyuan_paixu){
$('#fuzhi1').val(yiyuan_name);
$('#fuzhi2').val(yiyuan_id);
$('#fuzhi3').val(yiyuan_paixu);
$('#xiugaiyynn').show()
};
$('#xiugaiyyxx').on('click', function(){
$('#xiugaiyynn').hide()
});
function szyyys(yy_id){
parent.layer.open({
    type: 2,
    title: '设置医生',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '/index.php/oa/system_site/system_yydoctor/yyid/'+yy_id //iframe url
}); 
};
function szyywz(yy_id){
parent.layer.open({
    type: 2,
    title: '设置网站',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '/index.php/oa/system_site/system_yywangzhan/yyid/'+yy_id //iframe url
}); 
};
function szxxly(yy_id){
parent.layer.open({
    type: 2,
    title: '信息来源',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '/index.php/oa/system_site/system_yyxinxi/yyid/'+yy_id //iframe url
}); 
};
function xzyybz(yy_id){
parent.layer.open({
    type: 2,
    title: '选择病种',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '/index.php/oa/system_site/system_yybz/yyid/'+yy_id //iframe url
}); 
};
function xzzxfs(yy_id){
parent.layer.open({
    type: 2,
    title: '选择咨询方式',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '/index.php/oa/system_site/system_yyzxfs/yyid/'+yy_id //iframe url
}); 
};
function dxfssz(yy_id){
parent.layer.open({
    type: 2,
    title: '短信发送设置',
    shadeClose: true,
    shade: 0.8,
    area: ['310px', '400px'],
    content: '/index.php/oa/system_site/system_duanxin/yyid/'+yy_id //iframe url
}); 
};
function yuemubiao(yy_id){
parent.layer.open({
    type: 2,
    title: '月到诊目标设置',
    shadeClose: true,
    shade: 0.8,
    area: ['310px', '300px'],
    content: '/index.php/oa/system_site/system_yuemubiao/yyid/'+yy_id //iframe url
}); 
};
function baidu(yy_id){
parent.layer.open({
    type: 2,
    title: '百度推广账户设置',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '/index.php/oa/system_site/system_baidu/yyid/'+yy_id //iframe url
}); 
};
function swt(yy_id){
parent.layer.open({
    type: 2,
    title: '商务通对话Excle导入',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '/index.php/oa/system_site/system_swt/yyid/'+yy_id //iframe url
}); 
};
function gxhsz(yy_id,yy_name){
parent.layer.open({
    type: 2,
    title: '个性化设置',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '<?php echo (DQURL); ?>Role/system_qj/yyid/'+yy_id //iframe url
}); 
};

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