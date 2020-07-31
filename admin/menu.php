<?php
use XoopsModules\Tadtools\TadMod;
$TadMod = new TadMod(basename(__DIR__));
$TadMod->add_adm_menu('分類管理', 'admin/cate.php', 'images/admin/category.png');
$TadMod->add_adm_menu('照片管理', 'admin/main.php', 'images/admin/art.png');
$adminmenu = $TadMod->get_adm_menu();
