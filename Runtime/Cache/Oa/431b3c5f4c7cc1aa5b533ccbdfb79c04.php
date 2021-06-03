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

<form method="post" action="/index.php/oa/updatezixun/huifang_update" enctype="multipart/form-data">
        <div class="ibox-content">
          <div class="col-sm-12" style="padding:0px;">
                <div class="col-sm-6">
                    <div class="input-group m-b">
                    <span class="input-group-addon">患者姓名</span>
                     <input name="guanjianci" type="text" class="form-control" value="<?php echo ($huanzename); ?>" readonly/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group m-b">
                    <span class="input-group-addon">联系电话</span>
                     <input name="guanjianci" type="text" class="form-control" value="<?php echo ($shouji); ?>" readonly/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group m-b">
                    <span class="input-group-addon">预约时间</span>
                     <input name="guanjianci" type="text" class="form-control" value="<?php echo ($yuyuetime); ?>" placeholder="YYYY-MM-DD hh:mm" readonly/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group m-b">
                    <span class="input-group-addon">回访咨询员</span>
                     <input name="guanjianci" type="text" class="form-control" value="<?php echo ($userchinaname); ?>" readonly/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group m-b">
                    <span class="input-group-addon">回访次数</span>
                     <input name="guanjianci" type="text" class="form-control" value="第 <?php echo ($dangqiancishu); ?>/<?php echo ($huifangCount); ?> 次" readonly/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group m-b">
                    <span class="input-group-addon">患者状态</span>
                     <input name="guanjianci" type="text" class="form-control" value="<?php echo ($zhuangtai); ?>" readonly/>
                    </div>
                </div>
          </div>
          <div class="col-sm-12" style="padding:0px;">
                <div class="col-sm-6">
                    <div class="input-group m-b">
                    <span class="input-group-addon">回访时间</span>
<input type="text" name="hf_time" value="<?php echo ($hf_time); ?>" placeholder="YYYY-MM-DD hh:mm" readonly class="form-control" id="today2" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group m-b">
                    <span class="input-group-addon">回访方式</span>
<select name="hf_fangshi" class="form-control">
<option value="电话" <?php echo ($fangshi1); ?>>电话</option>
<option value="短信" <?php echo ($fangshi2); ?>>短信</option>
<option value="QQ" <?php echo ($fangshi3); ?>>QQ</option>
<option value="微信" <?php echo ($fangshi4); ?>>微信</option>
<option value="其他" <?php echo ($fangshi5); ?>>其他</option>
</select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group m-b">
                    <span class="input-group-addon">回访主题</span>
<input name="hf_zhuti" value="<?php echo ($hf_zhuti); ?>" type="text" id="zhuti" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group m-b">
                    <span class="input-group-addon">查看附件</span>
<?php if($hf_fujian == ''): ?><input type="text" class="form-control" value="无" readonly>
<?php else: ?>
<input type="text" class="form-control" value="点击查看附件" readonly onClick="open('/oa/Uploads_lf/<?php echo ($hf_fujian); ?>','查看附件','width=600,height=800,left=500,top=300,resizable=no,scrollbars=yes,status=yes,toolbar=no,location=no,menubar=no,menu=yes')"><?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-12">
                 <div class="ibox-content no-padding">
                 <textarea class="summernote" name="hf_content" id="editor"><?php echo ($hf_content); ?></textarea>
                 </div>
                 <input type="file" id="File1" name="fujian" class="form-control" style="border-top:0px">
               
                </div>
                <div class="col-sm-12" style="margin-top:5px; margin-bottom:5px;">
     <input type="hidden" name="zxhf_ID" value="<?php echo ($_GET['zxhf_ID']); ?>">
     <input type="hidden" name="cishu" value="<?php echo ($_GET['cishu']); ?>">
     <input class="btn btn-primary" type="submit" name="submit_addhuifang" value="修改保存">
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