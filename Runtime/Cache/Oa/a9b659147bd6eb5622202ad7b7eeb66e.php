<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <title>苗博士CRM网络管理系统</title> -->
<title>MBS</title>
<link href="<?php echo (CSS_URL); ?>/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/animate.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/plugins/iCheck/custom.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/plugins/summernote/summernote.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/plugins/summernote/summernote-bs3.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/style.min.css" rel="stylesheet">
</head>
<!-- <body  class="gray-bg"> -->
<body class="gray-bg">
<div class="wrapper wrapper-content">
<form action="/index.php/oa/addzixun/add_insert" method="post" id="signupForm" enctype="multipart/form-data" class="form-horizontal">
     <div class="col-sm-6" style="padding:0px;">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><a class="collapse-link">基本信息</a></h5>
                        <div class="ibox-tools" style="margin-top:-8px;">
                         <button class="btn btn-primary" type="submit" name="submit1" id="endtijiao" style="border-radius:3px 3px 0px 0px; border-bottom:0px;">保存内容</button>
                         <button class="btn btn-white" type="reset" style="border-radius:3px 3px 0px 0px; border-bottom:0px;">重置</button>
                        </div>
                    </div>
                    <div class="ibox-content">
					
					
					
                         <div class="form-group">
                          <label class="col-sm-12">所属门店<font color="#fe7f50" style=" font-size:12px;"> &nbsp;*(必填)</font></label>
                            <div class="col-sm-12">
                              <select class="form-control" name="yy_ID" id="register0"><!-- 默认账号登记的门店 -->
                                <?php if($countyy > 1): ?><option value="">请先选择门店</option><?php endif; ?>
                                  <?php if(is_array($ssyy)): $i = 0; $__LIST__ = $ssyy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["yyid"]); ?>"><?php echo ($vo["yyname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                              </select>
                            </div>
                         </div>
						 
						 
                         <div class="form-group">
                          <label class="col-sm-12">咨询方式<font color="#fe7f50" style=" font-size:12px;"> &nbsp;*(必填)</font></label>
                           <div class="col-sm-12">
                             <select class="form-control" name="zxfs_ID" id="userinfo0">
                               <option value="">请先选择门店</option>
                             </select>
                             <input name="zxfs_IDpd" type="text" id="zxfs_IDpd" style="position:fixed;top:-200px;width:0px;height:0px;">
                            </div>
                         </div>
						 
						 
                         <div class="form-group">
                          <label class="col-sm-12">咨询病种<font color="#fe7f50" style=" font-size:12px;"> &nbsp;*(必填)</font></label>
                           <div class="col-sm-12">
                             <select class="form-control" name="bz_ID" id="userinfoBz">
                               <option value="">请先选择门店</option>
                             </select>
                             <input type="text" name="bz_IDpd" id="bz_IDpd" style="position:fixed;top:-200px;width:0px;height:0px;">
                            </div>
                         </div>
						 
						 
                         <div class="form-group">
                          <label class="col-sm-12">客户姓名</label>
                            <div class="col-sm-12">
                             <input type="text" class="form-control" name="huanzeName">
                            </div>
                         </div>
						 
						 
						 
						 
                         <div class="form-group">
                          <label class="col-sm-12">联系手机</label>
                            <div class="col-sm-12">
                             <input type="text" class="form-control" id="sjjc" name="shouji">
                             <textarea id="shouji_cf" name="shouji_cf" style="position:fixed;top:-200px;width:0px;height:0px;"></textarea>
                             <span id="userinfosjjc"></span>
                            </div>
                         </div>
                         <div class="form-group">
                          <label class="col-sm-12">咨询客服</label>
                            <div class="col-sm-12">
                              <select class="form-control" name="userID" id="userinfoZxy">
                                  <option value="">请先选择门店</option>
                              </select>
                            </div>
                         </div>
                         <div class="form-group">
                          <label class="col-sm-12">咨询时间</label>
						  
						  
							<div class="col-sm-7">
							
							
							<!-- <input name="zx_time" type="text" class="form-control" id="userinfozxtime"  placeholder="YYYY-MM-DD" onClick="laydate({istime: true, format: 'YYYY-MM-DD'})"  value='<?php echo (substr($dqtime,0,10)); ?>' readonly/> -->
							
							<input name="zx_time" type="text" class="form-control"  placeholder="YYYY-MM-DD"
                                   <?php if($_SESSION['user_role']==1){ ?>
                                   onClick="laydate({istime:true, format: 'YYYY-MM-DD'})"
                                <?php } ?>

                                   value='<?php echo (substr($dqtime,0,10)); ?>' readonly/>

							</div>
							<div class="col-sm-5">
							<input name="zx_timee" type="text" class="form-control clockpicker" placeholder="hh:mm" value='<?php echo (substr($dqtime,11,5)); ?>'/></div>
                       
                         </div>
                    </div>
                </div>
            </div>
			
			
			
			
			
			
			<!--原来详细信息位置--->
			
			
			<div class="col-sm-12">
                <div class="ibox float-e-margins" id="shoujisf1">
                    <div class="ibox-title">
                        <h5><a class="collapse-link">来源信息</a></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-wrench" id="shoujisf2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" id="shoujisf3">
					
					
					
					 <div class="form-group">
                           <label class="col-sm-12">信息来源</label>
                            <div class="col-sm-12">
                             <select class="form-control" name="xx_ID" id="userinfoXxly">
                                <option>请先选择门店</option>
                             </select>
                            </div>
                         </div>
					
                         <div class="form-group">
                           <label class="col-sm-12">商务通永久身份</label>
                            <div class="col-sm-12">
                             <input type="text" class="form-control" name="yongjiushenfen">
                            </div>
                         </div>
						  <div class="form-group">
                           <label class="col-sm-12">商务通访问时间</label>
                            <div class="col-sm-12">
                             <input name="chucifangwen" class="form-control layer-date" id="chucisj" placeholder="YYYY-MM-DD hh:mm:ss">
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">来源网站</label>
                            <div class="col-sm-12">
                             <select class="form-control" name="laiyuanwangzhan" id="userinfoWz">
                                <option>请先选择门店</option>
                             </select>
                            </div>
                         </div>
						 
                        
						 
						 
                         <div class="form-group">
                           <label class="col-sm-12">IP地址</label>
                            <div class="col-sm-12">
                             <input type="text"  id="IPdizhijc" class="form-control" name="IPdizhi">
                             <span id="userinfoIPdizhijc"></span>
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">访问入口</label>
                            <div class="col-sm-12">
                             <input type="text" class="form-control" name="fangwenrukou">
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">咨询页面</label>
                            <div class="col-sm-12">
                             <input type="text" class="form-control" name="faqizixun">
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">搜索关键词</label>
                            <div class="col-sm-12">
                             <input type="text" class="form-control" name="guanjianci">
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">匹配关键词</label>
                            <div class="col-sm-12">
                             <input type="text" class="form-control" name="ppguanjianci">
                            </div>
                         </div>                
                    </div>
                </div>
            </div>
           
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
     </div>
     <div class="col-sm-6" style="padding:0px;">
            <div class="col-sm-12">
                <div class="ibox float-e-margins" id="shoujisf1">
                    <div class="ibox-title">
                        <h5><a class="collapse-link">预约信息</a></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-wrench" id="shoujisf2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" id="shoujisf3">
                         <div class="form-group">
                           <label class="col-sm-12">预约时间</label>
                            <div class="col-sm-12">
                             <input name="yuyueTime" class="form-control layer-date" id="yuyuepd" placeholder="YYYY-MM-DD hh:mm">
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">预约医生</label>
                            <div class="col-sm-12">
                             <select class="form-control" name="yuyueyishengID" id="userinfoYuyueys">
                             <option>请先选择门店</option>
                             </select>
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">预约号</label>
                            <div class="col-sm-12">
                             <input type="text" class="form-control" name="yuyuehao" value="<?php echo ($yuyuehao); ?>" id="yyhm" style="width:79%; float:left;">
                             <input id="zidongshengcheng" type="button" value="生成" class="btn btn-warning"  style="width:20%;float:right;"/>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-sm-12">预约备注</label>
                            <div class="col-sm-12">
                             <textarea class="ibox-content" style="width:100%; border:1px #E5E6E7 solid" name="yuyueBeizhu" id="editor"></textarea>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="ibox float-e-margins" id="shoujisf1">
                    <div class="ibox-title">
                        <h5><a class="collapse-link">聊天信息</a></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-wrench" id="shoujisf2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" id="shoujisf3">
                         <div class="form-group">
                            <div class="col-sm-12">
                             <div class="no-padding">
                             <textarea class="summernote" name="liaotianjilu" id="editor"></textarea>
                             </div>
                             <input type="file" id="File1" name="fujian" class="form-control">
                            </div>
                         </div>
                    </div>
                </div>
                
            </div>
			
			
			 <div class="col-sm-12">
                <div class="ibox float-e-margins" id="shoujisf1">
                    <div class="ibox-title">
                        <h5><a class="collapse-link">详细信息</a></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-wrench" id="shoujisf2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" id="shoujisf3">
                         <div class="form-group">
                          <label class="col-sm-12">QQ号码</label>
                            <div class="col-sm-12">
                             <input type="text" class="form-control" name="QQhaoma" >
                            </div>
                         </div>
                         <div class="form-group">
                          <label class="col-sm-12">微信号</label>
                            <div class="col-sm-12">
                             <input type="text" class="form-control" name="weixinhao" >
                            </div>
                         </div>
                         <div class="form-group">
                          <label class="col-sm-12">性别</label>
                            <div class="col-sm-12">
                             <select class="form-control" name="xingbie">
                              <option value="1">男</option>
                              <option value="2" selected="selected">女</option>
                             </select>
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">婚姻</label>
                            <div class="col-sm-12">
                             <select class="form-control" name="hunyin">
                              <option value="1">未婚</option>
                              <option value="0">已婚</option>
                             </select>
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">年龄</label>
                            <div class="col-sm-12">
                             <input type="text" class="form-control" name="age">
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">生日</label>
                            <div class="col-sm-12">
                             <input class="form-control layer-date" placeholder="YYYY-MM-DD" id="shengri">
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">职业</label>
                            <div class="col-sm-12">
                             <input type="text" class="form-control" name="zhiye">
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-sm-12">地区</label>
                            <div class="col-sm-4">
                             <select class="form-control" id="seachprov" name="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');">
                                <option>请选择</option>
                             </select>
                            </div>
                            <div class="col-sm-4">
                             <select class="form-control" id="seachcity" name="homecity" onChange="changeCity(this.value,'seachdistrict','seachdistrict');">
                                <option>请选择</option>
                             </select>
                            </div>
                            <div class="col-sm-4">
                             <select class="form-control" id="seachdistrict" name="seachdistrict">
                                <option>请选择</option>
                             </select>
                            </div>
                         </div>
                    </div>
                </div>
            </div>

     </div>
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                            <div class="form-group">
                                <div class="col-sm-12">
                                 <input type="hidden" name="chongfutijiao" value="<?php echo ($chongfutijiao); ?>">
                                <input type="hidden" name="MAX_FILE_SIZE" value="500000000">                    
                                    <button class="btn btn-primary" type="submit" name="submit1" id="endtijiao">保存内容</button>
                                    <button class="btn btn-white" type="reset">重置</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
