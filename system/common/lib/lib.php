<?php
// +----------------------------------------------------------------------
// | WE CAN DO IT JUST FREE
// +----------------------------------------------------------------------
// | Copyright (c) 2015 http://www.baijiacms.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 百家威信 <QQ:2752555327> <http://www.baijiacms.com>
// +----------------------------------------------------------------------
defined('SYSTEM_IN') or exit('Access Denied');
require(WEB_ROOT.'/system/common/lib/lib_core.php');
require(WEB_ROOT.'/system/common/lib/lib_weixin.php');
require(WEB_ROOT.'/system/common/lib/lib_alipay.php');
if(is_file(WEB_ROOT.'/system/modules/plugin/thirdlogin/qq/lib_qq.php'))
{
require(WEB_ROOT.'/system/modules/plugin/thirdlogin/qq/lib_qq.php');
}
if(is_file(WEB_ROOT.'/addons/bj_tbk/lib/lib_bj_tbk.php'))
{

require(WEB_ROOT.'/addons/bj_tbk/lib/lib_bj_tbk.php');
require(WEB_ROOT.'/addons/bj_tbk/lib/lib_bj_tbk_message.php');
	$addons_bj_tbk = mysqld_select("SELECT * FROM " . table('modules') . " WHERE isdisable=0 and `name`='bj_tbk'");
	if(!empty($addons_bj_tbk['name']))
	{
			$_CMS['addons_bj_tbk']=true;
	}
}
if(is_file(WEB_ROOT.'/addons/bj_hx/lib/lib_bj_hx.php'))
{

	require(WEB_ROOT.'/addons/bj_hx/lib/lib_bj_hx.php');
		$addons_bj_hx = mysqld_select("SELECT * FROM " . table('modules') . " WHERE isdisable=0 and `name`='bj_hx'");
	if(!empty($addons_bj_hx['name']))
	{
				$_CMS['addons_bj_hx']=true;
	}
}
require(WEB_ROOT.'/system/common/lib/lib_login.php');
