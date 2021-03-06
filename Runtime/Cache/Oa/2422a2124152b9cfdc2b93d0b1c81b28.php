<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- <title>苗博士CRM网络管理系统</title> -->
<title>MBS</title>
<!--[if lt IE 8]>
<script>alert('本系统不支持IE6-8，请使用谷歌、火狐等浏览器\n或360、QQ等国产浏览器的极速模式浏览本页面！');</script>
<![endif]-->
<link href="<?php echo (CSS_URL); ?>/bootstrap.min.css?v=3.3.5" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/animate.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/style.min.css?v=3.2.0" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>/font-awesome.min.css" rel="stylesheet">
</head>
<body  class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden;">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa icon-remove-sign"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
						   <?php if($qq == '' ): ?><span><img alt="image" class="img-circle" src="<?php echo (IMG_URL); ?>/a<?php echo mt_rand(1,9);?>.jpg"/></span>
						   <?php else: ?>
						     <span><img alt="image" class="img-circle" src="<?php echo ($user_img); ?>"/></span><?php endif; ?>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="home.html">
                              <div class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?php echo ($username); ?></strong></span>
                               <span class="text-muted text-xs block"><?php echo ($userrolename); ?><b class="caret"></b></span>
                              </div>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="###" onClick="xiugaiimg('<?php echo ($userid); ?>')">修改头像</a></li>
                                <li><a href="javascript:xiugaizh('<?php echo (session('username_lf')); ?>')">修改密码</a></li>
                                <li class="divider"></li>
                                <li><a href="/index.php/oa/index/safe" onClick="if(confirm('确认退出?')) return true;else return false;">安全退出</a></li>
                            </ul>
                        </div>
                        <div class="logo-element"><i class="icon icon-plus"></i></div>
                    </li>
                    <?php if($_SESSION['user_role']==1 or in_array(3,$auth_ids)){ ?>
                    <li>
                        <a class="J_menuItem" href="<?php echo U('Addzixun/add');?>"><i class="fa icon-paste"></i> <span class="nav-label">添加咨询</span></a>
                    </li>
                    <?php }else{ ?>
                         <div style="display:none"><a class="J_menuItem" href="<?php echo U('Addzixun/add');?>"><i class="fa icon-paste"></i> <span class="nav-label">添加咨询</span></a></div>
                      <?php } if($_SESSION['user_role']==1 or in_array(18,$auth_ids)){ ?>
                    <li>
                        <a href="#">
                            <i class="fa icon-newspaper-o"></i>
                            <span class="nav-label">查看咨询</span>
                            <span class="fa icon-chevron-left arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('ManageZx/manage');?>?zx_timeStart=<?php echo ($yinianqian); ?>&zx_timeEnd=<?php echo ($today); ?>&">全部咨询</a>
                            </li>
                              <li>
                                <a class="J_menuItem" href="<?php echo U('ManageZx/manage');?>?zx_timeStart=<?php echo ($today); ?>&zx_timeEnd=<?php echo ($today); ?>&">今日咨询</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('ManageZx/manage');?>?zx_timeStart=<?php echo ($today); ?>&zx_timeEnd=<?php echo ($today); ?>&shifoudaozhen=2">今日预约</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('ManageZx/manage');?>?daozhen_timeStart=<?php echo ($today); ?>&daozhen_timeEnd=<?php echo ($today); ?>&shifoudaozhen=3">今日已到诊</a>
                            </li>
                             <li>
                                <a class="J_menuItem" href="<?php echo U('ManageZx/manage');?>?yuyueTimeStart=<?php echo ($today); ?>&yuyueTimeEnd=<?php echo ($today); ?>&shifoudaozhen=2">今日应到诊</a>
                            </li>
                             <li>
                                <a class="J_menuItem" href="<?php echo U('ManageZx/manage');?>?zx_timeStart=<?php echo ($yestoday); ?>&zx_timeEnd=<?php echo ($yestoday); ?>&">昨日咨询</a>
                            </li>
                             <li>
                                <a class="J_menuItem" href="<?php echo U('ManageZx/manage');?>?zx_timeStart=<?php echo ($yestoday); ?>&zx_timeEnd=<?php echo ($yestoday); ?>&shifoudaozhen=2">昨日预约</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('ManageZx/manage');?>?daozhen_timeStart=<?php echo ($yestoday); ?>&daozhen_timeEnd=<?php echo ($yestoday); ?>&shifoudaozhen=3">昨日到诊</a>
                            </li>


                            <li>
                                <a class="J_menuItem" href="<?php echo U('ManageZx/manage');?>?yuyueTimeStart=<?php echo ($tomorrow); ?>&yuyueTimeEnd=<?php echo ($tomorrow); ?>&shifoudaozhen=2">明日应到诊</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('ManageZx/manage');?>?zx_timeStart=<?php echo ($liangyueqian); ?>&zx_timeEnd=<?php echo ($yestoday); ?>&yuyueTimeEnd=<?php echo ($yestoday); ?>&shifoudaozhen=4">待跟踪回访</a>
                            </li>

                        </ul>
                    </li>
                     <?php }else{ } ?>
					
	                 <li>
                         <?php if($_SESSION['user_role']==1 or in_array(78,$auth_ids) or in_array(79,$auth_ids)) { ?>
                        <a href="#">
                            <i class="fa icon-bar-chart-alt"></i>
                            <span class="nav-label">回访管理</span>
                            <span class="fa icon-chevron-left arrow"></span>
                        </a>
                        <?php } ?>
                        <ul class="nav nav-second-level">

                         <?php if($_SESSION['user_role']==1 or in_array(78,$auth_ids)){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Returnvisit/returnvisit_list');?>">回访记录</a><!--15-->
                            </li>
                        <?php }else{ } if($_SESSION['user_role']==1 or in_array(79,$auth_ids)){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Returnvisit/huifangjihua_list');?>">回访计划</a><!--16-->
                            </li>
                          <?php }else{ } ?>         
                        </ul>
                    </li>
                    <li>
	
                    <li>
                         <?php if($_SESSION['user_role']==1 or in_array(15,$auth_ids) or in_array(16,$auth_ids) or in_array(53,$auth_ids) or in_array(52,$auth_ids) or in_array(54,$auth_ids) or in_array(56,$auth_ids)){ ?>
                        <a href="#">
                            <i class="fa icon-bar-chart-alt"></i>
                            <span class="nav-label">统计报表</span>
                            <span class="fa icon-chevron-left arrow"></span>
                        </a>
                        <?php } ?>
                        <ul class="nav nav-second-level">

                         <?php if($_SESSION['user_role']==1 or in_array(15,$auth_ids)){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Tongji/report_tongji');?>">数据报表</a><!--15-->
                            </li>
                        <?php }else{ } if($_SESSION['user_role']==1 or in_array(16,$auth_ids)){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Tongji/report_bingzhong');?>">病种报表</a><!--16-->
                            </li>
                          <?php }else{ } if($_SESSION['user_role']==1 or in_array(53,$auth_ids)){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Tongji/report_qudao');?>">推广渠道报表</a><!--53-->
                            </li>
                        <?php }else{ } if($_SESSION['user_role']==1 or in_array(52,$auth_ids)){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Tongji/report_fangshi');?>">咨询方式报表</a><!--52-->
                            </li>
                         <?php }else{ } if($_SESSION['user_role']==1 or in_array(54,$auth_ids)){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Tongji/report_zixunyuan');?>">咨询员报表</a><!--54-->
                            </li>
                            <?php }else{ } if($_SESSION['user_role']==1 or in_array(56,$auth_ids)){ ?>

                          <!--   <li>
                                <a class="J_menuItem" href="<?php echo U('Tongji/report_guanjianci');?>">关键词报表</a><!--54
                            </li> -->
                            <?php } ?>
                        </ul>
                    </li>
                   
                    <li>
					
					
                    <li>
                        <a href="#"><i class="fa icon-calendar"></i> <span class="nav-label">工作管理</span><span class="fa icon-chevron-left arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <!-- <li><a class="J_menuItem" href="<?php echo U('Employee/employee_gonggao');?>">会员管理</a></li> 
                            <li><a class="J_menuItem" href="<?php echo U('Employee/employee_paiban');?>">库房管理</a></li>  -->
                            <li><a class="J_menuItem" href="<?php echo U('Employee/employee_rizhi');?>">工作日志</a></li>
                            <!-- <li><a class="J_menuItem" href="<?php echo U('Employee/employee_xiangmu');?>">项目管理</a></li> -->
                        </ul>
                    </li>
