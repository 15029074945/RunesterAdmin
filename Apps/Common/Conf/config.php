<?php
if (!defined('THINK_PATH')) exit();

return array(
	//��Ŀ���ã��벻Ҫ����Ķ���
	'LOAD_EXT_CONFIG' => 'db', 
    'TMPL_STRIP_SPACE'  => true, //ȥ��ģ������Ŀո�
    'DEFAULT_THEME'     => 'default',
    'TMPL_TEMPLATE_SUFFIX' => '.tpl',
    'TOKEN_ON'=>false,  // �Ƿ���������֤
    'DEFAULT_MODULE'	 => 'Home',
    'SESSION_AUTO_START' => false,
    'MODULE_ALLOW_LIST'  => array('Home','Adminx'),
    'MODULE_DENY_LIST'      =>  array('Common','Public'),
);
?>