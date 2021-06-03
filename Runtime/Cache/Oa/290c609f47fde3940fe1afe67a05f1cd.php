<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<title>苗医生CRM网络管理系统</title>
<link href="<?php echo (CSS_URL); ?>/bootstrap.min.css?v=3.3.5" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/animate.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/plugins/iCheck/custom.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/style.min.css?v=3.2.0" rel="stylesheet">
</head>
<body  class="gray-bg">
<div class="animated fadeInUp">
<form action="/index.php/oa/useradmin/zh_update" method="post" class="form-horizontal">
  <div class="ibox float-e-margins" style="margin-bottom:0px;">
      <div class="ibox-content">
           <div class="input-group m-b" style="margin-bottom:5px;">
            <span class="input-group-addon">登陆账号</span>
            <input class="form-control" name="username" type="text" value="<?php echo ($userinfo[0]['username']); ?>" readonly />
           </div>
           <div class="input-group m-b" style="margin-bottom:5px;">
             <span class="input-group-addon">登陆密码</span>
              <input class="form-control" name="userpsw" type="password" value="****" />
           </div>
           <div class="input-group m-b" style="margin-bottom:5px;">
             <span class="input-group-addon">真实姓名</span>
              <input class="form-control" name="userchinaname" value="<?php echo ($userinfo[0]['userchinaname']); ?>" type="text" />
           </div>
           <div class="input-group m-b" style="margin-bottom:5px;">
             <span class="input-group-addon">手机号码</span>
              <input class="form-control" name="user_shouji" value="<?php echo ($userinfo[0]['user_shouji']); ?>" type="text" />
           </div>
           <?php if($_SESSION['user_role']== 1): ?><div class="input-group m-b" style="margin-bottom:5px;">
                 <span class="input-group-addon">所属组</span>
                    <select name="role_ID" class="form-control">
                      <option value="">请选择</option>
                      <?php if(is_array($quanxianlist)): $i = 0; $__LIST__ = $quanxianlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$role): $mod = ($i % 2 );++$i; if( $userinfo_qxz == $role["role_ID"] ): ?><option value="<?php echo ($role["role_ID"]); ?>" selected="selected"><?php echo ($role["role_name"]); ?></option>
                      <?php else: ?>
                      <option value="<?php echo ($role["role_ID"]); ?>"><?php echo ($role["role_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
               </div>
               
               <div class="input-group m-b" style="margin-bottom:5px;">
                 <span class="input-group-addon">工作日志</span>
                    <select name="user_rizhi" class="form-control">
                      <option value="0" <?php echo ($selectYES); ?>>正常使用</option>
                      <option value="1" <?php echo ($selectNO); ?>>无需添加</option>
                    </select>
               </div>
               
               <div class="form-group" style="margin-bottom:5px; padding-left:10px; padding-right:5px;">
                   <?php if(is_array($yiyuanlist)): $i = 0; $__LIST__ = $yiyuanlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$yiyuan): $mod = ($i % 2 );++$i;?><label class="checkbox-inline f-label"><input type="checkbox" name='yy_ID[]' <?php echo ($yiyuan["checked"]); ?> value="<?php echo ($yiyuan["yy_ID"]); ?>"><?php echo ($yiyuan["yy_name"]); ?>&nbsp;&nbsp;</label><?php endforeach; endif; else: echo "" ;endif; ?>
               </div>
          <?php else: ?>
                   <div class="input-group m-b" style="margin-bottom:5px; display:none">
                     <span class="input-group-addon">所属组</span>
                        <select name="role_ID" class="form-control">
                          <option value="">请选择</option>
                          <?php if(is_array($quanxianlist)): $i = 0; $__LIST__ = $quanxianlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$role): $mod = ($i % 2 );++$i; if( $userinfo_qxz == $role["role_ID"] ): ?><option value="<?php echo ($role["role_ID"]); ?>" selected="selected"><?php echo ($role["role_name"]); ?></option>
                          <?php else: ?>
                          <option value="<?php echo ($role["role_ID"]); ?>"><?php echo ($role["role_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                   </div>
				    <div class="input-group m-b" style="margin-bottom:5px; display:none">
						 <span class="input-group-addon">工作日志</span>
							<select name="user_rizhi" class="form-control">
							  <option value="0" <?php echo ($selectYES); ?>>正常使用</option>
							  <option value="1" <?php echo ($selectNO); ?>>无需添加</option>
							</select>
                   </div>
                   <div class="form-group" style="margin-bottom:5px; padding-left:10px; padding-right:5px; display:none">
                       <?php if(is_array($yiyuanlist)): $i = 0; $__LIST__ = $yiyuanlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$yiyuan): $mod = ($i % 2 );++$i;?><label class="checkbox-inline f-label"><input type="checkbox" name='yy_ID[]' <?php echo ($yiyuan["checked"]); ?> value="<?php echo ($yiyuan["yy_ID"]); ?>"><?php echo ($yiyuan["yy_name"]); ?>&nbsp;&nbsp;</label><?php endforeach; endif; else: echo "" ;endif; ?>
                   </div><?php endif; ?>
           <div class="form-group" align="center" style="margin-bottom:5px;">
     <button class="btn btn-primary" type="submit" name="submit_addhuifang">确定修改</button>
           </div>
      </div>
  </div>
</form>
</div> 
<!-- 全局js -->
<script src="<?php echo (JS_URL); ?>/jquery.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script> 
<!-- iCheck -->
<script src="<?php echo (JS_URL); ?>/plugins/iCheck/icheck.min.js"></script>
<script>
$(document).ready(function () {
	$('.i-checks').iCheck({
		checkboxClass: 'icheckbox_square-green',
		radioClass: 'iradio_square-green',
	});
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