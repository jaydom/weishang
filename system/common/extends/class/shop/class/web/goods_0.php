<?php
 if($_CMS['addons_bj_hx']) {
                  $bj_hx_verify_goods = mysqld_selectall("SELECT bj_hx_verify_goods.*,bj_hx_verify.vname FROM " . table('bj_hx_verify_goods') . " bj_hx_verify_goods left join " . table('bj_hx_verify') . " bj_hx_verify on bj_hx_verify_goods.verifyid=bj_hx_verify.id WHERE bj_hx_verify_goods.goodsid = :goodsid", array(':goodsid' => $id));
              
  }
