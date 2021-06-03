<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>苗博士CRM网络管理系统</title>
    <link href="<?php echo (CSS_URL); ?>/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>/animate.min.css" rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css"
          rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>/style.min.css?v=3.2.0" rel="stylesheet">
</head>
<body class="gray-bg">
<style>

    .iconfont {
        font-family: "iconfont" !important;
        font-size: 14px;
        font-style: normal;
        -webkit-font-smoothing: antialiased;
        -webkit-text-stroke-width: 0.1px;
        -moz-osx-font-smoothing: grayscale;
    }

    @font-face {
        font-family: 'iconfont';  /* project id 987132 */
        src: url('//at.alicdn.com/t/font_987132_huga9t6yr1s.eot');
        src: url('//at.alicdn.com/t/font_987132_huga9t6yr1s.eot?#iefix') format('embedded-opentype'),
        url('//at.alicdn.com/t/font_987132_huga9t6yr1s.woff2') format('woff2'),
        url('//at.alicdn.com/t/font_987132_huga9t6yr1s.woff') format('woff'),
        url('//at.alicdn.com/t/font_987132_huga9t6yr1s.ttf') format('truetype'),
        url('//at.alicdn.com/t/font_987132_huga9t6yr1s.svg#iconfont') format('svg');
    }


    .add_div {
        width: 400px;
        height: 500px;
        border: solid #ccc 1px;
        margin-top: 40px;
        margin-left: 170px;
        padding-left: 20px;
    }

    .file-list {
        margin-top: 15px;
        height: 80px;
        display: none;
        list-style-type: none;
        padding-left: 0px;
    }

    .file-list img {
        max-width: 70px;
        vertical-align: middle;
    }

    .file-item {
        float: left;
        border: solid red px;
        margin: 5px 10px;
    }


    .add {
        border: solid #ccc 1px;
        border-radius: 5px;
        width: 45px;
        background-color: #ccc;
        display: inline-block;
        text-align: center;
        cursor: pointer;
    }

    .file-del {
        float: right;
        margin-top: -9px;
        margin-left: -2px;
        cursor: pointer;
        font-size: 12px;
        z-index: 100;
        position: absolute;
    }
