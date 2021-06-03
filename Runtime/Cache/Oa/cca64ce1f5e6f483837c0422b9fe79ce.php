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
<form action="/index.php/oa/useradmin/system_zh" method="post" id="contact-form">
<div class="col-sm-12">
    <div class="ibox float-e-margins" id="shoujisf1">
        <div class="ibox-title">
            <h5><a class="collapse-link">账号管理 筛查选项</a></h5>
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
                    <span class="input-group-addon"><font color="<?php echo ($yanse2); ?>">所属组</font></span>
                      <select name='role_ID' class='form-control'>
                      <option value=''>请选择</option>
                      <?php if(is_array($quanxianlist)): $i = 0; $__LIST__ = $quanxianlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$role): $mod = ($i % 2 );++$i; if($role["role_ID"] == $dqrole_ID): ?><option value='<?php echo ($role["role_ID"]); ?>' selected="selected"><?php echo ($role["role_name"]); ?></option>
					  <?php else: ?>
					   <option value='<?php echo ($role["role_ID"]); ?>'><?php echo ($role["role_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                      </select>
                    </div>
                </div>
<!--                <div class="col-sm-3">
                    <div class="input-group m-b">
                    <span class="input-group-addon"><font color="<?php echo ($yanse7); ?>">姓名/账号</font></span>
                     <input name="shouji" type="text" value="<?php echo ($serchshouji); ?>" class="form-control"/>
                    </div>
                </div>-->
                <div class="col-sm-3">
                <div class="col-xs-6">
                <input  class="btn btn-primary" name="submit1" type="submit" id="xuanzhongz" value="确定筛选">
                </div>
<!--                <div class="col-xs-6">
                  <div data-toggle="buttons" class="btn-group">
                      <label class="btn btn-sm btn-white <?php echo ($active_tian); ?>" id="option11">
                          <input type="radio" id="option1" name="tian_geshi" value="全部" >全部</label>
                      <label class="btn btn-sm btn-white <?php echo ($active_tian); ?>" id="option11">
                          <input type="radio" id="option1" name="tian_geshi" value="正常" >正常</label>
                      <label class="btn btn-sm btn-white <?php echo ($active_yue); ?>" id="option22">
                          <input type="radio" id="option2" name="tian_geshi" value="停用" <?php echo ($checked_yue); ?>>停用</label>
                  </div>
                </div>-->
                </div>
        </div>
    </div>
</div>
</form>
<div class="col-sm-12">
 <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><a class="collapse-link">账号管理</a></h5>
            <div style="display:inline-block;margin-top:-6px;padding:0;float:left; margin-left:10px;">
            <a class="btn btn-primary btn-xs" id="tianjiazh" style="border-radius:3px 3px 0px 0px; border-bottom:0px;">添加账号</a>
            </div>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-wrench"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content" style="padding-bottom:0px;">

              <table class="table table-striped table-bordered table-hover dataTables-example" >
                  <thead>
                      <tr>
                          <th>姓名</th>
                          <th>账号</th>
                          <th class="hidden-xs">ID</th>
                          <th class="hidden-xs">所属组</th>
                          <th class="hidden-xs">所属门店</th>
                          <th>操作</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                      <td><?php echo ($vo["userchinaname"]); ?></td>
                       <td><?php echo ($vo["username"]); ?></td>
                      <td class="hidden-xs"><?php echo ($vo["user_ID"]); ?></td>
                      <td class="hidden-xs"><?php echo ($vo["role_name"]); ?></td>
                      <td class="hidden-xs"><?php echo ($vo["yy_ID"]); ?></td>
                        <td>
                         <a href="/index.php/oa/useradmin<?php if($vo["user_del"] == 0): ?>/useradmin_stop/
                           <?php else: ?>/useradmin_start/<?php endif; ?>user_ID/<?php echo ($vo["user_ID"]); ?>" class="btn btn-white btn-sm">
                         <?php if($vo["user_del"] == 0): ?>启用中
                           <?php else: ?><font color=red>停用中</font><?php endif; ?>
                          </a>
                          <a title="<?php echo ($vo["user_ID"]); ?>" class="btn btn-white btn-sm" id="xiugaizh">修改</a>
                          <a href="/index.php/oa/useradmin/zh_del/user_ID/<?php echo ($vo["user_ID"]); ?>" class="btn btn-white btn-sm">删除</a>
                         </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
              </table>

        </div>
 </div>
</div>
</div>

<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;" id="tianjiazhnn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index: 19891020; width:310px; height:390px; left:50%; top:50%; margin-top:-195px; margin-left:-155px;">
    <div class="layui-layer-title" style="cursor: move;">账号添加</div>
    <div class="layui-layer-content">
<div class='animated'>
<form action='/index.php/oa/useradmin/zh_insert' method='post' class='form-horizontal'>
<div class='ibox float-e-margins' style='margin-bottom:0px;'>
<div class='ibox-content'>
<div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>登陆账号</span><input class='form-control' name='username' type='text' /></div>
<div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>登陆密码</span><input class='form-control' name='userpsw' type='password'/></div>
<div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>真实姓名</span><input class='form-control' name='userchinaname' type='text' /></div>
<div class='input-group m-b' style='margin-bottom:5px;'><span class='input-group-addon'>手机号码</span><input class='form-control' name='user_shouji' type='text' /></div>
<div class='input-group m-b' style='margin-bottom:5px;'> <span class='input-group-addon'>所属组</span>
<select name='role_ID' class='form-control'>
<option value=''>请选择</option>
<?php if(is_array($quanxianlist)): $i = 0; $__LIST__ = $quanxianlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$role): $mod = ($i % 2 );++$i;?><option value='<?php echo ($role["role_ID"]); ?>'><?php echo ($role["role_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
</div>
<div class="input-group m-b" style="margin-bottom:5px;">
                 <span class="input-group-addon">工作日志</span>
                    <select name="user_rizhi" class="form-control">
                      <option value="0">正常使用</option>
                      <option value="1">无需添加</option>
                    </select>
               </div>
<div class='form-group' style='margin-bottom:5px; padding-left:10px; padding-right:5px;'>
<?php if(is_array($yiyuanlist)): $i = 0; $__LIST__ = $yiyuanlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$yiyuan): $mod = ($i % 2 );++$i;?><label class='checkbox-inline f-label'><input type='checkbox' name='yy_ID[]' value='<?php echo ($yiyuan["yy_ID"]); ?>'><?php echo ($yiyuan["yy_name"]); ?>&nbsp;&nbsp;</label><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div class='form-group' align='center' style='margin-bottom:5px;'><button class='btn btn-primary' type='submit' name='submit_addhuifang'>确定保存</button></div>
</div>
</div>
</form>
</div>
    </div>
<span class="layui-layer-setwin" id="tianjiazhxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span>
  </div>
</div>

 <!-- 全局js --> 
<script src="<?php echo (JS_URL); ?>/jquery.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script> 
<!-- 自定义js --> 
<script src="<?php echo (JS_URL); ?>/content.min.js?v=1.0.0"></script>
<!-- layerjs --> 
<script src="<?php echo (JS_URL); ?>/plugins/layer/layer.min.js"></script>
<!-- Data Tables -->
<link href="<?php echo (CSS_URL); ?>/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<script src="<?php echo (JS_URL); ?>/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo (JS_URL); ?>/plugins/dataTables/dataTables.bootstrap.js"></script>
<!--二级联动-->
<script type="text/javascript">
$(document).ready(function() {
$('#tianjiazh').on('click', function(){
$('#tianjiazhnn').show()
});
$('#tianjiazhxx').on('click', function(){
$('#tianjiazhnn').hide()
});

$('[id=xiugaizh]').on('click', function(zhid){
var title=$(zhid.target).attr("title");
parent.layer.open({
    type: 2,
    title: '账号修改',
    shadeClose: true,
    shade: 0.8,
    area: ['310px', '390px'],
    content: '/index.php/oa/useradmin/system_zhxg/userid/'+title //iframe url
}); 
});
$(".dataTables-example").dataTable({pageLength:25,stateSave: true});  //表格排序
$('.btn-primary').click(function () {  //筛选等待
  var $btn = $(this);
  $btn.button('loading');
    setTimeout(function(){
      $btn.button('reset');
  }, 2000);
});
});
</script>
</body>
</html>