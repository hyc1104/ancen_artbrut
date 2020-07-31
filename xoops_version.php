<?php
use XoopsModules\Tadtools\TadMod;
$TadMod = new TadMod(basename(__DIR__));

// $TadMod->setup('模組名稱', '1.0', '2020/05/31', 'tad0616@gmail.com', 'Tad');
$TadMod->setup('台灣原生藝術', '1.0', '2020/07/28', 'ancen@mail.clhyc.tw', 'Ancen');
// $TadMod->add_config('show_num', '偏好設定標題', '', 'textbox', 'int', 20);
// $TadMod->add_blocks('data_list', '區塊標題', '', ['顯示資料數' => 10]);

$lang = $TadMod->get_lang('mi');
foreach ($lang as $const_arr) {
    foreach ($const_arr as $const => $value) {
        define($const, $value);
    }
}
$modversion = $TadMod->xoops_version();
