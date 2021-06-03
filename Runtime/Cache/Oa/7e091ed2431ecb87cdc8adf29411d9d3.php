<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo (CSS_URL); ?>/bootstrap.min.css?v=3.3.5" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/animate.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/plugins/iCheck/custom.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/style.min.css?v=3.2.0" rel="stylesheet">
</head>
<body   class="gray-bg">
<div class="wrapper wrapper-content animated fadeInUp">

    <!-- <div class='col-sm-12'>
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5><a class="collapse-link">最新公告</a></h5>
          <div class="ibox-tools"> <a class="collapse-link"> <i class="fa fa-wrench"></i> </a> </div>
        </div>
        <div class="ibox-content">
                        <div class="alert alert-warning">
                           通知：今天晚上演讲比赛大致流程：一、17：30前入场，18：00正式开始（要求今天在班人员全到，值班人员除外） <a class="alert-link" href="notifications.html#">了解更多</a>.
                        </div>
        </div>
      </div>
    </div> -->

  <?php if(($nodata != nodata) and ($_SESSION['user_role']== 6 or $_SESSION['user_role']== 1 or $_SESSION['user_role']== 2 or $_SESSION['user_role']== 3 or $_SESSION['user_role']== 4 or $_SESSION['user_role']== 5) ): ?><div class='col-sm-12'>
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5><a class="collapse-link">回访计划提醒</a></h5>
          <div class="ibox-tools"> <a class="collapse-link"> <i class="fa fa-wrench"></i> </a> </div>
        </div>
        <div class="ibox-content">
          <div class="huifjh">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class="hidden-xs">序号</th>
                  <th>咨询员</th>
                  <th class="hidden-xs">上次回访</th>
                  <th class="hidden-xs">共计回访</th>
                  <th class="hidden-xs">姓名</th>
                  <th class="hidden-xs">电话</th>
                  <th class="hidden-xs">门店</th>
                  <th class="hidden-xs">病种</th>
                  <th>计划回访主题</th>
                  <th class="hidden-xs">计划回访时间</th>
                  <th>开始回访</th>
                  <th>详细</th>
                </tr>
              </thead>
              <tbody>
                <?php if(is_array($hfjharr)): $i = 0; $__LIST__ = $hfjharr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td class="hidden-xs"><?php echo ($i); ?></td>
                    <td><?php echo ($vo["userchinaname"]); ?></td>
                    <td class="hidden-xs"><?php echo (mb_substr($vo["schfsj"],0,16,'utf-8')); ?></td>
                    <td class="hidden-xs"><a href="###" onClick="hfjl('<?php echo ($vo["zx_ID"]); ?>','<?php echo ($vo["hfjh_ID"]); ?>')" >回访<font color="#FF0000"><?php echo ($vo["huifangcishu"]); ?></font>次</a></td>
                    <td class="hidden-xs"><?php echo ($vo["xingming"]); ?></td>
                    <td class="hidden-xs"><?php echo ($vo["shouji"]); ?></td>
                    <td class="hidden-xs"><?php echo ($vo["yy_name"]); ?></td>
                    <td class="hidden-xs"><?php echo ($vo["bz_name"]); ?></td>
                    <td title="<?php echo ($vo["hfjh_zhuti"]); ?>"><?php echo (mb_substr($vo["hfjh_zhuti"],0,16,'utf-8')); ?></td>
                    <td class="hidden-xs"><?php echo (mb_substr($vo["hfjh_time"],0,16,'utf-8')); ?></td>
                    <?php if($vo["yanshi"] == '0'): ?><td><span class='badge badge-info'>已经完成</span><a href="###" onClick="hfxz('<?php echo ($vo["zx_ID"]); ?>','<?php echo ($vo["hfjh_ID"]); ?>')" > <span class='badge badge-info '>新增计划</span></a></td>
                      <?php else: ?>
                      <td><a href="###" onClick="hfdj('<?php echo ($vo["zx_ID"]); ?>','<?php echo ($vo["hfjh_ID"]); ?>')" ><span class='badge badge-danger'>登记回访</span></a><a href="###" onClick="hfxz('<?php echo ($vo["zx_ID"]); ?>','<?php echo ($vo["hfjh_ID"]); ?>')" > <span class='badge badge-info '>新增计划</span></a></td><?php endif; ?>
                    <td><?php if($vo["yanshi"] == '0'): ?><a href="###" onClick="ckjl('<?php echo ($vo["zxhf_ID"]); ?>','')" class="btn btn-white btn-sm">详情</a>
                        <?php else: ?>
                        <a href="###" class="btn btn-white btn-sm">暂无</a><?php endif; ?></td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div><?php endif; ?>

  <div class='col-sm-12 hidden-xs'>
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5><a class="collapse-link">统计简要</a></h5>
        <div class="hidden-xs" style="width:160px; margin-top:-10px; margin-left:10px;float:left">
                    <select class="form-control" name="yy_ID" id="register0" onchange="self.location.href=options[selectedIndex].value">
                      <option value="home?yy_ID=">所有门店</option>
                      <?php if(is_array($ssyy)): $i = 0; $__LIST__ = $ssyy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["yyid"] == $dqyyID): ?><option value="home?yy_ID=<?php echo ($vo["yyid"]); ?>" selected="selected"><?php echo ($vo["yyname"]); ?></option>
                      <?php else: ?>
                      <option value="home?yy_ID=<?php echo ($vo["yyid"]); ?>"><?php echo ($vo["yyname"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
         </div>
        <div class="ibox-tools">
          <?php echo ($nianyueri); ?> <?php echo ($xingqiji); ?>
        </div>
      </div>
      <div class="ibox-content">    
    <div class="text-center">今日有（<font color="#EC5564"><?php echo ($jinriyudaozhen); ?></font>）个客人预计到诊 <a href="javascript:void(0);" onClick="duoyong('/index.php/manage_zx/manage.html?yuyueTimeStart=<?php echo ($today); ?>&yuyueTimeEnd=<?php echo ($today); ?>&shifoudaozhen=2')">查看</a> |  今日有（<font color="#EC5564"><?php echo ($jinriyidaozhen); ?></font>）个已到诊客人 <a href="javascript:void(0);" onClick="duoyong('/index.php/manage_zx/manage.html?daozhen_timeStart=<?php echo ($today); ?>&daozhen_timeEnd=<?php echo ($today); ?>&shifoudaozhen=3')">查看</a> |  今日有（<font color="#EC5564"><?php echo ($jinriyuyue); ?></font>）个客人已预约 <a href="javascript:void(0);" onClick="duoyong('/index.php/manage_zx/manage.html?zx_timeStart=<?php echo ($today); ?>&zx_timeEnd=<?php echo ($today); ?>&shifoudaozhen=2')">查看</a> |  今日有（<?php echo ($jinrizixun); ?>）个客人已咨询 <a href="javascript:void(0);" onClick="duoyong('/index.php/manage_zx/manage.html?zx_timeStart=<?php echo ($today); ?>&zx_timeEnd=<?php echo ($today); ?>&')">查看</a></div>

        <div class="echarts" id="echarts-bar-chart"></div>
      </div>
    </div>
  </div>
 
  <?php if(is_array($jianbao)): $i = 0; $__LIST__ = $jianbao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class='col-sm-6'>
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5><a class="collapse-link"><?php echo ($vo["yyname"]); ?></a></h5>
          <div class="ibox-tools"> <a class="collapse-link"> <i class="fa fa-wrench"></i> </a> </div>
        </div>
        <div class="ibox-content" style="position:relative;overflow-x: hidden; min-height:275px;">
          <div class="hidden-xs" style="position:absolute; right:0px; top:5px; width:50px;">
          <?php if($vo["xuyaodao"] <= 0): ?><img src="<?php echo (IMG_URL); ?>/ld.png" width="40" style=" position:absolute; top:0;right:10px;">
          <img src="<?php echo (IMG_URL); ?>/lg.png" width="120" style=" position:absolute; top:-15px; right:-20px;" id="hongguan">
          <?php elseif($shengyutian < 3): ?>
           <?php if($vo["wanchenglv"] < 60): ?><img src="<?php echo (IMG_URL); ?>/hd.png" width="40" style=" position:absolute; top:0;right:10px;">
            <img src="<?php echo (IMG_URL); ?>/hg.png" width="120" style=" position:absolute; top:-15px; right:-20px;" id="lvguan">
           <?php else: ?>
            <img src="<?php echo (IMG_URL); ?>/wd.png" width="40" style=" position:absolute; top:0;right:10px;">
            <img src="<?php echo (IMG_URL); ?>/wg.png" width="120" style=" position:absolute; top:-15px; right:-20px;" id="huangguan"><?php endif; ?>
          <?php else: endif; ?>
          </div>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td>
本月目标:<font color="#1AB394"><?php echo ($vo["daozhenmubiao"]); ?>人</font>;目前日均到诊:<font color="#1AB394"><?php echo ($vo["rijundaozhen"]); ?></font>; 
<?php if($vo["xuyaodao"] <= 0 ): ?><font color='#1c84c6'>恭喜^_^</font>目标已经达成,请再接再厉；
<?php elseif($shengyutian == 0): ?>
完成还需:<font color="#1AB394"><?php echo ($vo["xuyaodao"]); ?></font>人;本月最后一天！赶紧冲一把！
<?php else: ?>
完成还需:<font color="#1AB394"><?php echo ($vo["xuyaodao"]); ?></font>人;余下<?php echo ($shengyutian); ?>日,日均任务<font color="#1AB394"><?php echo ($vo["shengyurijun"]); ?>人</font>;按此进度本月预计完成:<?php echo ($vo["yujidaozhen"]); ?>人;<?php endif; ?>
<div class="progress progress-striped active"  style="margin:8px 4px 8px 0; height:15px; overflow:hidden;">
    <div style="width:<?php echo ($vo["wanchenglvv"]); ?>%; position:relative;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo ($vo["wanchenglv"]); ?>" role="progressbar" class="progress-bar progress-bar-<?php echo ($vo["jindutiao"]); ?>">
        <span style=" position:absolute; left:0; top:0; width:200px;">目前完成进度:<?php echo ($vo["wanchenglv"]); ?>%</span>
    </div>
</div>
                </td>
              </tr>
            </tbody>
          </table>        
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>日期</th>
                <th>咨询</th>
                <th>预约</th>
                <th>应到</th>
                <th>到诊</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>今天</td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?zx_timeStart=<?php echo ($today); ?>&zx_timeEnd=<?php echo ($today); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>"><?php echo ($vo["today_zixun"]); ?></a></td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?zx_timeStart=<?php echo ($today); ?>&zx_timeEnd=<?php echo ($today); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>&shifoudaozhen=2"><?php echo ($vo["today_yuyue"]); ?></a></td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?yuyueTimeStart=<?php echo ($today); ?>&yuyueTimeEnd=<?php echo ($today); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>&shifoudaozhen=2"><?php echo ($vo["today_ydaozhen"]); ?></a></td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?daozhen_timeStart=<?php echo ($today); ?>&daozhen_timeEnd=<?php echo ($today); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>&shifoudaozhen=3"><?php echo ($vo["today_daozhen"]); ?></a></td>
              </tr>
              <tr>
                <td>昨天</td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?zx_timeStart=<?php echo ($yestoday); ?>&zx_timeEnd=<?php echo ($yestoday); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>"><?php echo ($vo["yestoday_zixun"]); ?></a></td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?zx_timeStart=<?php echo ($yestoday); ?>&zx_timeEnd=<?php echo ($yestoday); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>&shifoudaozhen=2"><?php echo ($vo["yestoday_yuyue"]); ?></a></td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?yuyueTimeStart=<?php echo ($yestoday); ?>&yuyueTimeEnd=<?php echo ($yestoday); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>&shifoudaozhen=2"><?php echo ($vo["yestoday_ydaozhen"]); ?></a></td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?daozhen_timeStart=<?php echo ($yestoday); ?>&daozhen_timeEnd=<?php echo ($yestoday); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>&shifoudaozhen=3"><?php echo ($vo["yestoday_daozhen"]); ?></a></td>
              </tr>
              <tr>
                <td>本月</td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?zx_timeStart=<?php echo ($benyueFirstday); ?>&zx_timeEnd=<?php echo ($today); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>"><?php echo ($vo["benyue_zixun"]); ?></a></td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?zx_timeStart=<?php echo ($benyueFirstday); ?>&zx_timeEnd=<?php echo ($today); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>&shifoudaozhen=2"><?php echo ($vo["benyue_yuyue"]); ?></a></td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?yuyueTimeStart=<?php echo ($benyueFirstday); ?>&yuyueTimeEnd=<?php echo ($today); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>&shifoudaozhen=2"><?php echo ($vo["benyue_ydaozhen"]); ?></a></td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?daozhen_timeStart=<?php echo ($benyueFirstday); ?>&daozhen_timeEnd=<?php echo ($today); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>&shifoudaozhen=3"><?php echo ($vo["benyue_daozhen"]); ?></a></td>
              </tr>
              <tr>
                <td>上月</td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?zx_timeStart=<?php echo ($shangyueFirstday); ?>&zx_timeEnd=<?php echo ($shangyueLastday); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>"><?php echo ($vo["shangyue_zixun"]); ?></a></td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?zx_timeStart=<?php echo ($shangyueFirstday); ?>&zx_timeEnd=<?php echo ($shangyueLastday); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>&shifoudaozhen=2"><?php echo ($vo["shangyue_yuyue"]); ?></a></td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?yuyueTimeStart=<?php echo ($shangyueFirstday); ?>&yuyueTimeEnd=<?php echo ($shangyueLastday); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>&shifoudaozhen=2"><?php echo ($vo["shangyue_ydaozhen"]); ?></a></td>
                <td><a class="J_menuItem" href="/index.php/manage_zx/manage.html?daozhen_timeStart=<?php echo ($shangyueFirstday); ?>&daozhen_timeEnd=<?php echo ($shangyueLastday); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>&shifoudaozhen=3"><?php echo ($vo["shangyue_daozhen"]); ?></a></td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td>上月环比: <?php echo ($vo["yuehuanbi"]); ?> &nbsp;本月到诊率: <?php echo ($vo["benyuedaozhenlv"]); if($vo["benyue_daozhen"] > 0): ?><span class="pie"><?php echo ($vo["benyue_daozhen"]); ?>/<?php echo ($vo["benyue_yuyue"]); ?></span><?php endif; ?></td>
                <td>明日应到诊：<a class="J_menuItem" href="javascript:void(0);" onClick="duoyong('/index.php/manage_zx/manage.html?yuyueTimeStart=<?php echo ($tomorrow); ?>&yuyueTimeEnd=<?php echo ($tomorrow); ?>&yy_ID=<?php echo ($vo["yy_ID"]); ?>&shifoudaozhen=2')"><font color="red"><?php echo ($vo["mingri_ydaozhen"]); ?></font></a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
  
  <div style=" clear:both"></div>
  
  <div class="col-sm-6">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5><a class="collapse-link">版本信息</a></h5>
        <div class="ibox-tools"> <a class="collapse-link"> <i class="fa fa-wrench"></i> </a> </div>
      </div>
      <div class="ibox-content">
        <p>当前版本： V3.0</p>
        <p>最新版本： V3.0 </p>
        <p>更新时间： 2019-10-10</p>
        <p>系统版本：苗博士网络高级运营版</p>
        <p>
          <a href="<?php echo U('Index/homedel');?>">系统有问题，请点击这里删除一下缓存</a>
        </p>
        <p>技术支持：乡间小路 15961233232</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5><a class="collapse-link">环境信息</a></h5>
        <div class="ibox-tools"> <a class="collapse-link"> <i class="fa fa-wrench"></i> </a> </div>
      </div>
      <div class="ibox-content">
      <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><?php echo ($key); ?>： <?php echo ($v); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
  </div>
  
</div>
</div>
<!-- 全局js --> 
<script src="<?php echo (JS_URL); ?>/jquery.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script> 
<!-- 自定义js --> 
<script src="<?php echo (JS_URL); ?>/content.min.js?v=1.0.0"></script> 
    <!-- Peity -->
    <script src="<?php echo (JS_URL); ?>/plugins/peity/jquery.peity.min.js"></script>
    <!-- Peity -->
    <script src="<?php echo (JS_URL); ?>/demo/peity-demo.min.js"></script>
<!-- layerjs --> 
<script src="<?php echo (JS_URL); ?>/plugins/layer/layer.min.js"></script> 
<script>
function hfdj(zx_ID,hfjh_id){
parent.layer.open({
    type: 2,
    title: '登记回访',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '<?php echo (DQURL); ?>Updatezixun/huifangdengji/zx_ID/'+zx_ID+'/hfjh_ID/'+hfjh_id //iframe url
});
};
function hfxz(zx_ID,hfjh_id){
parent.layer.open({
    type: 2,
    title: '新增计划',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '<?php echo (DQURL); ?>Updatezixun/huifangjihua/zx_ID/'+zx_ID+'/hfjh_ID/'+hfjh_id //iframe url
});
};
function hfjl(zx_ID,hfjh_id){
parent.layer.open({
    type: 2,
    title: '回访详细',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '<?php echo (DQURL); ?>Updatezixun/huifangxiangq/zx_ID/'+zx_ID+'/hfjh_ID/'+hfjh_id //iframe url
});
};
function duoyong(url){
parent.layer.open({
    type: 2,
    title: '咨询记录',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: url //iframe url
});
};
</script> 

<?php if($tubiao_zixun != ''): ?><!-- ECharts --> 
<script src="<?php echo (JS_URL); ?>/plugins/echarts/echarts-all.js"></script> 
<script>
$(function() {
    var i = echarts.init(document.getElementById("echarts-bar-chart"));
    var q = {
    title : {
        subtext: '<?php echo ($zx_timeStart); ?> - <?php echo ($zx_timeEnd); ?>'
    },
        tooltip: {
            trigger: "axis"
        },
        legend: {
            data:['咨询','预约','到诊']
        },
        grid: {
            x: 30,
            x2: 40,
            y2: 24
        },
    toolbox: {
        show : true,
        feature : {
            mark : {show: false},
            dataView : {show: false, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: false},
            saveAsImage : {show: true}
        }
    },
        calculable: true,
        xAxis: [{
            type: "category",
            data : [<?php echo ($tubiao_riqi); ?>]
        }],
    yAxis: [
        {
            type: 'value',
            show: true
        }
    ],
        series: [{
            name: "咨询",
            type: "bar",
            data: [<?php echo ($tubiao_zixun); ?>],
			itemStyle: {normal: {
				 label : {show: true}
			}},
            markPoint: {
                data: [{
                    type: "max",
                    name: "最大值"
                },
                {
                    type: "min",
                    name: "最小值"
                }]
            },
            markLine: {
                data: [{
                    type: "average",
                    name: "平均值"
                }]
            }
        },
        {
            name: "预约",
            type: "bar",
            data: [<?php echo ($tubiao_yuyue); ?>],
			itemStyle: {normal: {
				 label : {show: true}
			}},
            markPoint: {
                data: [{
                    type: "max",
                    name: "最大值"
                },
                {
                    type: "min",
                    name: "最小值"
                }]
            },
            markLine: {
                data: [{
                    type: "average",
                    name: "平均值"
                }]
            }
        },
        {
            name: "到诊",
            type: "bar",
            data: [<?php echo ($tubiao_daozhen); ?>],
			itemStyle: {normal: {
				 label : {show: true}
			}},
            markPoint: {
                data: [{
                    type: "max",
                    name: "最大值"
                },
                {
                    type: "min",
                    name: "最小值"
                }]
            },
            markLine: {
                data: [{
                    type: "average",
                    name: "平均值"
                }]
            }
        }]
    };
    i.setOption(q);
    window.onresize = i.resize;
});
</script><?php endif; ?>

<script type="text/javascript">
function ckjl(zxhf_id,zxhf_i){
parent.layer.open({
    type: 2,
    title: '回访详细',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '<?php echo (DQURL); ?>Updatezixun/huifangXiangqing/zxhf_ID/'+zxhf_id+'/cishu/'+1 //iframe url
});
};

function zthuoyan() {
if(zthuoyans==1){
$("[id=hongguan]").animate({right:'-40px',opacity:'1'},300);
$("[id=lvguan]").animate({right:'-40px',opacity:'1'},300);
$("[id=huangguan]").animate({right:'-40px',opacity:'1'},300);
zthuoyans=2;
}else{
$("[id=hongguan]").animate({right:'-20px',opacity:'.4'},300);
$("[id=lvguan]").animate({right:'-20px',opacity:'.4'},300);
$("[id=huangguan]").animate({right:'-20px',opacity:'.4'},300);
zthuoyans=1;
}
}
$(document).ready(function(){
 zthuoyans=1;
 setInterval(zthuoyan, 400);
});
</script>

</body>
</html>