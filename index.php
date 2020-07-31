<?php
use XoopsModules\Tadtools\TadModData;
use XoopsModules\Tadtools\Utility;
require_once "header.php";

$Model = new TadModData('ancen_artbrut_photo');
$clean = $Model->clean();

// 製作分類選單
$cate_arr = $Model->get_arr('ancen_artbrut_cate', 'ancen_artbrut_cate_sn', 'ancen_artbrut_cate_title');
$Model->use_select('ancen_artbrut_photo_category', $cate_arr);
$Model->replace('ancen_artbrut_photo_category', $cate_arr);
// 所見及所得
$Model->use_ckeditor('ancen_artbrut_photo_description_en', ['setHeight' => 150, 'setToolbarSet' => 'tadSimple']);
$Model->use_ckeditor('ancen_artbrut_photo_description_tw', ['setHeight' => 150, 'setToolbarSet' => 'tadSimple']);
$Model->use_ckeditor('ancen_artbrut_photo_memo_en', ['setHeight' => 150, 'setToolbarSet' => 'tadSimple']);
$Model->use_ckeditor('ancen_artbrut_photo_memo_tw', ['setHeight' => 150, 'setToolbarSet' => 'tadSimple']);

// 必填
$Model->set_require('ancen_artbrut_photo_category');
$Model->set_require('ancen_artbrut_photo_item_title_en');
$Model->set_require('ancen_artbrut_photo_item_title_tw');
$Model->set_require('ancen_artbrut_photo_size');
$Model->set_require('ancen_artbrut_photo_3dname');
$Model->set_require('ancen_artbrut_photo_diginame');
$Model->set_require('ancen_artbrut_photo_resource');
$Model->set_require('ancen_artbrut_photo_record');
$Model->set_require('ancen_artbrut_photo_photographer_en');
$Model->set_require('ancen_artbrut_photo_photographer_tw');
$Model->set_require('ancen_artbrut_photo_coveragr_en');
$Model->set_require('ancen_artbrut_photo_coveragr_tw');
$Model->set_require('ancen_artbrut_photo_description_en');
$Model->set_require('ancen_artbrut_photo_description_tw');
$Model->set_require('ancen_artbrut_photo_year');
$Model->set_require('ancen_artbrut_photo_keywords_en');
$Model->set_require('ancen_artbrut_photo_keywords_tw');
$Model->set_require('ancen_artbrut_photo_creator_en');
$Model->set_require('ancen_artbrut_photo_creator_tw');
$Model->set_require('ancen_artbrut_photo_resourcetype_en');
$Model->set_require('ancen_artbrut_photo_resourcetype_tw');
$Model->set_require('ancen_artbrut_photo_owner_en');
$Model->set_require('ancen_artbrut_photo_owner_tw');
$Model->set_require('ancen_artbrut_photo_publisher_en');
$Model->set_require('ancen_artbrut_photo_publisher_tw');
$Model->set_require('ancen_artbrut_photo_contributor_en');
$Model->set_require('ancen_artbrut_photo_contributor_tw');
$Model->set_require('ancen_artbrut_photo_language_en');
$Model->set_require('ancen_artbrut_photo_language_tw');
$Model->set_require('ancen_artbrut_photo_relation_en');
$Model->set_require('ancen_artbrut_photo_relation_tw');
$Model->set_require('ancen_artbrut_photo_o_right_en');
$Model->set_require('ancen_artbrut_photo_o_right_tw');
$Model->set_require('ancen_artbrut_photo_d_right_en');
$Model->set_require('ancen_artbrut_photo_d_right_tw');
$Model->set_require('ancen_artbrut_photo_metadata_en');
$Model->set_require('ancen_artbrut_photo_metadata_tw');
$Model->set_require('ancen_artbrut_photo_memo_en');
$Model->set_require('ancen_artbrut_photo_memo_tw');

// Show 不顯示
$Model->disable('ancen_artbrut_photo_3dname', ['index']);
$Model->disable('ancen_artbrut_photo_resource', ['index']);
$Model->disable('ancen_artbrut_photo_record', ['index']);
$Model->disable('ancen_artbrut_photo_photographer_en', ['index']);
$Model->disable('ancen_artbrut_photo_photographer_tw', ['index']);
$Model->disable('ancen_artbrut_photo_coveragr_en', ['index']);
$Model->disable('ancen_artbrut_photo_coveragr_tw', ['index']);
$Model->disable('ancen_artbrut_photo_description_en', ['index']);
$Model->disable('ancen_artbrut_photo_description_tw', ['index']);
$Model->disable('ancen_artbrut_photo_year', ['index']);
$Model->disable('ancen_artbrut_photo_keywords_en', ['index']);
$Model->disable('ancen_artbrut_photo_keywords_tw', ['index']);
$Model->disable('ancen_artbrut_photo_creator_en', ['index']);
$Model->disable('ancen_artbrut_photo_creator_tw', ['index']);
$Model->disable('ancen_artbrut_photo_resourcetype_en', ['index']);
$Model->disable('ancen_artbrut_photo_resourcetype_tw', ['index']);
$Model->disable('ancen_artbrut_photo_owner_en', ['index']);
$Model->disable('ancen_artbrut_photo_owner_tw', ['index']);
$Model->disable('ancen_artbrut_photo_publisher_en', ['index']);
$Model->disable('ancen_artbrut_photo_publisher_tw', ['index']);
$Model->disable('ancen_artbrut_photo_contributor_en', ['index']);
$Model->disable('ancen_artbrut_photo_contributor_tw', ['index']);
$Model->disable('ancen_artbrut_photo_language_en', ['index']);
$Model->disable('ancen_artbrut_photo_language_tw', ['index']);
$Model->disable('ancen_artbrut_photo_relation_en', ['index']);
$Model->disable('ancen_artbrut_photo_relation_tw', ['index']);
$Model->disable('ancen_artbrut_photo_o_right_en', ['index']);
$Model->disable('ancen_artbrut_photo_o_right_tw', ['index']);
$Model->disable('ancen_artbrut_photo_d_right_en', ['index']);
$Model->disable('ancen_artbrut_photo_d_right_tw', ['index']);
$Model->disable('ancen_artbrut_photo_metadata_en', ['index']);
$Model->disable('ancen_artbrut_photo_metadata_tw', ['index']);
$Model->disable('ancen_artbrut_photo_memo_en', ['index']);
$Model->disable('ancen_artbrut_photo_memo_tw', ['index']);

// 加入分頁
$Model->pagebar(25);

// 加上連結
$Model->set_link('ancen_artbrut_photo_item_title_en', 'index.php', ['op' => 'show', 'ancen_artbrut_photo_sn']);
$Model->set_link('ancen_artbrut_photo_item_title_tw', 'index.php', ['op' => 'show', 'ancen_artbrut_photo_sn']);

// 將編輯和新增的按鈕連結改到後台
$Model->set_func('create', 'admin/main.php');
$Model->set_func('edit', 'admin/main.php');
$Model->set_func('destroy', false);

switch ($op) {
    case "create":
        $Model->create();
        break;

    case "edit":
        $Model->edit($clean['ancen_artbrut_photo_sn']);
        break;

    case "show":
        $Model->show($clean['ancen_artbrut_photo_sn']);
        break;

    case "update":
        $Model->update($clean['ancen_artbrut_photo_sn']);
        header("location:{$self}");
        exit;

    case "store":
        $Model->store();
        header("location:{$self}");
        exit;

    case "destroy":
        $Model->destroy($clean['ancen_artbrut_photo_sn']);
        header("location:{$self}");
        exit;

    default:
        $Model->index();
        break;
}
require_once "footer.php";
