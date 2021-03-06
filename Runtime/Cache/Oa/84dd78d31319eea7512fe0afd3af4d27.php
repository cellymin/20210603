<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<title>苗博士CRM网络管理系统</title>
<link href="<?php echo (CSS_URL); ?>/bootstrap.min.css?v=3.3.5" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/animate.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/style.min.css?v=3.2.0" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/plugins/iCheck/custom.css" rel="stylesheet">
</head>
<body  class="gray-bg">

<div class="animated fadeInUp" style="padding-top:40px;">

  <div class="panel panel-danger" style="width:320px; margin:0 auto;">
      <div class="panel-heading">
          系统 提示信息：
      </div>
      <div class="panel-body">
    <?php if(isset($message)) {?>

    <p class="success"> <?php echo($message); ?></p>

    <?php }else{?>

    <p class="error">:( <?php echo($error); ?></p>

    <?php }?>

    <p class="detail"></p>

    <p class="jump">

    <a id="href" href="<?php echo($jumpUrl); ?>">如果你的浏览器没有自动跳转，请点击这里...</a>

    <br />
      </div>
      <div class="panel-footer">
          等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
      </div>
  </div>

</div>

 <!-- 全局js --> 
<script src="<?php echo (JS_URL); ?>/jquery.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script> 
<!-- 自定义js --> 
<!-- layerjs --> 
<script src="<?php echo (JS_URL); ?>/plugins/layer/layer.min.js"></script>
    <script type="text/javascript">

    (function(){

    var wait = document.getElementById('wait'),href = document.getElementById('href').href;

    var interval = setInterval(function(){

    var time = --wait.innerHTML;

    if(time <= 0) {

    location.href = href;

    clearInterval(interval);

    };

    }, 2000);

    })();

    </script>
</body>
</html>