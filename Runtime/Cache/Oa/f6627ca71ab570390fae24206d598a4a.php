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
            <h5><a class="collapse-link"><?php echo ($yiyuanname); ?> - 开展项目</a></h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-wrench"></i>
                </a>
            </div>
        </div>
        <form method="post" action="/index.php/oa/system_site/yybz_insert">
        <div class="ibox-content" style="padding-bottom:0px;">
              <table class="table table-striped table-hover">
                  <thead>
                      <tr>
                          <th>选择</th>
                          <th class="hidden-xs">ID</th>
                          <th>名称</th>
                      </tr>
                  </thead>
                  <tbody>
<?php echo (column_down_x1($StartColumnID,$column_level,$yyid)); ?> 
                        <tr>
                            <td colspan="3">
                             <div class="checkbox-inline f-label">
                             <input id="checkAll" type="checkbox">
                             <label for="checkAll">全选</label>
                             </div>
                            <input type="hidden" name="yyid" value="<?php echo ($yyid); ?>"><input type="submit" name="submit1" class="btn btn-primary" value="确定保存">
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
<!-- layerjs --> 
<script src="<?php echo (JS_URL); ?>/plugins/layer/layer.min.js"></script>


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