</form>
</div>

<!-- 全局js --> 
<script src="<?php echo (JS_URL); ?>/jquery.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script> 
<!-- layerjs --> 
<script src="<?php echo (JS_URL); ?>/plugins/layer/layer.min.js"></script>
<script>
function sjhm(sjhm){
parent.layer.open({
    type: 2,
    title: '同手机号',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '<?php echo (DQURL); ?>ManageZx/manage/shouji/'+sjhm //iframe url
});
};
function iphm(iphm){
parent.layer.open({
    type: 2,
    title: '同IP地址',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '<?php echo (DQURL); ?>ManageZx/manage/IPdizhi/'+iphm //iframe url
});
};
</script>
<!-- 自定义js --> 
<script src="<?php echo (JS_URL); ?>/content.min.js"></script>
<!-- layerDate plugin javascript -->
<script src="<?php echo (JS_URL); ?>/plugins/layer/laydate/laydate.js"></script>
<script>

$(document).ready(function() {
	
var shijian2 = {
    elem: '#yuyuepd',
    format: 'YYYY-MM-DD hh:mm',
    min: laydate.now(),
	istime: true,
	oclear: false
};
var shijian3 = {
    elem: '#shengri',
    format: 'YYYY-MM-DD',
	istime: false,
	oclear: false
};
var shijian4 = {
    elem: '#chucisj',
    format: 'YYYY-MM-DD hh:mm:ss',
	istime: true,
	oclear: false
};

laydate(shijian2);
laydate(shijian3);
laydate(shijian4);
});
</script>
<!-- SUMMERNOTE -->
<script src="<?php echo (JS_URL); ?>/plugins/summernote/summernote.min.js"></script>
<script src="<?php echo (JS_URL); ?>/plugins/summernote/summernote-zh-CN.js"></script>
<script>
$(document).ready(function() {
$(".summernote").summernote({
	lang: "zh-CN"
})
});
var edit = function() {
	$("#eg").addClass("no-padding");
	$(".click2edit").summernote({
		lang: "zh-CN",
		focus: true
	})
};
var save = function() {
	$("#eg").removeClass("no-padding");
	var a = $(".click2edit").code();
	$(".click2edit").destroy()
};
</script>
<!-- Prettyfile -->
<script src="<?php echo (JS_URL); ?>/plugins/prettyfile/bootstrap-prettyfile.js"></script>
<!-- 时钟 -->
<script src="<?php echo (JS_URL); ?>/plugins/clockpicker/clockpicker.js"></script>
<link href="<?php echo (CSS_URL); ?>/plugins/clockpicker/clockpicker.css" rel="stylesheet">
<script type="text/javascript">
$(document).ready(function() {
$('.clockpicker').clockpicker();
});
</script>
<!-- jQuery Validation plugin javascript-->
<script src="<?php echo (JS_URL); ?>/plugins/validate/jquery.validate.min.js"></script>
<script src="<?php echo (JS_URL); ?>/plugins/validate/messages_zh.min.js"></script>
<script>
$(document).ready(function() {
$( 'input[type="file"]' ).prettyFile();
$.validator.setDefaults({
  highlight: function(a) {
    $(a).closest(".form-group").removeClass("has-success").addClass("has-error")
  },
  success: function(a) {
    a.closest(".form-group").removeClass("has-error").addClass("has-success")
  },
  errorElement: "span",
  errorPlacement: function(a, b) {
    if (b.is(":radio") || b.is(":checkbox")) {
      a.appendTo(b.parent().parent().parent())
    } else {
      a.appendTo(b.parent())
    }
  },
  errorClass: "help-block m-b-none",
  validClass: "help-block m-b-none"
});
$().ready(function() {
  $("#commentForm").validate();
  var a = "<i class='fa fa-times-circle'></i> ";
  $("#signupForm").validate({
    rules: {
      yy_ID: "required",
      zxfs_ID: "required",
      userID: "required",
	  zx_time: "required",
      bz_ID: "required",
	  shouji: {digits:true,rangelength:[9,12]},
	  QQhaoma: {digits:true,rangelength:[5,14]},
	  zxfs_IDpd: {required: true,minlength: 5},
	  bz_IDpd: {required: true,minlength: 5},
	  shouji_cf: {minlength: 5},
	  chucifangwen: {date:true,rangelength:[19,19]}
    },
    messages: {
      yy_ID: "<i class='fa icon-info-sign'></i>请选择所属门店",
      zxfs_ID: "<i class='fa icon-info-sign'></i>请选择咨询方式",
      userID: "<i class='fa icon-info-sign'></i>请选择咨询客服",
	  zx_time: "<i class='fa icon-info-sign'></i>请输入咨询时间",
      bz_ID: "<i class='fa icon-info-sign'></i>请选择咨询病种",
	  shouji: "<i class='fa icon-info-sign'></i>请输入正确的手机号",
	  QQhaoma: "<i class='fa icon-info-sign'></i>请输入正确的QQ号",
	  zxfs_IDpd: "<i class='fa icon-info-sign'></i>存在下级分类方式",
	  bz_IDpd: "<i class='fa icon-info-sign'></i>存在下级分类方式",
	  shouji_cf: "<i class='fa icon-info-sign'></i>当前重复号码不允许提交",
	  chucifangwen: "<i class='fa icon-info-sign'></i>当前日期格式不正确"
    }
  })
});
$("#zidongshengcheng").click(function(){ 
$("#yyhm").val("<?php echo ($yuyuehao); ?>");
});
});
</script>
<!-- 二级联动 --> 
<?php if($countyy == 1): ?><script type="text/javascript">
$(document).ready(function() {
	<!-- 首次加载 --> 
	layer.load();
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/ZiXunLianDong",
      data: "username=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfo0").html(msg);
      }
    });
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/zixunyuanLianDong",
      data: "zixunyuan=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoZxy").html(msg);
      }
    });
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/bzLianDong",
      data: "bzid=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoBz").html(msg);
      }
    });
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/wzLianDong",
      data: "wzid=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoWz").html(msg);
      }
    });
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/xxlyLianDong",
      data: "xxid=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoXxly").html(msg);
      }
    });
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/yuyueYYLiandong",
      data: "yyid=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoYuyueys").html(msg);
      }
    });
    $.ajax({
        type: "post",
        url: "<?php echo (DQURL); ?>Addzixun/zxtimexg",
        data: "yyid=" + $("#register0").val(),
        success: function(msg) {
          $("#userinfozxtime").attr("class", msg);
		  $('.readonly1').removeAttr("readonly");
		  $(".readonly1").attr("onclick","laydate({istime: true, format: 'YYYY-MM-DD'})");
		  $('.readonly2').attr("readonly","readonly");
		  $(".readonly2").removeAttr("onclick","");
		setTimeout(function(){
		layer.closeAll('loading');
		}, 500);
        }
      });
});
</script><?php endif; ?>
<script type="text/javascript">
$(document).ready(function() {
  $("#register0").change(function() { //咨询方式
  layer.load();
    $("#userinfozxpd").html("");
    $("#userinfobzpd").html("");
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/ZiXunLianDong",
      data: "username=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfo0").html(msg);
      }
    });
  });
  $("#register0").change(function() { //所属咨询
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/zixunyuanLianDong",
      data: "zixunyuan=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoZxy").html(msg);
      }
    });
  });
  $("#register0").change(function() { //所属病种 
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/bzLianDong",
      data: "bzid=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoBz").html(msg);
      }
    });
  });
  $("#register0").change(function() { //所属网站
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/wzLianDong",
      data: "wzid=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoWz").html(msg);
      }
    });
  });
  $("#register0").change(function() { //信息来源
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/xxlyLianDong",
      data: "xxid=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoXxly").html(msg);
      }
    });
  });
  $("#register0").change(function() { //预约医生
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/yuyueYYLiandong",
      data: "yyid=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoYuyueys").html(msg);
        setTimeout(function(){
        layer.closeAll('loading');
        }, 500);
      }
    });
  });
  $("#sjjc").change(function() { //手机重复
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/shoujijc",
      data: "sjhm=" + $("#sjjc").val(),
      success: function(msg) {
          if(msg.length>1){
              $("#sjjc").val('');
          }
        $("#userinfosjjc").html(msg);
      }
    });
  });
  $("#IPdizhijc").change(function() { //IP地址重复
  $.ajax({
	type: "post",
	url: "<?php echo (DQURL); ?>Addzixun/ipdizhijc",
	data: "ipdizhi=" + $("#IPdizhijc").val(),
	success: function(msg) {
	  $("#userinfoIPdizhijc").html(msg);
	}
  });
});
  $("#sjjc").change(function() { //手机获取省
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/shoujisheng",
      data: "sjhm=" + $("#sjjc").val(),
      success: function(msg) {
		var msgnr = msg.split('/');
		var msgnra = Number(msgnr[0]);
		var msgnrb = Number(msgnr[1]);
		$("#seachprov").val(msgnra);
		changeComplexProvince(msgnra, sub_array, 'seachcity', 'seachdistrict');
		$("#seachcity").val(msgnrb);
		changeCity(msgnrb,'seachdistrict','seachdistrict');
      }
    });
  });
});
</script>
<!--地区联动-->
<script src="<?php echo (JS_URL); ?>/Area.js" type="text/javascript"></script>
<script src="<?php echo (JS_URL); ?>/AreaData_min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function (){
	initComplexArea('seachprov', 'seachcity', 'seachdistrict', area_array, sub_array, '0', '0', '0');
});
</script>
<!-- 联动判断 -->
<script type="text/javascript">
$(document).ready(function() {
  $("#register0").change(function() { // //判断是否可以修改咨询时间
	$.ajax({
	  type: "post",
	  url: "<?php echo (DQURL); ?>Addzixun/zxtimexg",
	  data: "yyid=" + $("#register0").val(),
	  success: function(msg) {
		$("#userinfozxtime").val("<?php echo (substr($dqtime,0,10)); ?>");
		$("#userinfozxtime").attr("class", msg);
		$('.readonly1').removeAttr("readonly");
		$(".readonly1").attr("onclick","laydate({istime: true, format: 'YYYY-MM-DD'})");
		$('.readonly2').attr("readonly","readonly");
		$(".readonly2").removeAttr("onclick");
	  }
	});
  });
  $("#userinfo0").change(function() { // //咨询方式判断是否有下级
	$.ajax({
	  type: "post",
	  url: "<?php echo (DQURL); ?>Addzixun/ZiXunpdxj",
	  data: "yyid=" + $("#register0").val() + "|" + $("#userinfo0").val(),
	  success: function(msg) {
		$("#zxfs_IDpd").val(msg);
		$("#zxfs_IDpd").blur();
	  }
	});
  });
  $("#userinfoBz").change(function() { // //判断是否有下级
	$.ajax({
	  type: "post",
	  url: "<?php echo (DQURL); ?>Addzixun/BingZhongpdxj",
	  data: "yyid=" + $("#register0").val() + "|" + $("#userinfoBz").val(),
	  success: function(msg) {
		$("#bz_IDpd").val(msg);
		$("#bz_IDpd").blur();
	  }
	});
  });
  $("#sjjc").change(function() { // //手机号码可否重复
	$.ajax({
	  type: "post",
	  url: "<?php echo (DQURL); ?>Addzixun/shoujitj",
	  data: "sjhm=" + $("#sjjc").val() + "|" + $("#register0").val(),
	  success: function(msg) {
		$("#shouji_cf").html(msg);
		$("#shouji_cf").blur();
	  }
	});
  });
<!-- 手机下缩选项 -->
var w  = document.body.clientWidth;
if (w<500)  {
 $("[id='shoujisf1']").addClass('border-bottom')
 $("[id='shoujisf2']").addClass('fa-chevron-up')
 $("[id='shoujisf2']").addClass('fa-chevron-down')
 $("[id='shoujisf3']").css("display","none");
  }
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