<?php
  if($_CMS['addons_bj_hx']) {
               $verifylist = mysqld_selectall("SELECT * FROM " . table('bj_hx_verify'));
   }