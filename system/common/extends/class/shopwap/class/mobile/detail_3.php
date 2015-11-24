<?php    
			 if($_CMS['addons_bj_tbk'])
        {
        	
        	if(is_login_account())
        	{
        	
        	
	        	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
					include WEB_ROOT.'/addons/bj_tbk/template/mobile/weixinshare.php';
				}
			}
				}