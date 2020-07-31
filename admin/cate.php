<?php
use XoopsModules\Tadtools\TadModData;
use XoopsModules\Tadtools\Utility;
require_once "header.php";

$Model = new TadModData('ancen_artbrut_cate');

// 排序
$Model->set_sort('ancen_artbrut_cate_sort');
$clean = $Model->clean();

// 單選
$Model->use_radio('ancen_artbrut_cate_enable', [1 => '啟用', 0 => '關閉']);
$enable_arr = [1 => '啟用', 0 => '關閉'];
$Model->replace('ancen_artbrut_cate_enable', $enable_arr);

// 必填
$Model->set_require('ancen_artbrut_cate_parent_sn');
$Model->set_require('ancen_artbrut_cate_title');
$Model->set_require('ancen_artbrut_cate_desc');
$Model->set_require('ancen_artbrut_cate_sort');
$Model->set_require('ancen_artbrut_cate_enable');

switch ($op) {
    case "create":
        $Model->create();
        break;

    case "edit":
        $Model->edit($clean['ancen_artbrut_cate_sn']);
        break;

    case "show":
        $Model->show($clean['ancen_artbrut_cate_sn']);
        break;

    case "update":
        $Model->update($clean['ancen_artbrut_cate_sn']);
        header("location:{$self}");
        exit;

    case "store":
        $Model->store();
        header("location:{$self}");
        exit;

    case "destroy":
        $Model->destroy($clean['ancen_artbrut_cate_sn']);
        header("location:{$self}");
        exit;

    default:
        $Model->index();
        break;
}
require_once "footer.php";
