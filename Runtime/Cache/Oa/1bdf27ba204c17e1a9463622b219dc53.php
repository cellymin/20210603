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
        <h5><a class="collapse-link"><?php echo ($yyname); ?>-月到诊目标设置</a></h5>
        <div class="ibox-tools"> <a class="collapse-link"> <i class="fa fa-wrench"></i> </a> </div>
      </div>
      <form method="post" action="/index.php/oa/system_site/system_yuemubiao">
        <div class="ibox-content" style="padding-bottom:0px;">
          <table class="table table-striped table-hover">
            <tbody>
              <tr>
                <td>到诊目标</td>
                <td><input type="text" class="form-control" name="yy_daozhenmubiao" value="<?php echo ($yy_daozhenmubiao); ?>"></td>
              </tr>
              <tr>
                <td colspan="2">
                <input type="hidden" name="yyid" value="<?php echo ($yyid); ?>">
                  <input type="submit" name="submit1" value='确认' class="btn btn-primary">
                 </td>
              </tr>
            </tbody>
          </table>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- 全局js --> 
<script src="<?php echo (JS_URL); ?>/jquery.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script> 
<!-- 自定义js --> 
<script src="<?php echo (JS_URL); ?>/content.min.js?v=1.0.0"></script>
<script type="text/javascript">
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