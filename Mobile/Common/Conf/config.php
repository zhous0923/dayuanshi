<?php
return array (
		// '配置项'=>'配置值'
		'URL_CASE_INSENSITIVE' =>true,	//URL访问不区分大小写
		'URL_HTML_SUFFIX' => 'jsp', 					// 多个用 | 分割伪静态配置
		// 添加自定义特殊变量  ！只在项目中生效，其他项目不生效。
		'TMPL_PARSE_STRING' => array (
				
				'__APP__' => __ROOT__.'/index.php',
				'__JS__' => __ROOT__ . '/Public/js',
				'__CSS__' => __ROOT__ . '/Public/css',
				'__IMG__' => __ROOT__ . '/Public/img',
				'__FONT__' => __ROOT__ . '/Public/fonts' 
		) 
);