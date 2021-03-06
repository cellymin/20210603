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
<link href="<?php echo (CSS_URL); ?>/plugins/summernote/summernote.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/plugins/summernote/summernote-bs3.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/style.min.css?v=3.2.0" rel="stylesheet">
</head>
<body  class="gray-bg">

          <div class="col-sm-12">
        
          <div class="ibox float-e-margins">
            <div class="ibox-content">
              <div class="form-group">
                <label>患者姓名</label>
                <div>
                  <input class="form-control" value="<?php echo ($huanzeName); ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label>联系电话</label>
                <div>
                  <input class="form-control" value="<?php echo ($shouji); ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label>预约时间</label>
                <div>
                  <input class="form-control" value="<?php echo (substr($yuyueTime,0,16)); ?>" placeholder="YYYY-MM-DD hh:mm" readonly>
                </div>
              </div>
              <form action="/index.php/oa/updatezixun/huifangjihua_insert" method="post" id="contact-formm" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-12">计划下次回访时间</label>
                  <div class="col-sm-12">
                    <input class="form-control layer-date" placeholder="YYYY-MM-DD hh:mm" value="<?php echo ($daozhentime); ?>" name="hfjh_time" id="today2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-12">计划下次回访主题</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="hfjh_zhuti" id="zhuti">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="hidden" name="zx_ID" value="<?php echo ($_GET['zx_ID']); ?>">
                    <input type="hidden" name="yy_ID" value="<?php echo ($yy_ID); ?>">
                    <input type="hidden" name="user_ID" value="<?php echo ($user_ID); ?>">
                    <input type="hidden" name="URLcs" value="<?php echo ($dqURLcanshu); ?>">
                    <input type="hidden" name="MAX_FILE_SIZE" value="500000000">
                    <button class="btn btn-primary" type="submit" value="确定" name="submit_addhuifang">确认添加</button>
                  </div>
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
    <!-- layerDate plugin javascript -->
    <script src="<?php echo (JS_URL); ?>/plugins/layer/laydate/laydate.js"></script>
    <script>
var today2 = {
    elem: '#today2',
    format: 'YYYY-MM-DD hh:mm',
    min: laydate.now(),
    istime: true,
    istoday: true
};
laydate(today2);
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