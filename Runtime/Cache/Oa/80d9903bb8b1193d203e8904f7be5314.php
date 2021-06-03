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
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInUp">
<div class="col-sm-12">
 <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><a class="collapse-link"><?php echo ($yiyuanName); ?> - 门店个性化设置</a></h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-wrench"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content" style="padding-bottom:0px;">
              <table class="table table-striped table-hover">
                  <thead>
                      <tr>
                          <th class="hidden-xs">序号</th>
                          <th>设置选项</th>
                          <th>状态</th>
                          <th class="hidden-xs">有效范围</th>
                          <th>操作</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                      <td class="hidden-xs"><?php echo ($vo["qj_ID"]); ?></td>
                      <td><?php echo ($vo["qj_name"]); ?></td>
                      <td><?php if($vo["qj_del"] == 1): ?><span class="badge badge-info neiana">否</span><?php else: ?><span class="badge badge-warning neiana">是</span><?php endif; ?></td>
                      <td class="hidden-xs"><?php echo ($vo["qj_youxiao"]); ?></td>
                      <td>
	 <a href="/index.php/oa/role/system_qj_update/ID/<?php echo ($vo["qj_ID"]); ?>/zhuangtai/0/yyid/<?php echo ($_GET['yyid']); ?>" class="btn btn-white btn-sm neiana">√是</a>
	 <a href="/index.php/oa/role/system_qj_update/ID/<?php echo ($vo["qj_ID"]); ?>/zhuangtai/1/yyid/<?php echo ($_GET['yyid']); ?>" class="btn btn-white btn-sm neiana">×否</a>
                      </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
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

</body>
</html>