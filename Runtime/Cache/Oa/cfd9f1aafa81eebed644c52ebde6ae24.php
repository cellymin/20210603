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
<link href="<?php echo (CSS_URL); ?>/plugins/summernote/summernote.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/plugins/summernote/summernote-bs3.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/style.min.css?v=3.2.0" rel="stylesheet">
</head>
<body  class="gray-bg">

          <div class="col-sm-12">
          <div class="ibox-content">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>次数</th>
                  <th>回访类型</th>
                  <th>回访时间</th>
                  <th>回访主题</th>
                  <th>回访计划</th>
                 
                </tr>
              </thead>
              <tbody>
                <?php if(is_array($huifangxinxi)): $i = 0; $__LIST__ = $huifangxinxi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                    <td>第<?php echo ($cishu--); ?>次</td>
                    <td><?php echo ($data["hf_fangshi"]); ?></td>
                    <td><?php echo ($data["hf_time"]); ?></td>
                    <td><?php echo ($data["hf_zhuti"]); ?></td>
                    <?php if($data["hfjh_ID"] == ''): ?><td></td>
                      <?php else: ?>
                      <td>计划内回访</td><?php endif; ?>
                    </tr>
                    <tr>
                    <td colspan="5"><?php echo ($data["hf_content"]); ?></td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
          </div>
          </div>

 <!-- 全局js --> 
<script src="<?php echo (JS_URL); ?>/jquery.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script> 
<!-- 自定义js --> 
<script src="<?php echo (JS_URL); ?>/content.min.js?v=1.0.0"></script>
    <!-- Prettyfile -->
    <script src="<?php echo (JS_URL); ?>/plugins/prettyfile/bootstrap-prettyfile.js"></script>
    <script>
$( 'input[type="file"]' ).prettyFile();
    </script>
    <!-- SUMMERNOTE -->
    <script src="<?php echo (JS_URL); ?>/plugins/summernote/summernote.min.js"></script>
    <script src="<?php echo (JS_URL); ?>/plugins/summernote/summernote-zh-CN.js"></script>
    <script>
        $(document).ready(function(){$(".summernote").summernote({lang:"zh-CN"})});var edit=function(){$("#eg").addClass("no-padding");$(".click2edit").summernote({lang:"zh-CN",focus:true})};var save=function(){$("#eg").removeClass("no-padding");var a=$(".click2edit").code();$(".click2edit").destroy()};
    </script>
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
    </script>
</body>
</html>