<!--                    <li>
                        <a href="#"><i class="icon icon-list-alt"></i> <span class="nav-label">网站管理</span><span class="fa icon-chevron-left arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo U('Web/website_liuyan');?>">网站留言</a></li>
                        </ul>
                    </li>-->
                    <?php if($_SESSION['user_role']==1 or in_array(35,$auth_ids)){ ?>

                     <li>
                        <a class="J_menuItem" href="<?php echo U('SystemSite/system_yy');?>"><i class="fa icon-paste"></i> <span class="nav-label">门店管理</span> </a>
                    </li>
                        <?php } if($_SESSION['user_role']==1 or in_array(73,$auth_ids) or in_array(74,$auth_ids) or in_array(75,$auth_ids)){ ?>

                    <li>
                        <a href="#"><i class="icon icon-edit"></i> <span class="nav-label">操作日志</span><span class="fa icon-chevron-left arrow"></span></a>
                        <ul class="nav nav-second-level">
						<?php if($_SESSION['user_role']==1 or in_array(73,$auth_ids)){ ?>
                            <li><a class="J_menuItem" href="<?php echo U('Operationlog/denglu');?>">登录日志</a></li><!--73-->
						<?php } if($_SESSION['user_role']==1 or in_array(74,$auth_ids)){ ?>
                            <li><a class="J_menuItem" href="<?php echo U('Operationlog/updateyuyuetime');?>">预约日期修改记录</a></li><!--74-->
						<?php } if($_SESSION['user_role']==1 or in_array(75,$auth_ids)){ ?>
							<li><a class="J_menuItem" href="<?php echo U('Operationlog/buyuyuecaozuo');?>">补预约状态记录</a></li><!--75-->
						<?php } ?>
                        </ul>
						 <?php } ?>
                    </li>
                    <li>
                     <?php if($_SESSION['user_role']==1 or in_array(4,$auth_ids) or in_array(6,$auth_ids) or in_array(7,$auth_ids) or in_array(8,$auth_ids) or in_array(34,$auth_ids) or in_array(9,$auth_ids)){ ?>
                        <a href="#">
                            <i class="fa icon-cogs"></i>
                            <span class="nav-label">系统设置</span>
                            <span class="fa icon-chevron-left arrow"></span>
                        </a>
                        <?php } ?>
                        <ul class="nav nav-second-level">
                         <?php if($_SESSION['user_role']==1 or in_array(4,$auth_ids)){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Useradmin/system_zh');?>">账号管理</a><!--4-->
                            </li>
                        <?php }else{ } if($_SESSION['user_role']==1 or in_array(6,$auth_ids)){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('SystemSite/system_bz');?>">病种管理</a><!--6-->
                            </li>
                       <?php }else{ } if($_SESSION['user_role']==1 or in_array(7,$auth_ids)){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('SystemSite/system_zxfs');?>">咨询方式</a><!--7-->
                            </li>
                        <?php }else{ } if($_SESSION['user_role']==1 or in_array(8,$auth_ids)){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('SystemSite/system_xx');?>">信息来源</a><!--8-->
                            </li>
                        <?php }else{ } if($_SESSION['user_role']==1 or in_array(34,$auth_ids)){ ?>
                           <!--  <li>
                                <a class="J_menuItem" href="<?php echo U('SystemSite/system_message');?>">短信模版设置</a><!--34--
                            </li> -->
                       <?php }else{ } if($_SESSION['user_role']==1 or in_array(9,$auth_ids)){ ?>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Role/system_role');?>">权限组设置</a><!--9-->
                            </li>
                        <?php }else{ } if($_SESSION['user_role']==1){ ?>
                        <!--   <li>
                                <a class="J_menuItem" href="<?php echo U('Role/system_auth');?>">系统结构组</a>
                            </li> -->
                             <?php }else{ } ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1" style="overflow:hidden">
            <div class="row border-bottom visible-xs">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                   <div class="navbar-header" style="width:60px;"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#" style="padding:6px 15px;"><i class="fa icon-bars"></i></a></div>
                   <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a href="home.html" class="J_menuItem" data-index="0"><i class="fa icon-home" style="font-size:16px"></i>苗博士CRM网络管理系统</a>
                        </li>
                   </ul>
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa icon-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="home.html">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa icon-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive"><a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="/index.php/oa/index/safe" onClick="if(confirm('确认退出?')) return true;else return false;" class="roll-nav roll-right J_tabExit"><i class="fa icon-signout"></i> 退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe id="iframe0" class="J_iframe" name="iframe0" src="home.html" frameborder="0" data-id="home.html" seamless></iframe>
            </div>
            <div class="footer">
                <div class="pull-right">