</style>
<div class="wrapper wrapper-content animated fadeInUp">
    <div class="col-sm-12">
        <form action="/index.php/oa/manage_zx/manage" method="post" id="contact-form">
            <div class="col-sm-12" style="padding:0px;">
                <div class="ibox float-e-margins" id="shoujisf1">
                    <div class="ibox-title">
                        <h5><a class="collapse-link">筛查选项</a></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-wrench" id="shoujisf2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" style="padding-left:0px; padding-right:0px;" id="shoujisf3">
                        <div class="roww">
                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse); ?>">所属门店</font></span>
                                    <select class="form-control" name="yy_ID" id="register0">
                                        <?php if($countyy > 1): ?><option value="">所有门店</option><?php endif; ?>
                                        <?php if(is_array($ssyy)): $i = 0; $__LIST__ = $ssyy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["yyid"] == $dqyyID): ?><option value="<?php echo ($vo["yyid"]); ?>" selected="selected"><?php echo ($vo["yyname"]); ?></option>
                                                <?php else: ?>
                                                <option value="<?php echo ($vo["yyid"]); ?>"><?php echo ($vo["yyname"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse1); ?>">咨询客服</font></span>
                                    <select class="form-control" name="userID" id="userinfoZxy">
                                        <option value="">所有咨询员</option>
                                        <?php if(is_array($zixunyuan1)): $i = 0; $__LIST__ = $zixunyuan1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zixunyuan11): $mod = ($i % 2 );++$i; if(($zixunyuan11["user_ID"] == $dqzxy)): ?><option value="<?php echo ($zixunyuan11["user_ID"]); ?>" selected="selected">
                                                    <?php echo ($zixunyuan11["userchinaname"]); ?>
                                                </option>
                                                <?php else: ?>
                                                <option value="<?php echo ($zixunyuan11["user_ID"]); ?>"><?php echo ($zixunyuan11["userchinaname"]); ?>
                                                </option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse2); ?>">所属病种</font></span>
                                    <select name="bz_ID" id="userinfoBZ" class="form-control">
                                        <?php if($dqyyID == '' and $countyy > 1): ?><option value="">所有</option>
                                            <?php else: ?>
                                            <?php echo (column_down_eyy2(0,$morenBzID,0,$dqyyID,$cishu)); endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse3); ?>">咨询方式</font></span>
                                    <select name="zxfs_ID" id="userinfo0" class="form-control zxfspdxj">
                                        <?php if($dqyyID == '' and $countyy > 1): ?><option value="">所有</option>
                                            <?php else: ?>
                                            <?php echo (zxfs_down_eyy2(0,$morenZxfsID,0,$dqyyID,$cishu)); endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse4); ?>">到诊状态</font></span>
                                    <select name="shifoudaozhen" class="form-control">
                                        <option value="0" <?php echo ($huichuan0); ?>>所有咨询</option>
                                        <option value="1" <?php echo ($huichuan1); ?>>仅咨询</option>
                                        <option value="2" <?php echo ($huichuan2); ?>>已预约</option>
                                        <option value="3" <?php echo ($huichuan3); ?>>已到诊</option>
                                        <option value="4" <?php echo ($huichuan4); ?>>未到诊</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse5); ?>">信息来源</font></span>
                                    <select name="xx_ID" id="userinfoXxly" class="form-control">
                                        <option value="">请选择信息来源</option>
                                        <?php if(is_array($xinxidata)): $i = 0; $__LIST__ = $xinxidata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voxinxi): $mod = ($i % 2 );++$i; if($voxinxi["ID"] == $morenxxID): ?><option value="<?php echo ($voxinxi["ID"]); ?>" selected="selected"><?php echo ($voxinxi["xx_name"]); ?>
                                                </option>
                                                <?php else: ?>
                                                <option value="<?php echo ($voxinxi["ID"]); ?>"><?php echo ($voxinxi["xx_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse10); ?>">预约号</font></span>
                                    <input name="yuyuehao" type="text" value="<?php echo ($serchyuyuehao); ?>" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse7); ?>">手机号/姓名</font></span>
                                    <input name="shouji" type="text" value="<?php echo ($serchshouji); ?>" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse8); ?>">来源网站</font></span>
                                    <select name="laiyuanwangzhan" id="userinfoWz" class="form-control">
                                        <option value="">请选择网站</option>
                                        <?php if(is_array($wangzhandata)): $i = 0; $__LIST__ = $wangzhandata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vowangzhan): $mod = ($i % 2 );++$i; if($vowangzhan["wangzhan_ID"] == $morenwzID): ?><option value="<?php echo ($vowangzhan["wangzhan_ID"]); ?>" selected="selected">
                                                    <?php echo ($vowangzhan["wangzhan_url"]); ?>
                                                </option>
                                                <?php else: ?>
                                                <option value="<?php echo ($vowangzhan["wangzhan_ID"]); ?>"><?php echo ($vowangzhan["wangzhan_url"]); ?>
                                                </option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse9); ?>">预约医生</font></span>
                                    <select name="yuyueyishengID" id="userinfoYuyueys" class="form-control">
                                        <option value="">请选择医生</option>
                                        <?php if(is_array($doctorData)): $i = 0; $__LIST__ = $doctorData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vodoc): $mod = ($i % 2 );++$i; if($vodoc["doctor_ID"] == $morendocID): ?><option value="<?php echo ($vodoc["doctor_ID"]); ?>" selected="selected">
                                                    <?php echo ($vodoc["doctor_name"]); ?>
                                                </option>
                                                <?php else: ?>
                                                <option value="<?php echo ($vodoc["doctor_ID"]); ?>"><?php echo ($vodoc["doctor_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse18); ?>">QQ/微信</font></span>
                                    <input name="QQhaoma" type="text" value="<?php echo ($serchQQhaoma); ?>" class="form-control"/>

                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse12); ?>">IP/永久身份</font></span>
                                    <input name="IPdizhi" type="text" value="<?php echo ($serchIPdizhi); ?>" class="form-control"/>

                                </div>
                            </div>

                            <!--  <div class="col-sm-3">
                                 <div class="input-group m-b">
                                 <span class="input-group-addon"><font color="<?php echo ($yanse15); ?>">是否住院</font></span>
                                   <select name="shifouzhuyuan" id="userinfoYuyueys" class="form-control">
                                         <option value="">请选择状态</option>
                                         <option value="1" <?php echo ($huichuanzy0); ?>>未住院</option>
                                         <option value="2" <?php echo ($huichuanzy1); ?>>有住院</option>
                                   </select>
                                 </div>
                             </div> -->

                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse16); ?>">消费状态</font></span>
                                    <select name="xiaofei" id="userinfoYuyueys" class="form-control">
                                        <option value="">请选择消费</option>
                                        <option value="1" <?php echo ($huichuanxf0); ?>>有消费</option>
                                        <option value="2" <?php echo ($huichuanxf1); ?>>未消费</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse6); ?>">搜索/匹配词</font></span>
                                    <input name="guanjianci" type="text" value="<?php echo ($serchguanjianci); ?>"
                                           class="form-control"/>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><font color="<?php echo ($yanse17); ?>">排序方式</font></span>
                                    <select name="paixu" id="paixufanshi" class="form-control">
                                        <option value="zx_time" <?php echo ($huichuanpx0); ?>>咨询时间</option>
                                        <option value="yuyueTime" <?php echo ($huichuanpx1); ?>>预约日期</option>
                                        <option value="userID" <?php echo ($huichuanpx2); ?>>咨询员</option>
                                        <option value="huifangcishu" <?php echo ($huichuanpx3); ?>>回访次数</option>
                                        <option value="guanjianci" <?php echo ($huichuanpx4); ?>>搜索关键词</option>
                                        <option value="bz_ID" <?php echo ($huichuanpx5); ?>>病种</option>
                                        <option value="zxfs_ID" <?php echo ($huichuanpx6); ?>>咨询方式</option>
                                        <option value="xx_ID" <?php echo ($huichuanpx7); ?>>信息来源</option>
                                        <option value="xiaofei" <?php echo ($huichuanpx8); ?>>消费</option>
                                        <option value="daozhen_time" <?php echo ($huichuanpx9); ?>>就诊时间</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin:0;">
                            <div class="col-sm-3" style="padding:0px;">
                                <div class="form-group">
                                    <label class="col-sm-12 control-label">咨询时间</label>
                                    <div class="col-md-6">
                                        <input name="zx_timeStart" type="text" class="form-control layer-date"
                                               placeholder="YYYY-MM-DD" value="<?php echo ($zx_timeStart); ?>" id="shijian11"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="zx_timeEnd" type="text" class="form-control layer-date"
                                               placeholder="YYYY-MM-DD" value="<?php echo ($zx_timeEnd); ?>" id="shijian12"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3" style="padding:0px;">
                                <div class="form-group">
                                    <label class="col-sm-12 control-label">预约时间</label>
                                    <div class="col-md-6">
                                        <input name="yuyueTimeStart" type="text" class="form-control layer-date"
                                               placeholder="YYYY-MM-DD" value="<?php echo ($yuyueTimeStart); ?>" id="shijian21"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="yuyueTimeEnd" type="text" class="form-control layer-date"
                                               placeholder="YYYY-MM-DD" value="<?php echo ($yuyueTimeEnd); ?>" id="shijian22"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3" style="padding:0px;">
                                <div class="form-group">
                                    <label class="col-sm-12 control-label">到诊时间</label>
                                    <div class="col-md-6">
                                        <input name="daozhen_timeStart" type="text" class="form-control layer-date"
                                               placeholder="YYYY-MM-DD" value="<?php echo ($daozhen_timeStart); ?>" id="shijian31"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="daozhen_timeEnd" type="text" class="form-control layer-date"
                                               placeholder="YYYY-MM-DD" value="<?php echo ($daozhen_timeEnd); ?>" id="shijian32"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label class="col-sm-12 control-label">&nbsp;</label>
                                <button class="btn btn-primary" type="submit">确定筛选</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-12" style="padding:0px;">
        <div class="col-sm-12">
            <div class="ibox float-e-margins" style="margin-bottom:0px;">
                <div class="ibox-title">
                    <form action="/index.php/oa/manage_zx/user_showmenu" method="post">
                        <h5><a class="collapse-link">咨询列表</a>

                            <div class="keep-open btn-group" title="列">
                                <button type="button" class="btn btn-default btn-outline dropdown-toggle"
                                        data-toggle="dropdown" aria-expanded="false"
                                        style="padding:0px 5px; border:0px">
                                    <i class="glyphicon glyphicon-list"></i>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" style=" padding:10px">
                                    <?php if(is_array($show_list)): $i = 0; $__LIST__ = $show_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                            <div class="checkbox-inline f-label">
                                                <input type="checkbox" <?php echo ($vo["checked"]); ?> name='show_list[]'
                                                       value="<?php echo ($vo["bianhao"]); ?>" onClick="anxia('tdd<?php echo ($vo["bianhao"]); ?>')"
                                                       class="tdd<?php echo ($vo["bianhao"]); ?>" id="paixuxz">
                                                <label><?php echo ($vo["showname"]); ?></label>
                                            </div>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>

                        </h5>
                        <div style="display:inline-block;margin-top:-6px;padding:0;float:left; margin-left:10px;">
                            <input class="btn btn-primary btn-xs"
                                   style="border-radius:3px 3px 0px 0px; border-bottom:0px;" type="submit"
                                   name='submit_usershow' value="保存排版">
                        </div>
                        <div class="ibox-tools hidden-xs" style="margin-top:-8px;height:30px; overflow:hidden">
                            <?php echo ($fenye5); ?>
                        </div>
                    </form>
                </div>
                <div class="ibox-content" style="margin-bottom:0px; padding-bottom:0px;">
                    <form action="/index.php/oa/manage_zx/delzixun" method="post" id="shanchutj">
                        <div>
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th class="shoujixs" id="tdd1">编号</th>
                                    <th id="tdd2">状态</th>
                                    <th id="tdd3"><a href="javascript:void(0)" onClick="paixu('zx_time')">咨询时间 <i
                                            class="icon icon-angle-down"></i></a></th>
                                    <th class="shoujixs" id="tdd4">所属门店</th>
                                    <th class="shoujixs" id="tdd5">患者姓名</th>
                                    <th class="shoujixs" id="tdd6"><a href="javascript:void(0)"
                                                                      onClick="paixu('yuyueTime')">预约日期 <i
                                            class="icon icon-angle-down"></i></a></th>
                                    <th class="shoujixs" id="tdd7">联系方式</th>
                                    <th class="shoujixs" id="tdd20">性别</th>
                                    <th class="shoujixs" id="tdd21">年龄</th>
                                    <th class="shoujixs" id="tdd24">QQ号</th>
                                    <th class="shoujixs" id="tdd25">微信号</th>
                                    <th class="shoujixs" id="tdd22">预约号</th>
                                    <th class="shoujixs" id="tdd8"><a href="javascript:void(0)"
                                                                      onClick="paixu('zxfs_ID')">咨询方式 <i
                                            class="icon icon-angle-down"></i></a></th>
                                    <th class="shoujixs" id="tdd9"><a href="javascript:void(0)"
                                                                      onClick="paixu('bz_ID')">咨询病种 <i
                                            class="icon icon-angle-down"></i></a></th>
                                    <th class="shoujixs" id="tdd10"><a href="javascript:void(0)"
                                                                       onClick="paixu('xx_ID')">来源渠道 <i
                                            class="icon icon-angle-down"></i></a></th>
                                    <th class="shoujixs" id="tdd11"><a href="javascript:void(0)"
                                                                       onClick="paixu('guanjianci')">搜索关键词 <i
                                            class="icon icon-angle-down"></i></a></th>
                                    <th class="shoujixs" id="tdd23">顾客是否有意向</th>
                                    <th class="shoujixs" id="tdd12"><a href="javascript:void(0)"
                                                                       onClick="paixu('daozhen_time')">到诊时间 <i
                                            class="icon icon-angle-down"></i></a></th>
                                    <th class="shoujixs" id="tdd13"><a href="javascript:void(0)"
                                                                       onClick="paixu('userID')">客服 <i
                                            class="icon icon-angle-down"></i></a></th>
                                    <th class="shoujixs" id="tdd14"><a href="javascript:void(0)"
                                                                       onClick="paixu('huifangcishu')">回访次数 <i
                                            class="icon icon-angle-down"></i></a></th>
                                    <th class="shoujixs" id="tdd15"><a href="javascript:void(0)"
                                                                       onClick="paixu('xiaofei')">消费 <i
                                            class="icon icon-angle-down"></i></a></th>
                                    <!-- <th class="shoujixs" id="tdd16">住院</th> -->
                                    <!--                            <th class="shoujixs" id="tdd17">到诊状态</th>-->
                                    <th id="tdd18">操作详情</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="gb_<?php echo ($vo["zx_ID"]); ?>" <?php if($vo["shifoubaoliu"] ==1 ): ?>style="background-color:#f0f921;" <?php elseif($vo["shifoubaoliu"] ==2 ): ?> style="background-color:#31c3fb;"<?php endif; ?> >
                                        <td class="shoujixs" id="tdd1" style="white-space:nowrap">
                                            <div class="checkbox-inline b-label">
                                                <input id="quanxuan" name="quanxuan[]" type="checkbox"
                                                       value="<?php echo ($vo["zx_ID"]); ?>">
                                            </div>
                                            <?php echo ($i); ?>
                                            <!--<?php echo ($vo["zx_ID"]); ?>-->
                                        </td>
                                        <td id="tdd2">
                                            <?php if($vo["shifoudaozhen"] == 0): ?><span
                                                    class="badge badge-info">已到诊</span>
                                                <?php elseif($vo["shifouyuyue"] == 0): ?>
                                                <span class="badge badge-warning">有预约</span>
                                                <?php else: ?>
                                                <span class="badge">仅咨询</span><?php endif; ?>
                                        </td>
                                        <td id="tdd3">
                                            <?php $a1 = date('Y-m-d'); $a2 = substr($vo[zx_time],0,10); $a3 = (strtotime($a1) - strtotime($a2)); $a4 = substr($vo[zx_time],5,11); if( $a1 == $a2){ echo "今天".$a4.""; }elseif($a3 == 86400){ echo "昨天".$a4.""; } else{ echo substr($vo[zx_time],0,16); } ?>
                                        </td>
                                        <td class="shoujixs" id="tdd4"><?php echo ($vo["yy_name"]); ?></td>
                                        <td class="shoujixs" title="<?php echo ($vo["yuyueBeizhu"]); ?>" id="tdd5"><?php echo ($vo["huanzeName"]); ?></td>
                                        <td class="shoujixs" id="tdd6">
                                            <?php $a1 = date('Y-m-d'); $a2 = substr($vo[yuyueTime],0,10); $a3 = (strtotime($a2) - strtotime($a1)); $a4 = substr($vo[yuyueTime],5,11); if( $a1 == $a2){ echo "<font color='#FF0000'>今天".$a4."</font>"; }elseif($a3 == 86400){ echo "<font color='#CC6600'>明天".$a4."</font>"; }elseif(strtotime($a2) == ""){ echo ""; } else{ if($vo[shifoudaozhen]==0){ echo "<font color='#00CC00'>".substr($vo[yuyueTime],0,16)."</font>"; }else{ echo substr($vo[yuyueTime],0,16); } } ?>
                                        </td>
                                        <td class="shoujixs" id="tdd7">
                                            <?php if($vo[shouji]!=''){ if(in_array($vo[yy_ID],$shoujixianshi) or $vo[userID]==$_SESSION['username_lf'] or $_SESSION['user_role']==1 or $_SESSION['user_role']==2 or $_SESSION['user_role']==4 or $_SESSION['user_role']==6){ echo substr_replace($vo[shouji],'****',3,4); }else{ echo substr_replace($vo[shouji],'****',3,4); } } ?>
                                        </td>
                                        <td class="shoujixs" id="tdd20"><?php echo ($vo["xingbie"]); ?></td>
                                        <td class="shoujixs" id="tdd21"><?php echo ($vo["age"]); ?></td>
                                        <td class="shoujixs" id="tdd24"><?php echo ($vo["QQhaoma"]); ?></td>
                                        <td class="shoujixs" id="tdd25"><?php echo ($vo["weixinhao"]); ?></td>
                                        <td class="shoujixs" id="tdd22"><?php echo ($vo["yuyuehao"]); ?></td>
                                        <td class="shoujixs" id="tdd8"><?php echo ($vo["zxfs_name"]); ?></td>
                                        <td class="shoujixs" id="tdd9"><?php echo ($vo["bz_name"]); ?></td>
                                        <td class="shoujixs" id="tdd10"><?php echo ($vo["xx_name"]); ?></td>
                                        <td class="shoujixs" id="tdd11"><a title='<?php echo ($vo["guanjianci"]); ?>'><?php echo (mb_substr($vo["guanjianci"],0,8,'utf-8')); ?></a>
                                        </td>
                                        <td class="shoujixs" id="tdd23"><?php echo ($vo["ppguanjianci"]); ?></td>
                                        <td class="shoujixs" id="tdd12"><?php echo (mb_substr($vo["daozhen_time"],0,10,'utf-8')); ?>
                                        </td>
                                        <td class="shoujixs" id="tdd13"><?php echo ($vo["userchinaname"]); ?></td>
                                        <td class="shoujixs" id="tdd14"><a href="###"
                                                                           onClick="hfjl('<?php echo ($vo["zx_ID"]); ?>','<?php echo ($vo["hfjh_ID"]); ?>')">回访<font
                                                color="#FF0000"><?php echo ($vo["huifangcishu"]); ?></font>次</a></td>
                                        <td class="shoujixs" id="tdd15"><?php echo ($vo["xiaofei"]); ?></td>
                                        <!-- <td class="shoujixs" id="tdd16">
                                        <?php if($vo["shifouzhuyuan"] == 0): ?>是
                                        <?php else: ?>否<?php endif; ?>
                                        </td> -->
                                        <!--                            <td id="tdd17" class="shoujixs">-->
                                        <!--                              <?php if($vo["shifoudaozhen"] == 0): ?>-->
                                        <!--                              <span class="badge badge-info">已经到诊</span>-->
                                        <!--                              <?php else: ?>-->
                                        <!--                                  <?php if(($_SESSION['user_role'] == 1 or $_SESSION['user_role'] == 2 or $_SESSION['user_role'] == 6) and $vo["shifouyuyue"] == 0 ): ?>-->
                                        <!--                                  <a href="###" onClick="querdz('<?php echo ($vo["zx_ID"]); ?>','<?php echo ($_GET['page']); ?>','<?php echo ($_GET['page_size']); echo ($dqURLcanshu); ?>','<?php echo ($vo["huanzeName"]); ?>','<?php echo (substr($vo["shouji"],7,11)); ?>');"><span class="badge badge-danger">确认到诊</span></a>-->
                                        <!--                                  -->
                                        <!--                                  <?php else: ?>-->
                                        <!--                                  <span class="badge">尚未到诊</span>-->
                                        <!--<?php endif; ?>-->
                                        <!--<?php endif; ?>-->
                                        <!--                            </td>-->
                                        <td id="tdd18">   <!--操作详情-->
                                            <?php if($role_ID==5 and $vo['userID']!=$dquser_ID and !in_array($vo['yy_ID'],$chakanxiangqing)){ echo '<span class="badge"><i class="icon-info-sign"></i> 无操作权限</span>'; }else{ ?>
                                            <!--<a href="javascript:void(0);" onClick="duoyong('<?php echo ($vo["zx_ID"]); ?>','<?php echo ($_GET['page']); ?>','<?php echo ($_GET['page_size']); ?>','<?php echo ($dqURLcanshu); ?>','<?php echo (DQURL); ?>Updatezixun/update?page=<?php echo ($dqpage); ?>&page_size=<?php echo ($_GET['page_size']); ?>&zx_ID=<?php echo ($vo["zx_ID"]); echo ($dqURLcanshu); ?>')" class="btn btn-white btn-sm" title="<?php echo ($vo["yuyueBeizhu"]); ?>">查看详情</a>&nbsp;-->
                                            <a href="<?php echo (DQURL); ?>Updatezixun/update?page=<?php echo ($dqpage); ?>&page_size=<?php echo ($_GET['page_size']); ?>&zx_ID=<?php echo ($vo["zx_ID"]); echo ($dqURLcanshu); ?>"
                                               class="btn btn-white btn-sm" title="<?php echo ($vo["yuyueBeizhu"]); ?>">查看详情</a>&nbsp;

                                            <!-- <a href="javascript:void(0);" onClick="javascript:duanxin('<?php echo ($vo["zx_ID"]); ?>');" class="btn btn-white btn-sm">短信</a> -->

                                            <?php if($vo["shifoudaozhen"] == 0): ?><span class="badge badge-info">已经到诊</span>
                                                <?php else: ?>
                                                <?php if(($_SESSION['user_role'] == 1 or $_SESSION['user_role'] == 2 or $_SESSION['user_role'] == 6) and $vo["shifouyuyue"] == 0 ): ?><a href="###"
                                                       onClick="querdz('<?php echo ($vo["zx_ID"]); ?>','<?php echo ($_GET['page']); ?>','<?php echo ($_GET['page_size']); echo ($dqURLcanshu); ?>','<?php echo ($vo["huanzeName"]); ?>','<?php echo (substr($vo["shouji"],7,11)); ?>');"><span
                                                            class="badge badge-danger">确认到诊</span></a>

                                                    <?php else: ?>
                                                    <span class="badge">尚未到诊</span><?php endif; endif; ?>

                                            <?php $now = time(); $start = strtotime('+25 days',strtotime($vo[zx_time])); $end = strtotime('+1 month',strtotime($vo[zx_time]) ); if(( (($_SESSION['user_role']==5 || $_SESSION['user_role']==4 ) && ($_SESSION['username_lf']==$vo['userID'])) || $_SESSION['user_role']==1) && empty($vo['daozhen_time']) && $vo['shifoubaoliu']!=1 && $vo['shifoubaoliu']!=2){ if( $now >= $start && $now <= $end){echo ' <span class="btn btn-white"
                                                                                                 zid="'.$vo['zx_ID'].'"
                                                                                                 style="font-size: 12px;"
                                                                                                 onclick="showretain(this);">保留</span>';} } ?>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php if($vo[huanzeName]!=''){ ?>
                                    <?php } ?>
                                    <tr class="visible-xs" style="background:#ECECEC;">
                                        <td colspan="24"
                                        <?php if($vo["huanzeName"] == ''): ?>style="display:none"<?php endif; ?>
                                        >
                                        <small><?php echo ($vo["huanzeName"]); ?></small>
                                        <?php if($vo["yuyueTime"] != ''): ?><small> 预约：<?php echo (mb_substr($vo["yuyueTime"],0,16,'utf-8')); ?></small><?php endif; ?>
                                        <?php if($vo[shouji]!=''){ if(in_array($vo[yy_ID],$shoujixianshi) or $vo[userID]==$_SESSION['username_lf'] or $_SESSION['user_role']==1 or $_SESSION['user_role']==2 or $_SESSION['user_role']==4 or $_SESSION['user_role']==6){ echo '<small> 电话：'.$vo[shouji].'</small>'; }else{ echo '<small> 电话：'.substr_replace($vo[shouji],'****',3,4).'</small>'; } } ?>
                                        </td>
                                    </tr>
                                    <tr style="background:#ECECEC;<?php if( $vo["yuyueBeizhu"] == ''): ?>display:none;<?php endif; ?>">
                                    <td colspan="24">
                                        <small id="tdd19">预约备注:<?php echo ($vo["yuyueBeizhu"]); ?></small>
                                    </td>
                                    </tr>
                                    <tr style="background:#ECECEC;<?php if( $vo["lasthuifang"] == ''): ?>display:none;<?php endif; ?>">
                                    <td colspan="24">
                                        <small id="tdd26">最后回访:<?php echo ($vo["lasthuifang"]); ?>
                                            <?php echo (substr($vo["lasthuifang_time"],0,16)); ?></small>
                                    </td>
                                    </tr>
                                    <tr style="display:none"></tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <table class="table table-striped table-hover">
                            <tr>
                                <td class="hidden-xs" style="white-space:nowrap">
                                    <div class="checkbox-inline f-label">
                                        <input id="checkAll" type="checkbox">
                                        <label for="checkAll">全选</label>
                                    </div>
                                    <input type="hidden" name="page" value="<?php echo ($dqpage); ?>">
                                    <input type="hidden" name="URLcanshu" value="<?php echo ($dqURLcanshu); ?>">
                                    <a href="javascript:shanchudz();" class="btn btn-white btn-sm"/>删除</a>
                                    <a href="/index.php/oa/manage_zx/manage_Excle?<?php echo ($dqURLcanshu); ?>" class="btn btn-white btn-sm"
                                       onClick="if(confirm('确认导出?可能耗时较长，请耐心等待')) return true;else return false;">全部导出</a>
                                    <a id="fenpeiadd" class="btn btn-white btn-sm" onClick="">分配</a>
                                </td>
                                <td align="right">
                                    <div style="height:30px; overflow:hidden">
                                        <?php echo ($fenye5); ?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;"
     id="fenpeikehu">
    <div class="layui-layer layui-anim layui-layer-page layer-ext-moon"
         style="z-index: 19891020; width:310px; height:250px; left:50%; margin-left:-155px;">
        <div class="layui-layer-title" style="cursor: move;">分配客户</div>
        <div class="layui-layer-content">
            <div class="animated">
                <form action="/index.php/oa/manage_zx/yy_update" method="post" class="form-horizontal">
                    <div class="ibox float-e-margins" style="margin-bottom:0px;">
                        <div class="ibox-content">
                            <div class="input-group m-b" style="margin-bottom:5px;"><span
                                    class="input-group-addon">客服</span>
                                <input type="hidden" name="oldkefu" value="">
                                <select class="form-control" name="cxfpke" type="text" id="cxfpke" value="">
                                    <?php if(is_array($zixunyuan1)): $i = 0; $__LIST__ = $zixunyuan1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zixunyuan11): $mod = ($i % 2 );++$i;?><option value="<?php echo ($zixunyuan11["user_ID"]); ?>"><?php echo ($zixunyuan11["userchinaname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <div class="form-group" align="center" style="margin-bottom:5px;">
                                <p style="background: #29b578; width: 9rem; height: 3rem; line-height: 3rem; color: #fff;  letter-spacing: 1px;margin-top: 1rem;">
                                    <sapn style="cursor: pointer;" onclick="fenpeikf();">确定分配</sapn>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <span class="layui-layer-setwin" id="fenpeixx"><a class="layui-layer-ico layui-layer-close layui-layer-close1"
                                                          href="javascript:;"></a></span>
    </div>
</div>


<div class="layui-layer-shade" style="z-index:19891019; background:url(<?php echo (IMG_URL); ?>/kong.png); display:none;"
     id="stainapply">
    <div class="layui-layer layui-anim layui-layer-page layer-ext-moon"
         style="z-index: 19891020; width:310px; height:250px; left:50%; margin-left:-155px;">
        <div class="layui-layer-title" style="cursor: move;">保留客户申请</div>
        <div class="layui-layer-content">
            <div class="animated">
                <form action="/index.php/oa/manage_zx/yy_update" method="post" class="form-horizontal">
                    <div class="ibox float-e-margins" style="margin-bottom:0px;">
                        <div class="ibox-content">
                            <div class="input-group m-b" style="margin-bottom:5px;">
                                <span class="input-group-addon">备注：</span>
                                <input type="text" name="beizhu" class="form-control" id="fuzhi4" multiple="multiple"
                                       style="" value=""/>
                            </div>
                            <div class="input-group m-b" style="margin-bottom:5px;">
                                <!--                                <select class="form-control" name="yy_name" type="text" id="fuzhi1" value="" >-->
                                <!--                                    <?php if(is_array($zixunyuan1)): $i = 0; $__LIST__ = $zixunyuan1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zixunyuan11): $mod = ($i % 2 );++$i;?>-->
                                <!--                                        <option value="<?php echo ($zixunyuan11["user_ID"]); ?>"><?php echo ($zixunyuan11["userchinaname"]); ?></option>-->
                                <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                <!--                                </select>-->
                                <span class="input-group-addon">图片：</span>
                                <span class="input-group-addon add choose">添加</span>
                                <input type="file" name="" id="choose-file" multiple="multiple"
                                       style="opacity: 0;display: none"/>
                                <!--<input type="file" name="" id="choose-file" />-->
                            </div>
                            <div class="input-group " style="margin-bottom:5px;">
                                <ul class="file-list ">

                                </ul>
                            </div>

                            <div class="form-group" align="center" style="margin-bottom:5px;">
                                <p style="background: #29b578; width: 9rem; height: 3rem; line-height: 3rem; color: #fff;  letter-spacing: 1px;margin-top: 1rem;">
                                    <sapn style="cursor: pointer;" class="subapply" zid="" id="upload">提交申请</sapn>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <span class="layui-layer-setwin" id="applyxx"><a class="layui-layer-ico layui-layer-close layui-layer-close1"
                                                         href="javascript:;"></a></span>
    </div>
</div>
<!-- 全局js -->
<script src="<?php echo (JS_URL); ?>/jquery.min.js"></script>
<script src="<?php echo (JS_URL); ?>/bootstrap.min.js?v=3.3.5"></script>
<!-- layerjs -->
<script src="<?php echo (JS_URL); ?>/plugins/layer/layer.min.js"></script>
<script>


    $(function () {
        $('.choose').click(function () {
            $('#choose-file').click();
        })
        ////////////////////////////////////////////////图片上传//////////////////////////////////////////////
        //声明变量
        var $button = $('#upload'),
            //选择文件按钮
            $file = $("#choose-file"),
            //回显的列表
            $list = $('.file-list'),
            //选择要上传的所有文件
            fileList = [];
        //当前选择上传的文件
        var curFile;
        // 选择按钮change事件，实例化fileReader,调它的readAsDataURL并把原生File对象传给它，
        // 监听它的onload事件，load完读取的结果就在它的result属性里了。它是一个base64格式的，可直接赋值给一个img的src.
        $file.on('change', function (e) {
            //上传过图片后再次上传时限值数量
            var numold = $('.file-list li').length;
            if (numold > 3) {
                layer.alert('最多上传3张图片');
                return;
            }
            //限制单次批量上传的数量
            var num = e.target.files.length;
            var numall = numold + num;
            if (num > 3) {
                layer.alert('最多上传3张图片');
                return;
            } else if (numall > 3) {
                layer.alert('最多上传3张图片');
                return;
            }
            //原生的文件对象，相当于$file.get(0).files;//files[0]为第一张图片的信息;
            curFile = this.files;
            curFile = $file.get(0).files;
            // console.log(curFile);
            //将FileList对象变成数组
            fileList = fileList.concat(Array.from(curFile));
            //console.log(fileList);
            for (var i = 0, len = curFile.length; i < len; i++) {
                reviewFile(curFile[i])
            }
            $('.file-list').fadeIn(2500);
        })


        function reviewFile(file) {
            //实例化fileReader,
            var fd = new FileReader();
            //获取当前选择文件的类型
            var fileType = file.type;
            //调它的readAsDataURL并把原生File对象传给它，
            fd.readAsDataURL(file);//base64
            // console.log(file);
            //监听它的onload事件，load完读取的结果就在它的result属性里了
            fd.onload = function () {
                if (/^image\/[jpeg|png|jpg|gif]/.test(fileType)) {
                    $list.append('<li class="file-item"><img src="' + this.result + '" alt="" height="70"><span class="file-del"><i class="iconfont ">&#xe636;</i></span></li>').children(':last').hide().fadeIn(2500);
                } else {
                    $list.append('<li class="file-item"><span class="file-name">' + file.name + '</span><span class="file-del"><i class="iconfont ">&#xe636;</i></span></li>')
                }

            }

        }

        //点击删除按钮事件：
        $(".file-list").on('click', '.file-del', function () {
            let $parent = $(this).parent();
            // console.log($parent);
            let index = $parent.index();
            fileList.splice(index, 1);
            $parent.fadeOut(850, function () {
                $parent.remove()
            });
            var filess = document.getElementById('choose-file');
            filess.value = '';
        });
        //点击上传按钮事件：
        $button.on('click', function () {
            $(this).attr('disabled','disabled');
            var zid = $(this).attr('zid');
            if (zid != null && zid != undefined && zid != '' && parseInt(zid) > 0) {
                zid = parseInt(zid);
            } else {
                layer.msg('无效的操作！');
                $(this).removeAttr('disabled');
                return;
            }
            if(fileList.length == 0){
                layer.msg('请上传聊天记录');
                $(this).removeAttr('disabled');
                return;
            }else if (fileList.length > 3) {
                layer.msg('最多允许上传3张图片');
                $(this).removeAttr('disabled');
                return;
            } else {
                var formData = new FormData();
                for (var i = 0, len = fileList.length; i < len; i++) {
                    //console.log(fileList[i]);
                    formData.append('upfile[]', fileList[i]);
                }
                var beizhu = $('#fuzhi4').val();
                if (beizhu != '' && beizhu != undefined && beizhu != null) {
                    beizhu = beizhu.replace(/(^\s*)|(\s*$)/g, "");
                }
                formData.append('beizhu', beizhu);
                formData.append('zid', zid);
                // formData.append('price', price);
                $.ajax({
                    url: '<?php echo (DQURL); ?>ManageZx/manageapply',
                    type: 'post',
                    data: formData,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        if (data.code == 200) {
                            layer.msg(data.msg);
                            $(this).removeAttr('disabled');
                            $('#stainapply').hide();
                            window.location.reload();
                        } else{
                            layer.msg(data.msg);
                            $(this).removeAttr('disabled');
                        }
                    }
                })
            }
        })
    })

    function showretain(e) {
        $('#stainapply').show();
        $('.file-list').html('');
        $(':input[name=beizhu]').val('');
        $('.subapply').attr('zid', '');
        var zID = $(e).attr('zid');
        if (zID != '' && zID != undefined && zID != null) {
            if (parseInt(zID) > 0) {
                $('.subapply').attr('zid', parseInt(zID));
            } else {
                layer.msg('无效的客户！');
            }
        }
    }

    $('#applyxx').on('click', function () {
        $('#stainapply').hide()
    });

    $('#fenpeiadd').on('click', function () {
        $('#fenpeikehu').show()
    });
    $('#fenpeixx').on('click', function () {
        $('#fenpeikehu').hide()
    });

    function duoyong(id, page, page_size, cansu, url) {
        duoyongid = id;
        parent.layer.open({
            type: 2,
            title: '咨询详情',
            shadeClose: true,
            shade: 0.8,
            area: ['90%', '96%'],
            content: url,
            end: function () {
                $.ajax({
                    type: "post",
                    url: "<?php echo (DQURL); ?>ManageZx/managexq",
                    data: "zxid=" + duoyongid + "&page=" + page + "&page_size=" + page_size + cansu,
                    success: function (msg) {
                        $('#gb_' + duoyongid).html(msg);
                    }
                });
                var duoyongida = '#gb_' + duoyongid + 'a';
                if ($(duoyongida)) {
                    $.ajax({
                        type: "post",
                        url: "<?php echo (DQURL); ?>ManageZx/managexqa",
                        data: "zxid=" + duoyongid,
                        success: function (msg) {
                            $(duoyongida).html(msg);
                        }
                    });
                }
                var duoyongidb = '#gb_' + duoyongid + 'b';
                if ($(duoyongidb)) {
                    $.ajax({
                        type: "post",
                        url: "<?php echo (DQURL); ?>ManageZx/managexqb",
                        data: "zxid=" + duoyongid,
                        success: function (msg) {
                            $(duoyongidb).html(msg);
                        }
                    });
                }
            }
        });
    };

    function duanxin(zx_id) {
        parent.layer.open({
            type: 2,
            title: '短信',
            shadeClose: true,
            shade: 0.8,
            area: ['90%', '320px'],
            content: '/index.php/oa/manage_zx/SendMessage/zx_ID/' + zx_id //iframe url
        });
    };

    function querdz(zx_id, page, page_size, huanzeName, shouji) {
        parent.layer.confirm('确认到诊？ 姓名：' + huanzeName + ' 手机号尾号为' + shouji, {
            btn: ['确认到诊', '取消操作'],
            area: ['310px', ''],
            shade: false //不显示遮罩
        }, function () {
            location.href = '<?php echo (DQURL); ?>Updatezixun/daozhen?zixunID=' + zx_id + '&page=' + page + '&page_size=' + page_size
        }, function () {

        });
    };

    function shanchudz() {
        parent.layer.confirm('确定删除？ 删除不能恢复!', {
            btn: ['确认删除', '取消操作'],
            shade: false //不显示遮罩
        }, function () {
            $('#shanchutj').submit()
        }, function () {

        });
    };

    function fenpei(e) {
    }

    function hfjl(zx_ID, hfjh_id) {
        parent.layer.open({
            type: 2,
            title: '回访详细',
            shadeClose: true,
            shade: 0.8,
            area: ['90%', '96%'],
            content: '<?php echo (DQURL); ?>Updatezixun/huifangxiangq/zx_ID/' + zx_ID + '/hfjh_ID/' + hfjh_id //iframe url
        });
    };
</script>
<!-- 自定义js -->
<script src="<?php echo (JS_URL); ?>/content.min.js?v=1.0.0"></script>
<!-- layerDate plugin javascript -->
<script src="<?php echo (JS_URL); ?>/plugins/layer/laydate/laydate.js"></script>
<script>
    var shijian11 = {
        elem: '#shijian11',
        format: 'YYYY-MM-DD',
        istime: false,
        istoday: true,
        choose: function (datas) {
            shijian12.min = datas; //开始日选好后，重置结束日的最小日期
            shijian12.start = datas //将结束日的初始值设定为开始日
        }
    };
    var shijian12 = {
        elem: '#shijian12',
        format: 'YYYY-MM-DD',
        istime: false,
        istoday: true,
        choose: function (datas) {
            shijian11.max = datas; //结束日选好后，重置开始日的最大日期
        }
    };
    laydate(shijian11);
    laydate(shijian12);
    var shijian21 = {
        elem: '#shijian21',
        format: 'YYYY-MM-DD',
        istime: false,
        istoday: true,
        choose: function (datas) {
            shijian22.min = datas; //开始日选好后，重置结束日的最小日期
            shijian22.start = datas //将结束日的初始值设定为开始日
        }
    };
    var shijian22 = {
        elem: '#shijian22',
        format: 'YYYY-MM-DD',
        istime: false,
        istoday: true,
        choose: function (datas) {
            shijian21.max = datas; //结束日选好后，重置开始日的最大日期
        }
    };
    laydate(shijian21);
    laydate(shijian22);
    var shijian31 = {
        elem: '#shijian31',
        format: 'YYYY-MM-DD',
        istime: false,
        istoday: true,
        choose: function (datas) {
            shijian32.min = datas; //开始日选好后，重置结束日的最小日期
            shijian32.start = datas //将结束日的初始值设定为开始日
        }
    };
    var shijian32 = {
        elem: '#shijian32',
        format: 'YYYY-MM-DD',
        istime: false,
        istoday: true,
        choose: function (datas) {
            shijian31.max = datas; //结束日选好后，重置开始日的最大日期
        }
    };
    laydate(shijian31);
    laydate(shijian32);
</script>
<!-- SUMMERNOTE -->
<script src="<?php echo (JS_URL); ?>/plugins/summernote/summernote.min.js"></script>
<script src="<?php echo (JS_URL); ?>/plugins/summernote/summernote-zh-CN.js"></script>
<script>
    $(document).ready(function () {
        $(".summernote").summernote({lang: "zh-CN"})
    });
    var edit = function () {
        $("#eg").addClass("no-padding");
        $(".click2edit").summernote({lang: "zh-CN", focus: true})
    };
    var save = function () {
        $("#eg").removeClass("no-padding");
        var a = $(".click2edit").code();
        $(".click2edit").destroy()
    };
</script>

<!--全选-->
<script type="text/javascript">
    $(function () {
        $("#checkAll").click(function () {
            $('input[id="quanxuan"]').prop("checked", this.checked);
        });
        var $subBox = $("input[id='quanxuan']");
        $subBox.click(function () {
            $("#checkAll").prop("checked", $subBox.length == $("input[id='quanxuan']:checked").length ? true : false);
        });
    });
</script>
<!--二级联动-->
<?php if($countyy == 1): ?><script type="text/javascript">
        $(document).ready(function () {
            <!-- 首次加载 -->
            layer.load();

            $.ajax({
                type: "post",
                url: "<?php echo (DQURL); ?>Addzixun/xxlyLianDong",
                data: "xxid=" + $("#register0").val(),
                success: function (msg) {
                    $("#userinfoXxly").html(msg);
                }
            });
            $.ajax({
                type: "post",
                url: "<?php echo (DQURL); ?>Addzixun/yuyueYYLiandong",
                data: "yyid=" + $("#register0").val(),
                success: function (msg) {
                    $("#userinfoYuyueys").html(msg);
                }
            });
            $.ajax({
                type: "post",
                url: "<?php echo (DQURL); ?>Addzixun/wzLianDong",
                data: "wzid=" + $("#register0").val(),
                success: function (msg) {
                    $("#userinfoWz").html(msg);
                    setTimeout(function () {
                        layer.closeAll('loading');
                    }, 500);
                }
            });
        });
    </script><?php endif; ?>

<script type="text/javascript">
    function paixu(xuanze) { //排序
        document.getElementById("paixufanshi").value = xuanze;
        $('#contact-form').submit();
    };
    $(document).ready(function () {
        $("[id=paixuxz]").each(function () { //排版加载
            if ($(this).is(":checked")) {
            } else {
                var tddid = $(this).attr('class');
                $("[id=" + tddid + "]").css('display', 'none');
                ;
            }
        });
        $("#register0").change(function () {  //咨询员联动
            $.ajax({
                type: "post",
                url: "<?php echo (DQURL); ?>ManageZx/zixunyuanLianDong",
                data: "zixunyuan=" + $("#register0").val(),
                success: function (msg) {
                    $("#userinfoZxy").html(msg);
                }
            });
        });
        $("#register0").change(function () {  //病种联动
            $.ajax({
                type: "post",
                url: "<?php echo (DQURL); ?>Addzixun/bzLianDong",
                data: "bzid=" + $("#register0").val(),
                success: function (msg) {
                    $("#userinfoBZ").html(msg);
                }
            });
        });
        $("#register0").change(function () {  //咨询方式联动
            $.ajax({
                type: "post",
                url: "<?php echo (DQURL); ?>Addzixun/ZiXunLianDong",
                data: "username=" + $("#register0").val(),
                success: function (msg) {
                    $("#userinfo0").html(msg);
                }
            });
        });
        $("#register0").change(function () {  //信息来源联动
            $.ajax({
                type: "post",
                url: "<?php echo (DQURL); ?>Addzixun/xxlyLianDong",
                data: "xxid=" + $("#register0").val(),
                success: function (msg) {
                    $("#userinfoXxly").html(msg);
                }
            });
        });
        $("#register0").change(function () {  //预约医生联动
            $.ajax({
                type: "post",
                url: "<?php echo (DQURL); ?>Addzixun/yuyueYYLiandong",
                data: "yyid=" + $("#register0").val(),
                success: function (msg) {
                    $("#userinfoYuyueys").html(msg);
                }
            });
        });
        $("#register0").change(function () {  //网站联动
            $.ajax({
                type: "post",
                url: "<?php echo (DQURL); ?>Addzixun/wzLianDong",
                data: "wzid=" + $("#register0").val(),
                success: function (msg) {
                    $("#userinfoWz").html(msg);
                    setTimeout(function () {
                        layer.closeAll('loading');
                    }, 500);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function () {  //手机下缩选项
        var w = document.body.clientWidth;
        if (w < 500) {
            $("#shoujisf1").addClass('border-bottom')
            $("#shoujisf2").addClass('fa-chevron-up')
            $("#shoujisf2").addClass('fa-chevron-down')
            $("#shoujisf3").css("display", "none");
        }
        $('.btn-primary').click(function () {  //筛选等待
            var $btn = $(this);
            $btn.button('loading');
            setTimeout(function () {
                $btn.button('reset');
            }, 2000);
        });
    });

    function anxia(tddid) { //隐藏表格
        if ($("." + tddid).is(":checked")) {
            $("[id=" + tddid + "]").css('display', '');
            ;
        } else {
            $("[id=" + tddid + "]").css('display', 'none');
            ;
        }
    };
    function fenpeikf() {
        $(this).attr('disabled','disabled');
        var cxfpid = $('#cxfpke').val();
        var zxids = '';
        $('input[id="quanxuan"]:checked').each(function () {
            if(parseInt($(this).val())>0){
                if(zxids == '' || zxids == null){
                    zxids += '\''+parseInt($(this).val())+'\'';
                }else{
                    zxids += ',\''+parseInt($(this).val()) + '\'';
                }
            }
        })
        if(zxids.length>0){
            if (parseInt(cxfpid)>0){
                $.ajax({
                    type: "post",
                    url: "<?php echo (DQURL); ?>ManageZx/fenpeikefu",
                    dataType: 'json',
                    data: {'cxfpid':cxfpid,'zxids':zxids},
                    success: function (data) {
                        if (data.code == 200) {
                            layer.msg(data.msg);
                            $(this).removeAttr('disabled');
                            $('#fenpeikehu').hide();
                            window.location.reload();
                        } else{
                            layer.msg(data.msg);
                            $(this).removeAttr('disabled');
                        }

                    }
                });
            }else{
                layer.msg('请选择重新分配的客服！')
            }
        }else{
            layer.msg('请至少选择一个分配客户！！')
        }

    }
</script>

</body>
</html>