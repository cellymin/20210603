<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- <title>苗博士CRM网络管理系统-登陆</title> -->
<title>MBS</title>
<link href="<?php echo (CSS_URL); ?>/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/animate.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/style.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/login.min.css" rel="stylesheet">
<link href="<?php echo (JS_URL); ?>/plugins/layer/skin/layer.css" rel="stylesheet">
<!--[if lt IE 8]>
<script>alert('本系统不支持IE6-8，请使用谷歌、火狐等浏览器\n或360、QQ等国产浏览器的极速模式浏览本页面！');</script>
<![endif]-->
<script>if(window.top !== window.self){ window.top.location = window.location;}</script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=4978M1ZqfBwEwkQXX0XAaHq3"></script>
<link rel="shortcut icon" href="/favicon.ico">












</head>

<body  class="signin">
  <div class="signinpanel animated fadeInDown">
  <div class="row">
    <div class="col-sm-7">
      <div class="signin-info">
        <div class="logopanel m-b">
           <h1 style="text-align:center;"><img src="/logo.png" width="60%" height="30%"></h1>
        </div>
        <div class="m-b"></div>
        <!-- <h4 style="text-align:center;">欢迎使用 <strong>苗博士CRM网络管理系统</strong></h4> -->
		<!--
        <ul class="m-b">
          <li><i class="icon icon-circle-arrow-right"></i> 苗博士专业祛痘连锁</li>
          <li><i class="icon icon-circle-arrow-right"></i> 技术支持：赵小路</li>
          <li><i class="icon icon-circle-arrow-right"></i> 联系电话：15961233232</li>
          <li><i class="icon icon-circle-arrow-right"></i> QQ：728885182</li>
          <li><i class="icon icon-circle-arrow-right"></i> 实时跟踪回访</li>
        </ul>

        <strong  style="display:none">
        <a class="btn btn-primary " href="/"><i class="icon icon-pie-chart"></i>&nbsp;预约管理</a>
        <a class="btn btn-info "  href="/shichang.php"><i class="icon icon-line-chart"></i>&nbsp;市场管理</a>
        </strong>
			-->
       </div>
    </div>
    <div class="col-sm-5">
      <form method="post" action="/index.php/oa/login/Checkuser">
        <h4 class="no-margins">请输入用户名和密码：</h4> 
        <!-- <p class="m-t-md">门店预约到诊管理系统</p> -->
        <input type="name" class="form-control uname" placeholder="用户名" required="required" name="username" id="username" value="<?php echo ($username); ?>"/>
        <input type="password" class="form-control pword m-b" placeholder="密码" required="required" name="userpsw" value="<?php echo ($userpsw); ?>"/>
        <div class="form-group" id="captcha-container">
          <input type="text" class="form-control" placeholder="验证码" id="code" name="code" style="display:inline-block;width:63%;" required="required">
          <img src="<?php echo U('Login/verifyImg',array());?>" alt="验证码" title="点击刷新" style="width:35%; height:35px;display:inline-block;">
        </div>
        <input class="form-control" type="hidden" name="weizhi" id="weizhi" value=""/>
        <input class="form-control" type="hidden" name="jingweidu" id="jingweidu" value=""/>
        <div id="allmap" style="display:none;"></div>
        <button name="dl" type="submit" id="xuanzhongz" class="btn btn-danger btn-block">登 录</button>
      </form>
    </div>
  </div>
   <div class="signup-footer">
    <!-- <div class="pull-left"> &copy;2019  苗博士CRM网络管理系统  </div> -->
  </div>
<!-- 全局js --> 
<script src="<?php echo (JS_URL); ?>/jquery-2.1.1.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script> 
<!-- layerjs --> 
<script src="<?php echo (JS_URL); ?>/plugins/layer/layer.min.js"></script>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");
	var point = new BMap.Point(116.331398,39.897445);
	map.centerAndZoom(point,15);

	var geolocation = new BMap.Geolocation();
	geolocation.getCurrentPosition(function(r){
		if(this.getStatus() == BMAP_STATUS_SUCCESS){
			var mk = new BMap.Marker(r.point);
			map.addOverlay(mk);
			map.panTo(r.point);
			$("#jingweidu").val(r.point.lat+','+r.point.lng);
			showPosition(r.point.lat+','+r.point.lng);
		}
		else {
			$("#weizhi").val("位置结果未知");
			//alert('failed'+this.getStatus());
		}
	},{enableHighAccuracy: true})
	//关于状态码
	//BMAP_STATUS_SUCCESS	检索成功。对应数值“0”。
	//BMAP_STATUS_CITY_LIST	城市列表。对应数值“1”。
	//BMAP_STATUS_UNKNOWN_LOCATION	位置结果未知。对应数值“2”。
	//BMAP_STATUS_UNKNOWN_ROUTE	导航结果未知。对应数值“3”。
	//BMAP_STATUS_INVALID_KEY	非法密钥。对应数值“4”。
	//BMAP_STATUS_INVALID_REQUEST	非法请求。对应数值“5”。
	//BMAP_STATUS_PERMISSION_DENIED	没有权限。对应数值“6”。(自 1.1 新增)
	//BMAP_STATUS_SERVICE_UNAVAILABLE	服务不可用。对应数值“7”。(自 1.1 新增)
	//BMAP_STATUS_TIMEOUT	超时。对应数值“8”。(自 1.1 新增)
function showPosition(position){
	var url = "http://api.map.baidu.com/geocoder/v2/?ak=4978M1ZqfBwEwkQXX0XAaHq3&callback=renderReverse&location="+position+"&output=json&pois=0";
	$.ajax({ 
		type: "GET", 
		dataType: "jsonp", 
		url: url,
		beforeSend: function(){
			$("#weizhi").val("正在定位...");
		},
		success: function (json) { 
			if(json.status==0){
			$("#weizhi").val(json.result.formatted_address);
			}
		},
		error: function (XMLHttpRequest, textStatus, errorThrown) { 
			$("#weizhi").val("地址位置获取失败");
		}
	});
}
</script>
<!-- 附加js --> 
<script language="javascript">
$('#xuanzhongz').click(function () {  //筛选等待
  var $btn = $(this);
  $btn.button('loading');
    setTimeout(function(){
      $btn.button('reset');
  }, 2000);
});
var captcha_img = $('#captcha-container').find('img')  
var verifyimg = captcha_img.attr("src");  
captcha_img.attr('title', '点击刷新');  
captcha_img.click(function(){  
    if( verifyimg.indexOf('?')>0){  
        $(this).attr("src", verifyimg+'&random='+Math.random());  
    }else{  
        $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());  
    }  
}); 
</script>
<?php echo ($tishi); ?>
</body>
</html>