<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center">&copy;2019 苗博士CRM网络管理系统<span class="hidden-xs">&nbsp;在线联系：乡间小路&nbsp;</span></td>
    <td class="hidden-xs">159-6123-3232</td>
  </tr>
</table>
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>
<!-- 全局js -->
<script src="<?php echo (JS_URL); ?>/jquery.min.js"></script>
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script>
<script src="<?php echo (JS_URL); ?>/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo (JS_URL); ?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!-- layerjs -->
<script src="<?php echo (JS_URL); ?>/plugins/layer/layer.min.js"></script>
<script>
function xiugaiimg(userid){
parent.layer.open({
    type: 2,
    title: '修改头像',
    shadeClose: true,
    shade: 0.8,
    area: ['310px', '150px'],
    content: '<?php echo (DQURL); ?>Useradmin/system_zhimg/userid/'+userid //iframe url
});
};
function xiugaizh(userid){
parent.layer.open({
    type: 2,
    title: '账号修改',
    shadeClose: true,
    shade: 0.8,
    area: ['310px', '400px'],
    content: '<?php echo (DQURL); ?>Useradmin/system_zhxg/userid/'+userid //iframe url
});
};
</script>

<!-- 自定义js -->
<script src="<?php echo (JS_URL); ?>/hplus.min.js?v=3.2.0"></script>
<script src="<?php echo (JS_URL); ?>/contabs.min.js" type="text/javascript"></script>

<!-- 第三方插件 -->
<script src="<?php echo (JS_URL); ?>/plugins/pace/pace.min.js"></script>

<script type="text/javascript">
var u = navigator.userAgent;
if (u.indexOf('Android') > -1 || u.indexOf('Linux') > -1) {
//安卓手机
} if (u.indexOf('iPhone') > -1){
//苹果手机
  document.getElementById("content-main").style.overflow = "scroll";
 } else if (u.indexOf('Windows Phone') > -1) {
//winphone手机

}
</script>
</body>
</html>