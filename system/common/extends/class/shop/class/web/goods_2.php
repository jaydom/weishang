<?php
 if($_CMS['addons_bj_hx']) {
                   if(!empty($_GP['isverify']))
                    {
                    	 mysqld_delete('bj_hx_verify_goods', array('goodsid' => $id));
                 
                    	if(!empty($_GP['verifyshop_cb']))
	                    {
	                    	 foreach ($_GP['verifyshop_cb'] as $verifyshop_cb ) {
	                    		 mysqld_insert('bj_hx_verify_goods', array('goodsid' => $id,'verifyid'=>$verifyshop_cb,'createtime'=>time()));
	                    		}
	                    }
                    		
                    }else{
                    	 mysqld_delete('bj_hx_verify_goods', array('goodsid' => $id));
                 
                    }
                     }
                     
      