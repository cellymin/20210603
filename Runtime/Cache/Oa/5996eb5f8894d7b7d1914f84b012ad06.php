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
<form action="/index.php/oa/employee/employee_rizhi" method="post" id="contact-form">
<div class="col-sm-12">
    <div class="ibox float-e-margins" id="shoujisf1">
        <div class="ibox-title">
            <h5><a class="collapse-link">日志数据 筛查选项</a></h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-wrench" id="shoujisf2"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content" style="padding-left:0px;padding-right:0px;" id="shoujisf3">
                <div class="col-sm-3">
                    <div class="input-group m-b">
                    <span class="input-group-addon"><font color="<?php echo ($yanse); ?>">所属门店</font></span>
                    <select class="form-control" name="yy_ID" id="register0">
                      <option value="">所有门店</option>
                      <?php if(is_array($ssyy)): $i = 0; $__LIST__ = $ssyy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["yyid"] == $dqyyID): ?><option value="<?php echo ($vo["yyid"]); ?>" selected="selected"><?php echo ($vo["yyname"]); ?></option>
                      <?php else: ?>
                      <option value="<?php echo ($vo["yyid"]); ?>"><?php echo ($vo["yyname"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group m-b">
                    <span class="input-group-addon"><font color="<?php echo ($yanse2); ?>">所属组</font></span>
                    <select class="form-control" name="gongzuozu" id="gongzuozu" >
                      <option value="">所有组</option>
                       <?php if(is_array($gongzuozu)): $i = 0; $__LIST__ = $gongzuozu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["role_ID"] == $dqrole_ID): ?><option value="<?php echo ($vo["role_ID"]); ?>"  selected="selected" ><?php echo ($vo["role_name"]); ?></option>
                       <?php else: ?>
                         <option value="<?php echo ($vo["role_ID"]); ?>"><?php echo ($vo["role_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group m-b">
                    <span class="input-group-addon"><font color="<?php echo ($yanse1); ?>">姓名</font></span>
                    <select class="form-control" name="userID" id="userinfoZxy" >
                      <option value="">所有员工</option>
                     <?php if(is_array($zixunyuan1)): $i = 0; $__LIST__ = $zixunyuan1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zixunyuan11): $mod = ($i % 2 );++$i; if(($zixunyuan11["user_ID"] == $dqzxy)): ?><option value="<?php echo ($zixunyuan11["user_ID"]); ?>" selected="selected"><?php echo ($zixunyuan11["userchinaname"]); ?></option>
                       <?php else: ?>
                        <option value="<?php echo ($zixunyuan11["user_ID"]); ?>"><?php echo ($zixunyuan11["userchinaname"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    </div>

                </div>
                <div class="col-sm-3" style="padding-left:0px;padding-right:0px;">
                    <div class="col-md-6">
                    <div class="input-group m-b" style="width:100%;">
                    <input name="zx_timeStart" type="text" class="form-control layer-date" id="shijian1" placeholder="<?php echo ($yestoday); ?>" value="<?php echo ($yestoday); ?>"/>
                    <span class="input-group-addon" id="visible-xs">开始时间</span>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="input-group m-b" style="width:100%;">
                    <input name="zx_timeEnd" type="text" class="form-control layer-date" id="shijian2" placeholder="<?php echo ($tomorrow); ?>"  value="<?php echo ($tomorrow); ?>"/>
                    <span class="input-group-addon" id="visible-xs">结束时间</span>
                    </div>
                    </div>
                </div>
                
                <div class="col-sm-3">
                 <div class="col-xs-6">
                 <button class="btn btn-primary" type="submit">确定筛选</button>
                 </div>
                 <div class="col-xs-6">
                  <div data-toggle="buttons" class="btn-group">
                      <label class="btn btn-sm btn-white <?php echo ($active_lb); ?>" id="option11">
                          <input type="radio" id="option1" name="tian_geshi" value="1" >列表</label>
                      <label class="btn btn-sm btn-white <?php echo ($active_tj); ?>" id="option22">
                          <input type="radio" id="option2" name="tian_geshi" value="2" <?php echo ($checked_tj); ?>>统计</label>
                  </div>
                 </div>
                </div>
        </div>
    </div>
</div>
</form>
<div class="col-sm-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><a class="collapse-link">日志统计</a></h5>
            <div style="display:inline-block;margin-top:-6px;padding:0;float:left; margin-left:10px;">
            <a class="btn btn-primary btn-xs" href="javascript:xgrizhi('1','','今天是 <?php echo ($today); ?> <?php echo ($xingqiji); ?>','')" style="border-radius:3px 3px 0px 0px; border-bottom:0px;">添加日志</a>
            <a class="btn btn-primary btn-xs" href="javascript:xgjihua('1','','<?php echo ($today); ?>','')" style="border-radius:3px 3px 0px 0px; border-bottom:0px;">添加计划</a>
            </div>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-wrench"></i>
                </a>
            </div>
        </div>
<?php if(($panuan_lb == 2)): ?><div class="ibox-content" style="margin-bottom:0px; padding-bottom:0px;">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="hidden-xs"></th>
                            <th>姓名</th>
                            <th>状态</th>
                        </tr>
                    </thead>
                    <tbody>
          <?php if(is_array($biaoge)): $i = 0; $__LIST__ = $biaoge;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td class="hidden-xs"><img alt="image" class="img-circle" src="<?php echo (IMG_URL); ?>/a<?php echo mt_rand(1,9);?>.jpg"></td>
            <td nowrap><?php echo ($vo["userchinaname"]); ?></td>
            <td nowrap>
              <?php if(is_array($vo["code"])): $j = 0; $__LIST__ = $vo["code"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nr): $mod = ($j % 2 );++$j;?><div class="col-lg-1 col-sm-2 col-xs-6" style="min-width:90px;">
                   <?php echo ($nr); ?>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        <tr>
                            <td colspan="3" class="hidden-xs">
<form method="POST" action="/index.php/oa/employee/ExcleDC_tongji">
<input type="hidden" name="excle" value='<?php echo ($daochu); ?>' />
<input type="hidden" name="excle1" value='<?php echo ($daochu_heji); ?>' />
<input type="submit" name="submit_1" class="btn btn-white btn-sm" value="全部导出xls">
</form>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
<?php else: ?>
        <div class="ibox-content" style="margin-bottom:0px; padding-bottom:0px;">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="hidden-xs"></th>
                            <th>姓名</th>
                            <th>日期</th>
                            <th>完成工作</th>
                            <th class="hidden-xs">计划工作</th>
                            <th class="hidden-xs">操作</th>
                        </tr>
                    </thead>
                    <tbody>
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td class="hidden-xs"><img alt="image" class="img-circle" src="<?php echo (IMG_URL); ?>/a<?php echo mt_rand(1,9);?>.jpg"></td>
            <td nowrap><?php echo ($vo["userchinaname"]); ?></td>
            <td nowrap><?php echo ($vo["rizhi_date"]); ?> <br> <?php echo ($vo["xingqi"]); ?></td>
            <td>
            <div class="visible-xs">
            <small>日志：</small>
            <br>
            </div>
			<?php echo ($vo["rizhi_content"]); ?>
            <br>
            <small>添加时间: <?php echo ($vo["add_time"]); ?></small><br>
             <small>最后修改: <?php echo ($vo["last_time"]); ?> </small>
            <div class="visible-xs" style="border-top:1px dashed #E5E5E5; margin-top:5px; padding-top:5px;">
            <small>计划：</small>
            <br>
			<?php echo ($vo["jihua_content"]); ?>
            <br>
            <small>添加时间: <?php echo ($vo["jihua_add_time"]); ?> </small>
            
            <?php if(($vo["userID"] == $_SESSION['username_lf']) and ($vo["rizhi_date"] == $today)): ?><br>
            <a href="javascript:xgrizhi('2','<?php echo ($vo["rizhi_ID"]); ?>','<?php echo ($vo["rizhi_date"]); ?>','<?php echo ($vo["rizhi_content"]); ?>')" class="btn btn-white btn-sm neianb" style="display:inline-block">修改日志</a> 
            <a href="javascript:xgjihua('2','<?php echo ($vo["jihua_ID"]); ?>','<?php echo ($vo["rizhi_date"]); ?>','<?php echo ($vo["jihua_content"]); ?>')" class="btn btn-white btn-sm neianb" style="display:inline-block">修改计划</a><?php endif; ?>
            </div>
            </td>
            <td class="hidden-xs">
			<?php echo ($vo["jihua_content"]); ?>
            <br>
            <small>添加时间: <?php echo ($vo["jihua_add_time"]); ?> </small><BR>
            <small>最后修改: <?php echo ($vo["jihua_last_time"]); ?> </small>
            </td>
          
            <td nowrap class="hidden-xs">
            <?php if(($vo["userID"] == $_SESSION['username_lf']) and ($vo["rizhi_date"] == $today)): ?><a href="javascript:xgrizhi('2','<?php echo ($vo["rizhi_ID"]); ?>','<?php echo ($vo["rizhi_date"]); ?>','<?php echo ($vo["rizhi_content"]); ?>')" class="btn btn-white btn-sm neianb">修改日志</a> 
            <a href="javascript:xgjihua('2','<?php echo ($vo["jihua_ID"]); ?>','<?php echo ($vo["rizhi_date"]); ?>','<?php echo ($vo["jihua_content"]); ?>')" class="btn btn-white btn-sm neianb">修改计划</a>
            <?php else: endif; ?>
            </td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        <tr>
                            <td colspan="7" class="hidden-xs">
<form method="POST" action="/index.php/oa/employee/ExcleDC_tongji">
<input type="hidden" name="excle" value='<?php echo ($daochu); ?>' />
<input type="hidden" name="excle1" value='<?php echo ($daochu_heji); ?>' />
<input type="submit" name="submit_1" class="btn btn-white btn-sm" value="全部导出xls">
</form>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div><?php endif; ?>
    </div>
</div>
</div>
<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;" id="xiugairznn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index: 19891020; width:310px; height:400px; left:50%;top:50%; margin-top:-200px; margin-left:-155px;">
    <div class="layui-layer-title" style="cursor: move;">添加/修改日志</div>
    <div class="layui-layer-content">
      <div class='animated'>
        <form action='/index.php/oa/employee/rizhi_add' method='post' class='form-horizontal'>
          <div class='ibox float-e-margins' style='margin-bottom:0px;'>
            <div class='ibox-content'>
                <div class="form-group">
                  <div class="col-sm-12">
                    <div class="input-group m-b">
                    <input name="rizhi_date" type="text" class="form-control" id='fuzhi2' readonly >
                    <span class="input-group-addon">完成工作</span>
                    </div>
                    <textarea name='rizhi_content' rows='15' class='form-control' id='fuzhi3'></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type='hidden' name='yy_ID1' id='fuzhi31'>
                    <input type='hidden' name='gongzuozu1' id='fuzhi32'>
                    <input type='hidden' name='userID1' id='fuzhi33'>
                    <input type='hidden' name='zx_timeStart1' id="fuzhi34">
                    <input type='hidden' name='zx_timeEnd1' id='fuzhi35'>
                    <input type='hidden' name='rizhi_ID' id='fuzhi1'>
                    <button class="btn btn-primary" type="submit" name="submit_addrizhi">确认提交</button>
                    <button class="btn btn-primary" type="submit" name="submit_addsc"  id="rizhi_sc">删除</button>
                  </div>
                </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <span class="layui-layer-setwin" id="xiugairzxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span> </div>
</div>

<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;" id="xiugaijhnn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index: 19891020; width:310px; height:400px; left:50%;top:50%; margin-top:-200px; margin-left:-155px;">
    <div class="layui-layer-title" style="cursor: move;">添加/修改计划</div>
    <div class="layui-layer-content">
      <div class='animated'>
        <form action='/index.php/oa/employee/jihua_add' method='post' class='form-horizontal'>
          <div class='ibox float-e-margins' style='margin-bottom:0px;'>
            <div class='ibox-content'>
                <div class="form-group">
                  <div class="col-sm-12">
                    <div class="input-group m-b">
                    <input name="jihua_date" type="text" class="form-control" id='fuzhi12' placeholder="YYYY-MM-DD" value="">
                    <span class="input-group-addon">计划工作</span>
                    </div>
                    <textarea name='jihua_content' rows='15' class='form-control' id='fuzhi13'></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type='hidden' name='yy_ID1' id='fuzhi31'>
                    <input type='hidden' name='gongzuozu1' id='fuzhi32'>
                    <input type='hidden' name='userID1' id='fuzhi33'>
                    <input type='hidden' name='zx_timeStart1' id='fuzhi34'>
                    <input type='hidden' name='zx_timeEnd1' id='fuzhi35'>
                    <input type='hidden' name='jihua_ID' id='fuzhi11'>
                    <button class="btn btn-primary" type="submit" name="submit_addrizhi">确认提交</button>
                    <button class="btn btn-primary" type="submit" name="submit_addsc" id="jihua_sc">删除</button>
                  </div>
                </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <span class="layui-layer-setwin" id="xiugaijhxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span> </div>
</div>

<!-- 全局js --> 
<script src="<?php echo (JS_URL); ?>/jquery.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script> 
<!-- layerjs --> 
<script src="<?php echo (JS_URL); ?>/plugins/layer/layer.min.js"></script>
<!-- 自定义js --> 
<script src="<?php echo (JS_URL); ?>/content.min.js?v=1.0.0"></script>
<!-- layerDate plugin javascript -->
<script src="<?php echo (JS_URL); ?>/plugins/layer/laydate/laydate.js"></script>

<script type="text/javascript">
<!-- 修改/添加日志 --> 
function xgrizhi(rizhi_pd,rizhi_id,rizhi_time,rizhi_content){
if (rizhi_pd == 1)
  {
   $('#xiugairznn .layui-layer-title').html('添加日志');
   $('#rizhi_sc').css('display','none');
  }
else
  {
   $('#xiugairznn .layui-layer-title').html('修改日志');
   $('#rizhi_sc').css('display','inline');
  }
$('#fuzhi1').val(rizhi_id);
$('#fuzhi2').val(rizhi_time);
var s = rizhi_content;
var re = new RegExp("<br>","g");
s = s.replace(re,"\n");
$('#fuzhi3').val(s);
$('#fuzhi31').val($('#register0').val());
$('#fuzhi32').val($('#gongzuozu').val());
$('#fuzhi33').val($('#userinfoZxy').val());
$('#fuzhi34').val($('#shijian1').val());
$('#fuzhi35').val($('#shijian2').val());
$('#xiugairznn').show(); 
}
function xgjihua(jihua_pd,jihua_id,jihua_time,jihua_content){
if (jihua_pd == 1)
  {
   $('#xiugaijhnn .layui-layer-title').html('添加计划');
   $('#jihua_sc').css('display','none');
  }
else
  {
   $('#xiugaijhnn .layui-layer-title').html('修改计划');
   $('#jihua_sc').css('display','inline');
  }
$('#fuzhi11').val(jihua_id);
$('#fuzhi12').val(jihua_time);
var s = jihua_content;
var re = new RegExp("<br>","g");
s = s.replace(re,"\n");
$('#fuzhi13').val(s);
$('#fuzhi31').val($('#register0').val());
$('#fuzhi32').val($('#gongzuozu').val());
$('#fuzhi33').val($('#userinfoZxy').val());
$('#fuzhi34').val($('#shijian1').val());
$('#fuzhi35').val($('#shijian2').val());
$('#xiugaijhnn').show(); 
}
function ckrizhi(rizhi_content){
parent.layer.open({
    type: 1,
    area: ['310px', '350px'], //宽高
    content: rizhi_content
});
}
$('#xiugairzxx').on('click', function(){
$('#xiugairznn').hide()
});
$('#xiugaijhxx').on('click', function(){
$('#xiugaijhnn').hide()
});
$(document).ready(function() {
<!-- 时间 --> 
var start = {
    elem: '#shijian1',
    format: 'YYYY-MM-DD',
    istime: false,
    istoday: true,
    choose: function(datas){
         end.min = datas; //开始日选好后，重置结束日的最小日期
         end.start = datas //将结束日的初始值设定为开始日
    }
};
var end = {
    elem: '#shijian2',
    format: 'YYYY-MM-DD',
    istime: false,
    istoday: true,
    choose: function(datas){
        start.max = datas //结束日选好后，重置开始日的最大日期
    }
};
var jihuatime = {
    elem: '#fuzhi12',
    format: 'YYYY-MM-DD',
    istime: false,
    istoday: true,
    choose: function(datas){
         end.min = <?php echo ($today); ?> //开始日选好后，重置结束日的最小日期
    }
};
laydate(start);
laydate(end);
laydate(jihuatime);

<!-- 二级联动 -->
$("#register0").change(function(){  //咨询员联动
$.ajax({
type:"post",
url:"<?php echo (DQURL); ?>Employee/yuangongliandong",
data:"zixunyuan=" + $("#register0").val(),
success:function(msg){
$("#userinfoZxy").html(msg);
}
});
});

$('.btn-primary').click(function () {  //筛选等待
  var $btn = $(this);
  $btn.button('loading');
    setTimeout(function(){
      $btn.button('reset');
  }, 2000);
});
});
</script>
</body>
</html>