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

<form action="/index.php/oa/updatezixun/huifang_insert" method="post" id="contact-formm" enctype="multipart/form-data">

                    <div class="ibox-content">
                         <div class="form-group">
                           <label class="col-sm-12">患者姓名</label>
                            <div class="col-sm-12">
                             <input class="form-control" value="<?php echo ($huanzeName); ?>" readonly>
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">联系电话</label>
                            <div class="col-sm-12">
                             <input class="form-control" value="<?php echo ($shouji); ?>" readonly>
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">预约时间</label>
                            <div class="col-sm-12">
                             <input class="form-control" value="<?php echo ($yuyueTime); ?>" placeholder="YYYY-MM-DD hh:mm" readonly>
                            </div>
                         </div>
                         
                         <div class="form-group">
                           <label class="col-sm-12">回访时间</label>
                            <div class="col-sm-12">
                             <input class="form-control layer-date"  placeholder="YYYY-MM-DD hh:mm" value="<?php echo ($huifangtime); ?>" name="hf_time" <?php echo ($quanju_hfsj); ?>>
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">回访方式</label>
                            <div class="col-sm-12">
                             <select class="form-control" name="hf_fangshi" >
                               <option value="电话">电话</option>
                               <option value="短信">短信</option>
                               <option value="QQ">QQ</option>
                               <option value="微信">微信</option>
                               <option value="其他">其他</option>
                             </select>
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">回访主题</label>
                            <div class="col-sm-12">
                             <input type="text" class="form-control" name="hf_zhuti" id="zhuti">
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="col-sm-12">
                             <div class="ibox-content no-padding">
                             <textarea class="summernote" name="hf_content" id="editor"></textarea>
                             </div>
                             <input type="file" class="form-control" name="fujian" id="File1" style="border-top:0px">
                            </div>
                         </div>
                         <div class="hr-line-dashed"></div>
                          <div class="form-group">
                           <label class="col-sm-12">设置下次回访时间</label>
                            <div class="col-sm-12">
                             <input class="form-control layer-date" placeholder="YYYY-MM-DD hh:mm" value="" name="hfjh_time" id="today3">
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">下次回访主题</label>
                            <div class="col-sm-12">
                             <input type="text" class="form-control" name="hfjh_zhuti" id="zhuti">
                            </div>
                         </div>
                         
                         
                         <div class="form-group">
                            <div class="col-sm-12">
                   <input type="hidden" name="zx_ID" value="<?php echo ($_GET['zx_ID']); ?>">
                   <input type="hidden" name="URLcs" value="<?php echo ($dqURLcanshu); ?>">
                   <input type="hidden" name="hfjh_ID" value="<?php echo ($hfjh_ID); ?>">
                   <input type="hidden" name="yy_ID" value="<?php echo ($yy_ID); ?>">
                   <input type="hidden" name="user_ID" value="<?php echo ($user_ID); ?>">
                   <button class="btn btn-primary" type="submit" name="submit_addhuifang">确认添加</button>
                    <a id="closeIframe"></a>
                            </div>
                         </div>
                    </div>

</form>

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
var today3 = {
    elem: '#today3',
    format: 'YYYY-MM-DD hh:mm',
    min: laydate.now(),
    istime: true,
    istoday: true
};
laydate(today3);
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