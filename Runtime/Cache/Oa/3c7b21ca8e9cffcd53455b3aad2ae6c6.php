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
<div class="wrapper wrapper-content">
  <div class="panel blank-panel">
    <div class="panel-heading">
      <div class="panel-options">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="tabs_panels.html#tab-1" aria-expanded="true"><span class="hidden-xs">基本信息</span><span class="visible-xs">信息</span></a> </li>
          <li class=""><a data-toggle="tab" href="tabs_panels.html#tab-2" aria-expanded="false"><span class="hidden-xs">聊天记录</span><span class="visible-xs">聊天</span></a></a> </li>
          <li class=""><a data-toggle="tab" href="tabs_panels.html#tab-3" aria-expanded="false"><span class="hidden-xs">详细信息</span><span class="visible-xs">详情</span></a> </li>
          <li class=""><a data-toggle="tab" href="tabs_panels.html#tab-4" aria-expanded="false"><span class="hidden-xs">回访列表</span><span class="visible-xs">列表</span></a> </li>
          <li class=""><a data-toggle="tab" href="tabs_panels.html#tab-5" aria-expanded="false"><span class="hidden-xs">添加回访</span><span class="visible-xs">回访</span></a> </li>
          <li class=""><a data-toggle="tab" href="tabs_panels.html#tab-6" aria-expanded="false"><span class="hidden-xs">回访计划</span><span class="visible-xs">计划</span></a> </li>
          <div class="ibox-tools" style="margin-top:0px;"> <a class="btn btn-w-m btn-primary" href="<?php echo U('ManageZx/manage');?>?<?php echo ($dqURLcanshu); ?>" id="xibox-tools"> <i class="icon icon-exchange"></i> 返回 </a> </div>
        </ul>
      </div>
    </div>
    <div class="panel-body" style="padding:5px 0px 0px 0px;">
      <div class="tab-content">
        <div id="tab-1" class="tab-pane active form-horizontal">
          <form action="/index.php/oa/updatezixun/daozhenXQ" method="post" id="jibenForm" class="form-horizontal">
              <div class="col-sm-6">
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                    <h5><a class="collapse-link">预约信息</a></h5>
                    <div class="ibox-tools"> <a class="collapse-link"> <i class="fa fa-wrench"></i> </a> </div>
                  </div>
                  <div class="ibox-content">
                    <div class="form-group">
                      <label class="col-sm-12">当前状态</label>
                      <div class="col-sm-12">
                        <input class="form-control" value="<?php echo ($zhuangtai); ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">预约时间</label>
                      <div class="col-sm-12">
                        <input class="form-control" value="<?php echo (substr($zixun[0]['yuyueTime'],0,16)); ?>" placeholder="YYYY-MM-DD hh:mm" readonly>
						
						
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">预约号</label>
                      <div class="col-sm-12">
                        <input class="form-control" value="<?php echo ($huanzeyuyue[0]['yuyuehao']); ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">预约备注</label>
                      <div class="col-sm-12">
                      <textarea readonly class="ibox-content" style="width:100%; background:#EEEEEE; border:1px #E5E6E7 solid"><?php echo ($huanzeyuyue[0]['yuyueBeizhu']); ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">就诊医生</label>
                      <div class="col-sm-12">
                        <select name="jiuzhenyishengID" class="form-control">
                          <!-- 管理登录时可换/默认同账号 -->
                          <option value="">请选择</option>
                          <?php if(is_array($doctor)): $i = 0; $__LIST__ = $doctor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($huanzeyuyue[0]['jiuzhenyishengID'] == $vo["doctor_ID"] ): ?><option value="<?php echo ($vo["doctor_ID"]); ?>" selected="selected"><?php echo ($vo["doctor_name"]); ?></option>
                              <?php else: ?>
                              <option value="<?php echo ($vo["doctor_ID"]); ?>"><?php echo ($vo["doctor_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <font color="#1CA706">预约医生：<?php echo ($doctor_name); ?></font> </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">到诊时间<?php echo ($quanjuquxiao); ?></label>
                      <div class="col-sm-12">
                        <input  placeholder="YYYY-MM-DD hh:mm" type="text" name="daozhen_time" class="form-control doubledate" <?php echo ($quanju); ?> value="<?php echo ($daozhentime); ?>"/>
                        <input type="hidden" name="URLcs" value="<?php echo ($dqURLcanshu); ?>"/>
                        <input type="hidden" name="zixunID" value="<?php echo ($zixun[0]['zx_ID']); ?>"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                    <h5><a class="collapse-link">咨询信息</a></h5>
                    <div class="ibox-tools"> <a class="collapse-link"> <i class="fa fa-wrench"></i> </a> </div>
                  </div>
                  <div class="ibox-content">
                    <div class="form-group">
                      <label class="col-sm-12">所属门店</label>
                      <div class="col-sm-12">
                        <input class="form-control" value="<?php echo ($zixun[0]['yy_name']); ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">咨询时间</label>
                      <div class="col-sm-12">
                        <input class="form-control" value="<?php echo (substr($zixun[0]['zx_time'],0,16)); ?>" placeholder="YYYY-MM-DD hh:mm" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">咨询科室</label>
                      <div class="col-sm-12">
                        <input class="form-control" value="<?php echo ($zixun[0]['bz_name']); ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">客户姓名</label>
                      <div class="col-sm-12">
                        <input class="form-control" value="<?php echo ($zixun[0]['huanzeName']); ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">联系手机</label>
                      <div class="col-sm-12">
                        <input class="form-control" value="<?php echo ($zixun[0]['shouji']); ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">咨询客服</label>
                      <div class="col-sm-12">
                        <input class="form-control" value="<?php echo ($zixun[0]['userchinaname']); ?>" readonly>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-12">预约时间修改记录</label>
                      <div class="col-sm-12">
                        <input class="form-control" value="<?php echo ($oldyytime); ?>" readonly>
                        
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
                        <?php if(($_SESSION['user_role'] == 1 or $_SESSION['user_role'] == 2 or $_SESSION['user_role'] == 6) and $zixun[0]['shifouyuyue'] == 0 ): ?><input type="hidden" id="jibentj" value="<?php echo ($dianji); ?>"/>
                          <button class="btn btn-primary" type="submit" name="submit1" value="<?php echo ($dianji); ?>" />
                          <?php echo ($dianji); ?>
                          </button><?php endif; ?>
                        <!--<button class="btn btn-white" type="reset">删除本条</button>--> 
                        <div class="ibox-tools" style="margin-top:0px;"> <a class="btn btn-w-m btn-primary" href="<?php echo U('ManageZx/manage');?>?<?php echo ($dqURLcanshu); ?>" id="xibox-tools"> <i class="icon icon-exchange"></i> 返回 </a> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </form>
        </div>
        <div id="tab-2" class="tab-pane">
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                    <h5><a class="collapse-link">聊天信息</a></h5>
                    <div class="ibox-tools"> <a class="collapse-link"> <i class="fa fa-wrench"></i> </a> </div>
                  </div>
                  <div class="ibox-content">
                    <div class="form-group">
                      <div class="col-sm-12">
                        <div class="ibox-content no-padding gy-ltjl">
                          <textarea class="summernote" name="liaotianjilu" id="editor"><?php echo ($huanzexinxi[0]['liaotianjilu']); ?></textarea>
                        </div>
                        <input type="file" id="File1" name="fujian" class="form-control" style="border-top:0px">
                        <?php if($huanzexinxi[0]['fujian'] == ''): ?><span class="badge badge-default">暂无附件</span>
                          <?php elseif($yinpin == 0): ?>
                          <a href="###" onClick="ckfjj()"><span class="badge badge-warning">查看附件</span></a>
                          <?php else: ?>
                          <a href="###" onClick="ckfj()"><span class="badge badge-warning">查看附件</span></a><?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <div id="tab-3" class="tab-pane">
          <form action="/index.php/oa/updatezixun/zixun_update" method="post" id="contact-form" enctype="multipart/form-data" class="form-horizontal">
              <div class="col-sm-6">
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
                      <label class="col-sm-12">所属门店</label>
                      <div class="col-sm-12">
                        <select class="form-control" name="yy_ID" id="register0">
                          <!-- 默认账号登记的门店 -->
                          <?php if(is_array($ssyy)): $i = 0; $__LIST__ = $ssyy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($zixun[0]['yy_ID'] == $vo["yyid"] ): ?><option value="<?php echo ($vo["yyid"]); ?>" selected="selected"><?php echo ($vo["yyname"]); ?></option>
                              <?php else: ?>
                              <option value="<?php echo ($vo["yyid"]); ?>"><?php echo ($vo["yyname"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">咨询方式</label>
                      <div class="col-sm-12">
                        <select class="form-control" name="zxfs_ID" id="userinfo0">
                   <?php echo (zxfs_down_eyy2(0,$zxfs_ID,0,$yy_ID,$cishu)); ?>
                        </select>
                        <input name="zxfs_IDpd" type="text" id="zxfs_IDpd" style="position:fixed;top:-200px;width:0px;height:0px;" value="okokok">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">咨询病种<?php echo ($cccc); ?></label>
                      <div class="col-sm-12">
                        <select class="form-control" name="bz_ID" id="userinfoBz">
                   <?php echo (column_down_eyy2(0,$bz_ID,0,$yy_ID,$cishu)); ?>
                        </select>
                        <input type="text" name="bz_IDpd" id="bz_IDpd" style="position:fixed;top:-200px;width:0px;height:0px;" value="okokok">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">客户姓名</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="huanzeName" value="<?php echo ($zixun[0][huanzeName]); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">联系手机</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="sjjc" name="shouji" value="<?php echo ($zixun[0]['shouji']); ?>">
                    <textarea id="shouji_cf" name="shouji_cf" style="position:fixed;top:-200px;width:0px;height:0px;"></textarea>
                    <span id="userinfosjjc"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">咨询客服</label>
                      <div class="col-sm-12">
					 <?php if($qj_zixunyuan == disabled): ?><select class="form-control" name="userID" id="userinfoZxy" readonly>
                          <?php if(is_array($zixunyuan)): $i = 0; $__LIST__ = $zixunyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($zixun[0]['userID'] == $vo["user_ID"] ): ?><option value="<?php echo ($vo["user_ID"]); ?>" selected="selected"><?php echo ($vo["userchinaname"]); ?></option>
                              <?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
                        </select>
					 <?php else: ?>
					     <select class="form-control" name="userID" id="userinfoZxy" readonly>
                          <?php if(is_array($zixunyuan)): $i = 0; $__LIST__ = $zixunyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($zixun[0]['userID'] == $vo["user_ID"] ): ?><option value="<?php echo ($vo["user_ID"]); ?>" selected="selected"><?php echo ($vo["userchinaname"]); ?></option>
                              <?php else: ?>
							  <option value="<?php echo ($vo["user_ID"]); ?>"><?php echo ($vo["userchinaname"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </select><?php endif; ?>
					 
					 
					 
					 <!-- 
					 
					 <select class="form-control" name="userID" id="userinfoZxy" <?php echo ($qj_zixunyuan); ?>/>
						<?php if(is_array($zixunyuan)): $i = 0; $__LIST__ = $zixunyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($zixun[0]['userID'] == $vo["user_ID"] ): ?><option value="<?php echo ($vo["user_ID"]); ?>" selected="selected"><?php echo ($vo["userchinaname"]); ?></option>
							<?php elseif($qj_zixunyuan == readonly): ?>
							<?php else: ?>
							  <option value="<?php echo ($vo["user_ID"]); ?>"><?php echo ($vo["userchinaname"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</select> -->
					
					
					
					
					
					
					
					
					
                      </div>
                      
                    </div>
                         <div class="form-group">
                          <label class="col-sm-12">咨询时间</label>
<div class="col-sm-7"><input name="zx_time" type="text" class="form-control" id="userinfozxtime"  placeholder="YYYY-MM-DD" onClick="laydate({istime: true, format: 'YYYY-MM-DD'})"  value='<?php echo (substr($zixun[0]['zx_time'],0,10)); ?>' readonly/></div>
<div class="col-sm-5"><input name="zx_timee" type="text" class="form-control clockpicker" placeholder="hh:mm" value='<?php echo (substr($zixun[0]['zx_time'],11,5)); ?>'/></div>
                         </div>

                  </div>
                </div>
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                    <h5><a class="collapse-link">详细信息</a></h5>
                    <div class="ibox-tools"> <a class="collapse-link"> <i class="fa fa-wrench"></i> </a> </div>
                  </div>
                  <div class="ibox-content">
                    <div class="form-group">
                      <label class="col-sm-12">QQ号码</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="QQhaoma" value="<?php echo ($huanzexinxi[0]['QQhaoma']); ?>">
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-12">微信号</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="weixinhao" value="<?php echo ($huanzexinxi[0]['weixinhao']); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">性别</label>
                      <div class="col-sm-12">
                        <select class="form-control" name="xingbie">
                          <option value="1" <?php echo ($xingbie1); ?>>男</option>
                          <option value="2" <?php echo ($xingbie2); ?>>女</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">婚姻</label>
                      <div class="col-sm-12">
                        <select class="form-control" name="hunyin">
                          <option value="1" <?php echo ($hunyin1); ?>>未婚</option>
                          <option value="0" <?php echo ($hunyin2); ?>>已婚</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">年龄</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="age" id="shengri" value="<?php echo ($huanzexinxi[0]['age']); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">生日</label>
                      <div class="col-sm-12">
                        <input class="form-control layer-date" value="<?php echo ($huanzexinxi[0]['shengri']); ?>" placeholder="YYYY-MM-DD" onClick="laydate({istime: false, format: 'YYYY-MM-DD'})" name="shengri">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">职业</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" value="<?php echo ($huanzexinxi[0]['zhiye']); ?>" name="zhiye">
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
                    
                    <div class="col-sm-6" style="padding-left:0px;">
                    <div class="form-group">
                      <label class="col-sm-12">消费</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" value="<?php echo ($huanzeyuyue[0]['xiaofei']); ?>" name="xiaofei">
                      </div>
                    </div>
                    </div>
				
                    
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                    <h5><a class="collapse-link">预约信息</a></h5>
                    <div class="ibox-tools"> <a class="collapse-link"> <i class="fa fa-wrench"></i> </a> </div>
                  </div>
                  <div class="ibox-content">
				  
				  
                    <div class="form-group">
                      <label class="col-sm-12">预约时间</label>
                      <div class="col-sm-12">
					
                        <input class="form-control layer-date" onClick="laydate({istime:true, format:'YYYY-MM-DD hh:mm'})"      placeholder="YYYY-MM-DD hh:mm" value="<?php echo (substr($zixun[0]['yuyueTime'],0,16)); ?>" name="yuyueTime" id="yuyuepd">
						
						
                      </div>
                    </div>
					
					
                    <div class="form-group">
                      <label class="col-sm-12">预约医生</label>
                      <div class="col-sm-12">
                        <select class="form-control" name="yuyueyishengID" id="userinfoYuyueys">
                          <option>未选择预约医生</option>
                          <?php if(is_array($yisheng)): $i = 0; $__LIST__ = $yisheng;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($huanzeyuyue[0]['yuyueyishengID'] == $vo["doctor_ID"] ): ?><option value="<?php echo ($vo["doctor_ID"]); ?>" selected="selected"><?php echo ($vo["doctor_name"]); ?></option>
                              <?php else: ?>
                              <option value="<?php echo ($vo["doctor_ID"]); ?>"><?php echo ($vo["doctor_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">预约号</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="yuyuehao" value="<?php echo ($huanzeyuyue[0]['yuyuehao']); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">预约备注</label>
                      <div class="col-sm-12">
                      <textarea class="ibox-content" style="width:100%; border:1px #E5E6E7 solid" name="yuyueBeizhu" id="editor"><?php echo ($huanzeyuyue[0]['yuyueBeizhu']); ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                    <h5><a class="collapse-link">聊天信息</a></h5>
                    <div class="ibox-tools"> <a class="collapse-link"> <i class="fa fa-wrench"></i> </a> </div>
                  </div>
                  <div class="ibox-content">
                    <div class="form-group">
                      <div class="col-sm-12">
                        <div class="ibox-content no-padding">
                          <textarea class="summernote" name="liaotianjilu" id="editor"><?php echo ($huanzexinxi[0]['liaotianjilu']); ?></textarea>
                        </div>
                        <input type="file" id="File1" name="fujian" class="form-control" style="border-top:0px">
                        <?php if($huanzexinxi[0]['fujian'] == ''): ?><span class="badge badge-default">暂无附件</span>
                          <?php elseif($yinpin == 0): ?>
                          <a href="###" onClick="ckfjj()"><span class="badge badge-warning">查看附件</span></a>
                          <?php else: ?>
                          <a href="###" onClick="ckfj()"><span class="badge badge-warning">查看附件</span></a><?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                    <h5><a class="collapse-link">来源信息</a></h5>
                    <div class="ibox-tools"> <a class="collapse-link"> <i class="fa fa-wrench"></i> </a> </div>
                  </div>
                  <div class="ibox-content">
                    <div class="form-group">
                      <label class="col-sm-12">商务通永久身份</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="yongjiushenfen" value="<?php echo ($zixun[0]['yongjiushenfen']); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">商务通访问时间</label>
                      <div class="col-sm-12">
                        <input type="text" name="chucifangwen" id="chucifangwen" value="<?php echo ($zixun[0]['chucifangwen']); ?>" class="form-control layer-date" placeholder="YYYY-MM-DD hh:mm:ss">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">来源网站</label>
                      <div class="col-sm-12">
                        <select class="form-control" name="laiyuanwangzhan" id="userinfoWz">
                          <option value="">请选择网站</option>
                          <?php if(is_array($laiyuanwangzhan)): $i = 0; $__LIST__ = $laiyuanwangzhan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($zixun[0]['laiyuanwangzhan'] == $vo["wangzhan_ID"] ): ?><option value="<?php echo ($vo["wangzhan_ID"]); ?>" selected="selected"><?php echo ($vo["wangzhan_url"]); ?></option>
                              <?php else: ?>
                              <option value="<?php echo ($vo["wangzhan_ID"]); ?>"><?php echo ($vo["wangzhan_url"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">信息来源</label>
                      <div class="col-sm-12">
                        <select class="form-control" name="xx_ID" id="userinfoXxly">
                          <option value="">请选择信息来源</option>
                          <?php if(is_array($xinxilaiyuan)): $i = 0; $__LIST__ = $xinxilaiyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($zixun[0]['xx_ID'] == $vo["ID"] ): ?><option value="<?php echo ($vo["ID"]); ?>" selected="selected"><?php echo ($vo["xx_name"]); ?></option>
                              <?php else: ?>
                              <option value="<?php echo ($vo["ID"]); ?>"><?php echo ($vo["xx_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-12">IP地址</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="IPdizhi" value="<?php echo ($zixun[0]['IPdizhi']); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">访问入口</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="fangwenrukou" value="<?php echo ($zixun[0]['fangwenrukou']); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">咨询页面</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="faqizixun" value="<?php echo ($zixun[0]['faqizixun']); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">搜索关键词</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="guanjianci" value="<?php echo ($zixun[0]['guanjianci']); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">匹配关键词</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="ppguanjianci" value="<?php echo ($zixun[0]['ppguanjianci']); ?>">
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
                        <input type="hidden" name="zx_ID" value="<?php echo ($_GET['zx_ID']); ?>">
                        <input type="hidden" name="URLcs" value="<?php echo ($dqURLcanshu); ?>">
                        <button class="btn btn-primary" type="submit" name="submit1" id="endtijiao">保存内容</button>
                        <button class="btn btn-white" type="reset">重置</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </form>
        </div>
        <div id="tab-4" class="tab-pane">
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
                  <th>操作</th>
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
                    <td><a href="javascript:void(0);" onClick="shanchujh('/index.php/oa/updatezixun/huifang_del?<?php echo ($dqURLcanshu); ?>&zxhf_ID=<?php echo ($data["zxhf_ID"]); ?>')" class="btn btn-white btn-sm" >删除</a>&nbsp;<a href="###" onClick="ckjl('<?php echo ($data["zxhf_ID"]); ?>','<?php echo ($i); ?>')" class="btn btn-white btn-sm">查看记录</a></td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
          </div>
          </div>
        </div>
        <div id="tab-5" class="tab-pane">
          <div class="col-sm-12">
          <form action="/index.php/oa/updatezixun/huifang_insert" method="post" id="contact-formm" class="form-horizontal" enctype="multipart/form-data">
            <div class="ibox float-e-margins">
              <div class="ibox-content">
                <div class="form-group">
                  <label class="col-sm-12">患者姓名</label>
                  <div class="col-sm-12">
                    <input class="form-control" value="<?php echo ($zixun[0][huanzeName]); ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-12">联系电话</label>
                  <div class="col-sm-12">
                    <input class="form-control" value="<?php echo ($zixun[0][shouji]); ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-12">预约时间</label>
                  <div class="col-sm-12">
                    <input class="form-control" value="<?php echo (substr($zixun[0]['yuyueTime'],0,16)); ?>" placeholder="YYYY-MM-DD hh:mm" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-12">回访时间</label>
                  <div class="col-sm-12">
                    <input class="form-control layer-date" placeholder="YYYY-MM-DD hh:mm" value="<?php echo ($daozhentime); ?>" name="hf_time" <?php echo ($quanju_hfsj); ?>>
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
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="hidden" name="zx_ID" value="<?php echo ($_GET['zx_ID']); ?>">
                    <input type="hidden" name="URLcs" value="<?php echo ($dqURLcanshu); ?>">
                    <input type="hidden" name="benye" value="1">
                    <button class="btn btn-primary" type="submit" name="submit_addhuifang">确认添加</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
        <div id="tab-6" class="tab-pane">
          <div class="col-sm-12">
          <div class="ibox-content">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>计划时间</th>
                  <th>计划主题</th>
                  <th>是否回访</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                <?php if(is_array($hfjh)): $i = 0; $__LIST__ = $hfjh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($vo["hfjh_time"]); ?></td>
                    <td><?php echo ($vo["hfjh_zhuti"]); ?></td>
                    <td><?php if($vo["zxhf_ID"] == ''): ?>待跟踪
                        <?php else: ?>
                        已回访<?php endif; ?></td>
                    <td><a href="javascript:void(0);" onClick="shanchujh('/index.php/oa/updatezixun/huifangjihua_del?<?php echo ($dqURLcanshu); ?>&hfjh_ID=<?php echo ($vo["hfjh_ID"]); ?>')" class="btn btn-white btn-sm">删除</a>&nbsp;
                      <?php if($vo["zxhf_ID"] == ''): ?><a href="###" onClick="hfdj('<?php echo ($vo["zx_ID"]); ?>','<?php echo ($vo["hfjh_ID"]); ?>','<?php echo ($dqURLcanshu); ?>')" class="btn btn-white btn-sm">回访登记</a>
                        <?php else: ?>
                        <span class="btn btn-info btn-sm">已经回访</span><?php endif; ?></td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
          </div>
          <div class="ibox float-e-margins">
            <div class="ibox-content">
              <div class="form-group">
                <label>患者姓名</label>
                <div>
                  <input class="form-control" value="<?php echo ($zixun[0][huanzeName]); ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label>联系电话</label>
                <div>
                  <input class="form-control" value="<?php echo ($zixun[0][shouji]); ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label>预约时间</label>
                <div>
                  <input class="form-control" value="<?php echo (substr($zixun[0]['yuyueTime'],0,16)); ?>" readonly>
                </div>
              </div>
              <form action="/index.php/oa/updatezixun/huifangjihua_insert" method="post" id="contact-formm" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-12">计划时间</label>
                  <div class="col-sm-12">
                    <input class="form-control layer-date" onClick="laydate({istime:true, format: 'YYYY-MM-DD'})"    placeholder="YYYY-MM-DD hh:mm" value="<?php echo ($daozhentime); ?>" name="hfjh_time" id="todayy">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-12">计划主题</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="hfjh_zhuti" id="zhuti">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="hidden" name="zx_ID" value="<?php echo ($_GET['zx_ID']); ?>">
                    <input type="hidden" name="yy_ID" value="<?php echo ($zixun[0]["yy_ID"]); ?>">
                    <input type="hidden" name="user_ID" value="<?php echo ($zixun[0]["userID"]); ?>">
                    <input type="hidden" name="URLcs" value="<?php echo ($dqURLcanshu); ?>">
                    <input type="hidden" name="MAX_FILE_SIZE" value="500000000">
                    <button class="btn btn-primary" type="submit" value="确定" name="submit_addhuifang">确认添加</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="layui-layer-shade" style="z-index:99000; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none" id="tubiaonn">
  <div class="layui-layer layui-anim layui-layer-page layer-ext-moon" style="z-index:19891020;width:90%;height:90%;left:50%;top:5%;margin-left:-45%;">
    <div class="layui-layer-title" style="cursor: move;">查看附件</div>
    <div class="layui-layer-content">
      <div class="animated fadeInUp">
        <div class="ibox-content">
          <div class="row">
            <div class="col-sm-12">
              <div class="ibox-content" style="margin-top:20px;">
                  <?php if($yinpin == 0): ?><div class="player">
                  <audio controls> 
                    <!-- Audio files -->
                    <source src="/Oa/Uploads_lf/<?php echo ($huanzexinxi[0]['fujian']); ?>" type="audio/mp3">
                    <!-- Fallback for browsers that don't support the <audio> element --> 
                    您的浏览器不支持在线播放，请<a href="/oa/Uploads_lf/<?php echo ($huanzexinxi[0]['fujian']); ?>">点击下载</a> </audio>
                </div>
                <small><a href="/Oa/Uploads_lf/<?php echo ($huanzexinxi[0]['fujian']); ?>" target="_blank">点击下载</a></small>
                  <?php else: ?>
                  <span class="badge badge-default">暂无影音附件</span><?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <span class="layui-layer-setwin" id="tubiaoxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:void(0);"></a></span> </div>
</div>

<!-- 全局js --> 
<script src="<?php echo (JS_URL); ?>/jquery.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script> 
<!-- 自定义js --> 
<script src="<?php echo (JS_URL); ?>/content.min.js?v=1.0.0"></script> 
<!-- 时钟 -->
<script src="<?php echo (JS_URL); ?>/plugins/clockpicker/clockpicker.js"></script>
<link href="<?php echo (CSS_URL); ?>/plugins/clockpicker/clockpicker.css" rel="stylesheet">
<script type="text/javascript">
$('.clockpicker').clockpicker();
</script>
<!-- layerDate plugin javascript --> 
<script src="<?php echo (JS_URL); ?>/plugins/layer/laydate/laydate.js"></script> 
<script>
var shijian11 = {
    elem: '#shijian11',
    format: 'YYYY-MM-DD hh:mm',
    istime: true,
    istoday: true,
    choose: function(datas){
    shijian12.min = datas; //开始日选好后，重置结束日的最小日期
	shijian12.start = datas //将结束日的初始值设定为开始日
    }
};
var shijian12 = {
    elem: '#shijian12',
    format: 'YYYY-MM-DD hh:mm',
    istime: true,
    istoday: true,
    choose: function(datas){
    shijian11.max = datas; //结束日选好后，重置开始日的最大日期
    }
};
var yuyuepd = {
    elem: '#yuyuepd',
    format: 'YYYY-MM-DD hh:mm',
    min: laydate.now(),
    istime: true,
    istoday: true
};
var todayy = {
    elem: '#todayy',
    format: 'YYYY-MM-DD hh:mm',
    min: laydate.now(),
    istime: true,
    istoday: true
};
laydate(shijian11);
laydate(shijian12);
laydate(yuyuepd);
laydate(todayy);
</script>
<!-- Prettyfile -->
<script src="<?php echo (JS_URL); ?>/plugins/prettyfile/bootstrap-prettyfile.js"></script>
<!-- SUMMERNOTE --> 
<script src="<?php echo (JS_URL); ?>/plugins/summernote/summernote.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/plugins/summernote/summernote-zh-CN.js"></script> 
<script>
$( 'input[type="file"]' ).prettyFile();
$(document).ready(function(){$(".summernote").summernote({lang:"zh-CN"})});var edit=function(){$("#eg").addClass("no-padding");$(".click2edit").summernote({lang:"zh-CN",focus:true})};var save=function(){$("#eg").removeClass("no-padding");var a=$(".click2edit").code();$(".click2edit").destroy()};
</script> 
<!-- plyr --> 
<script>
(function(d,u){var a=new XMLHttpRequest(),b=d.body;if("withCredentials" in a){a.open("GET",u,true);a.send();a.onload=function(){var c=d.createElement("div");c.setAttribute("hidden","");c.innerHTML=a.responseText;b.insertBefore(c,b.childNodes[0])}}})(document, "https://cdn.plyr.io/1.3.7/sprite.svg");
</script> 
<script src="<?php echo (CSS_URL); ?>/plugins/plyr/plyr.js"></script>
<link rel="stylesheet" href="<?php echo (CSS_URL); ?>/plugins/plyr/plyr.css">
<script>
plyr.setup();
</script> 
<!-- layerjs --> 
<script src="<?php echo (JS_URL); ?>/plugins/layer/layer.min.js"></script> 
<script>
<!-- 首次加载 --> 
<!--$('.nav-tabs li:eq(1) a').tab('show')-->
$.ajax({
  type: "post",
  url: "<?php echo (DQURL); ?>Addzixun/zxtimexg",
  data: "yyid=" + $("#register0").val(),
  success: function(msg) {
	$("#userinfozxtime").attr("class", msg);
	$('.readonly1').removeAttr("readonly");
	$(".readonly1").attr("onclick","laydate({istime: true, format: 'YYYY-MM-DD'})");
	$('.readonly2').attr("readonly","readonly");
	$(".readonly2").removeAttr("onclick");
  }
});
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
function ckjl(zxhf_id,zxhf_i){
parent.layer.open({
    type: 2,
    title: '查看记录',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '/index.php/oa/updatezixun/huifangXiangqing/zxhf_ID/'+zxhf_id+'/cishu/'+zxhf_i //iframe url
});
};
function hfdj(zx_ID,hfjh_id,URLcs){
parent.layer.open({
    type: 2,
    title: '回访登记',
    shadeClose: true,
    shade: 0.8,
    area: ['90%', '96%'],
    content: '/index.php/oa/updatezixun/huifangdengji/zx_ID/'+zx_ID+'/hfjh_ID/'+hfjh_id+'/URLcs/'+URLcs //iframe url
});
};
function ckfj(){
layer.open({
    type: 2,
    title: '查看附件',
    shadeClose: true,
    area: ['90%', '96%'],
    shade: 0.8,
    shadeClose: true,
    content: "/Oa/Uploads_lf/<?php echo ($huanzexinxi[0]['fujian']); ?>"
});
};
function ckfjj(){
$('#tubiaonn').show();
};
$('#tubiaoxx').on('click', function(){
$('#tubiaonn').hide();
});
function shanchujh(urlid){
parent.layer.confirm('确定删除？ 删除不能恢复!', {
    btn: ['确定删除','取消操作'], 
    area: ['310px', ''],
    shade: false //不显示遮罩
}, function(){
location.href = urlid
}, function(){

});
};
</script> 
<!-- jQuery Validation plugin javascript--> 
<script src="<?php echo (JS_URL); ?>/plugins/validate/jquery.validate.min.js"></script> 
<script src="<?php echo (JS_URL); ?>/plugins/validate/messages_zh.min.js"></script> 
<script>
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
  $("#contact-form").validate({
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
$().ready(function() {
  $("#commentForm").validate();
  var a = "<i class='fa fa-times-circle'></i> ";
  $("#contact-formm").validate({
    rules: {
      hf_time: "required",
      hf_zhuti: "required"
    },
    messages: {
      hf_time: "<i class='fa icon-info-sign'></i>请添加回访时间",
      hf_zhuti: "<i class='fa icon-info-sign'></i>请添加回访主题"
    }
  })
});
</script> 
<!-- 二级联动 --> 
<script type="text/javascript">
$(document).ready(function() {
  $("#register0").change(function() { //咨询方式 //bulr
  layer.load();
    $("#userinfozxpd").html("");
    $("#userinfobzpd").html("");
    $.ajax({
      type: "post",
      url:"<?php echo (DQURL); ?>Addzixun/ZiXunLianDong",
      data: "username=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfo0").html(msg);
      }
    });
  });
  $("#register0").change(function() { //所属咨询 //bulr
    $.ajax({
      type: "post",
      url:"<?php echo (DQURL); ?>ManageZx/zixunyuanLianDong",
      data: "zixunyuan=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoZxy").html(msg);
      }
    });
  });
  $("#register0").change(function() { //所属病种 //bulr
    $.ajax({
      type: "post",
      url:"<?php echo (DQURL); ?>Addzixun/bzLianDong",
      data: "bzid=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoBz").html(msg);
      }
    });
  });
  $("#register0").change(function() { //所属网站 //bulr
    $.ajax({
      type: "post",
      url:"<?php echo (DQURL); ?>Addzixun/wzLianDong",
      data: "wzid=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoWz").html(msg);
      }
    });
  });
  $("#register0").change(function() { //信息来源 //bulr
    $.ajax({
      type: "post",
      url:"<?php echo (DQURL); ?>Addzixun/xxlyLianDong",
      data: "xxid=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoXxly").html(msg);
      }
    });
  });
  $("#register0").change(function() { //预约医生 //bulr
    $.ajax({
      type: "post",
      url:"<?php echo (DQURL); ?>Addzixun/yuyueYYLiandong",
      data: "yyid=" + $("#register0").val(),
      success: function(msg) {
        $("#userinfoYuyueys").html(msg);
        setTimeout(function(){
        layer.closeAll('loading');
        }, 500);
      }
    });
  });
  $("#sjjc").change(function() { //手机重复 //bulr
    $.ajax({
      type: "post",
      url: "<?php echo (DQURL); ?>Addzixun/shoujijc",
      data: "sjhm=" + $("#sjjc").val(),
      success: function(msg) {
        $("#userinfosjjc").html(msg);
      }
    });
  });
  $("#sjjc").change(function() { //手机获取省 //bulr
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
  initComplexArea('seachprov', 'seachcity', 'seachdistrict', area_array, sub_array, '<?php echo ($diqu_sheng); ?>', '<?php echo ($diqu_shi); ?>', '<?php echo ($diqu_qu); ?>');
	 $.ajax({
	  type: "post",
	  url:"<?php echo (DQURL); ?>Addzixun/zxtimexg",
	  data: "yyid=" + $("#register0").val(),
	  success: function(msg) {
		$("#userinfozxtime").attr("class", msg);
		$('.readonly1').removeAttr("readonly");
		$('.readonly2').attr("readonly","readonly");
		$(".readonly1").attr("onclick","laydate({istime: true, format: 'YYYY-MM-DD'})");
		$(".readonly2").removeAttr("onclick");
	  }
	});
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
		$("#userinfozxtime").val("<?php echo (substr($zixun[0]['zx_time'],0,10)); ?>");
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