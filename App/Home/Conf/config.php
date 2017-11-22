<?php
return array(
	//'配置项'=>'配置值'
    'TMPL_PARSE_STRING' => array(
        '__PUBLIC__' => __ROOT__ . '/Public',
        '__JS__' => __ROOT__ . '/Public/Js',
        '__CSS__' => __ROOT__ . '/Public/Css',
        '__IMAGE__' => __ROOT__ . '/Public/Image',
        '__UPLOADS__' => __ROOT__ . '/Public/Uploads',
        '__JSON__' => __ROOT__ . '/Public/Json',
    ),
    'DEFAULT_M_LAYER' => 'Model', // 默认的模型层名称
    'DEFAULT_AJAX_RETURN' => 'JSON',
);