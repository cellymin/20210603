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
            <h5><a class="collapse-link">病种管理</a></h5>
            <div style="display:inline-block;margin-top:-6px;padding:0;float:left; margin-left:10px;">
            <a class="btn btn-primary btn-xs" id="tianjiabz" style="border-radius:3px 3px 0px 0px; border-bottom:0px;">批量添加病种</a>
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
                          <th class="hidden-xs">选择</th>
                          <th class="hidden-xs">ID</th>
                          <th>名称</th>
                          <th class="hidden-xs">排序</th>
                          <th>操作</th>
                      </tr>
                  </thead>
                  <tbody>
<?php echo (column_down_x($StartColumnID)); ?>
                        <tr>
                            <td colspan="5">
                             <div class="checkbox-inline f-label hidden-xs">
                             <input id="checkAll" type="checkbox">
                             <label for="checkAll">全选</label>
                             </div>
          <input type="submit" name="submit_del" class="btn btn-white btn-sm" value="删除" />
          <input type="submit" name="submit_stop" class="btn btn-white btn-sm" value="禁用" />
          <input type="submit" name="submit_go" class="btn btn-white btn-sm" value="启动" />
          <input type="submit" name="submit_save" class="btn btn-white btn-sm" value="全部保存" />

          <input type="submit" name="submit_yidong" class="btn btn-white btn-sm hidden-xs" value="移动" style="float:right; margin-left:5px; margin-right:5px;"/>
          <select name="yidong" class="form-control hidden-xs" style="width:180px;float:right">
          <option value="0,0">---顶级---</option>
           <?php echo (column_down_e($StartColumnID)); ?>
          </select>
                            </td>
                        </tr>
                  </tbody>
              </table>
        </div>
      </form>
 </div>
</div>
</div>

<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;" id="tianjiabznn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index: 19891020; width:310px; height:260px; left:50%; margin-left:-155px;">
    <div class="layui-layer-title" style="cursor: move;">添加病种</div>
    <div class="layui-layer-content">
<div class='animated'><form action='/index.php/oa/system_site/bz_insert' method='post' class='form-horizontal'><div class='ibox float-e-margins' style='margin-bottom:0px;'><div class='ibox-content'><div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>上级类</span><select name='P_id' class='form-control'><option value='0,0'>---顶级---</option><?php echo (column_down_e($StartColumnID)); ?></select></div><div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>添加类</span><input class='form-control' type='text' name='bz_name'/></div><div class='input-group'>添加多个类请用,号隔开（类1,类2,类3）</div><div class='form-group' align='center' style='margin-top:5px;'><button class='btn btn-primary' type='submit' name='submit_addhuifang'>确定添加</button></div></div></div></form></div>    </div>
    <span class="layui-layer-setwin" id="tianjiabzxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span> </div>
</div>

<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;" id="tianjiazbznn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index: 19891020; width:310px; height:260px; left:50%; margin-left:-155px;">
    <div class="layui-layer-title" style="cursor: move;">添加子病种</div>
    <div class="layui-layer-content">
<div class='animated'><form action='/index.php/oa/system_site/bz_insert' method='post' class='form-horizontal'><div class='ibox float-e-margins' style='margin-bottom:0px;'><div class='ibox-content'><div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>上级类</span><select name='P_id' class='form-control' id='fuzhi1'></select></div><div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>添加类</span><input class='form-control' type='text' name='bz_name'/></div><div class='input-group'>添加多个类请用,号隔开（类1,类2,类3）</div><div class='form-group' align='center' style='margin-top:5px;'><button class='btn btn-primary' type='submit' name='submit_addhuifang'>确定添加</button></div></div></div></form></div>
    </div>
    <span class="layui-layer-setwin" id="tianjiazbzxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span> </div>
</div>

 <!-- 全局js --> 
<script src="<?php echo (JS_URL); ?>/jquery.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script> 
<!-- 自定义js --> 
<script src="<?php echo (JS_URL); ?>/content.min.js?v=1.0.0"></script>
<!-- layerjs --> 
<script src="<?php echo (JS_URL); ?>/plugins/layer/layer.min.js"></script>
<script>
$('#tianjiabz').on('click', function(){
$('#tianjiabznn').show()
});
$('#tianjiabzxx').on('click', function(){
$('#tianjiabznn').hide()
});
function tianjiazbz(bz_name,bz_id,bz_level){
var selectid=document.getElementById("fuzhi1");
    selectid[0]=new Option(bz_name,bz_id);
$('#tianjiazbznn').show()
};
$('#tianjiazbzxx').on('click', function(){
$('#tianjiazbznn').hide()
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