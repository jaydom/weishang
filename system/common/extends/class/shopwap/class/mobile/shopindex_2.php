<?php

		 if($_CMS['addons_bj_tbk'])
        {
        	
        	if(is_login_account())
        	{
        			if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
        				if(empty($dzddes))
        				{
        					$dzddes=	$settings['bj_tbk_description'];
        				}
        				
        					if(empty($dzdtitle))
        				{
        					$dzdtitle=	$settings['shop_title'];
        				}
        				
        					$dzdpic=	WEBSITE_ROOT.'/attachment/'.$settings['shop_logo'];
        				
        		
        				$bj_tbk_weixin_share=bj_tbk_weixin_share('shopindex',array(),$dzdtitle,$dzdpic,$dzddes,$settings);
       			 }
        	
        	
	        	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
					include WEB_ROOT.'/addons/bj_tbk/template/mobile/weixinshare.php';
				}
			}
				}