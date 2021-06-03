<?php
return array(
//'配置项'=>'配置值'
'DB_TYPE'   => 'mysql', // 数据库类型
'DB_HOST'   => 'localhost', // 服务器地址 
'DB_NAME'   => '20210603mbs', // 数据库名
'DB_USER'   => 'root', // 用户名
'DB_PWD'    => '123456', // 密码
'DB_PORT'   => 3306, // 端口 


'DEFAULT_FILTER' =>  'strip_tags,stripslashes', //I 函数过滤
'TMPL_ACTION_SUCCESS'=>'Public:dispatch_jump', //提示页面
'TMPL_ACTION_ERROR'=>'Public:dispatch_jump', //提示页面
'DEFAULT_MODULE'        =>  'Oa',   //默认模块
'MODULE_ALLOW_LIST'     =>  array('Oa','Ob'),
'URL_HTML_SUFFIX'=>'aspx|asp|html|htm|php', //URL后缀
//'LOAD_EXT_CONFIG' => 'const',//常量文件
);