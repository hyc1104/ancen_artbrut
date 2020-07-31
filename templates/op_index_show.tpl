<{$toolbar}>

<h2 class="my"><{$ancen_artbrut_photo.ancen_artbrut_photo_item_title_en}> / <{$ancen_artbrut_photo.ancen_artbrut_photo_item_title_tw}></h2>

<!--<{$ancen_artbrut_photo_show}>-->

<div class="table-responsive">
<table class="table table-striped table-sm">
  <tbody>
    <tr>
      <td colspan="3"><{$ancen_artbrut_cate.ancen_artbrut_cate_title}>編號#<{$ancen_artbrut_photo.ancen_artbrut_photo_sn}>
      </td>
    </tr>
    <tr>
      <td>
        Year / 年代
      </td>
      <td colspan="2">
        <{$ancen_artbrut_photo.ancen_artbrut_photo_year}>
      </td>
    </tr>
    <tr>
      <td>
        Size / 尺寸
      </td>
      <td colspan="2">
          <{$ancen_artbrut_photo.ancen_artbrut_photo_size}>
      </td>
    </tr>
    <tr>
      <td>
        Location / 收藏處
      </td>
      <td>
        <{$ancen_artbrut_photo.ancen_artbrut_photo_coveragr_en}>
      </td>
      <td>
        <{$ancen_artbrut_photo.ancen_artbrut_photo_coveragr_tw}>
      </td>
    </tr>
    <tr>
      <td>
        Collector / 收藏者
      </td>
      <td>
        <{$ancen_artbrut_photo.ancen_artbrut_photo_owner_en}>
      </td>
      <td>
        <{$ancen_artbrut_photo.ancen_artbrut_photo_owner_tw}>
      </td>
    </tr>
    <tr>
      <td>
        Producer / 創作者
      </td>
      <td>
        <{$ancen_artbrut_photo.ancen_artbrut_photo_creator_en}>
      </td>
      <td>
        <{$ancen_artbrut_photo.ancen_artbrut_photo_creator_tw}>
      </td>
    </tr>
    <tr>
      <td>
        Photographer / 拍攝者
      </td>
      <td>
        <{$ancen_artbrut_photo.ancen_artbrut_photo_photographer_en}>
      </td>
      <td>
        <{$ancen_artbrut_photo.ancen_artbrut_photo_photographer_tw}>
      </td>
    </tr>
	
	<tr>
      <td>
        Publisher / 出版者
      </td>
      <td>
        <{$ancen_artbrut_photo.ancen_artbrut_photo_publisher_en}>
      </td>
      <td>
        <{$ancen_artbrut_photo.ancen_artbrut_photo_publisher_tw}>
      </td>
    </tr>
	
	<tr>
      <td>
        Contributor / 貢獻者
      </td>
      <td>
        <{$ancen_artbrut_photo.ancen_artbrut_photo_contributor_en}>
      </td>
      <td>
        <{$ancen_artbrut_photo.ancen_artbrut_photo_contributor_tw}>
      </td>
    </tr>
	
    <tr>
      <td>
        Data formate / 資料型態
      </td>
      <td>
		<{$ancen_artbrut_photo.ancen_artbrut_photo_resourcetype_en}>
      </td>
      <td>
		<{$ancen_artbrut_photo.ancen_artbrut_photo_resourcetype_tw}>
      </td>
    </tr>
    <tr>
      <td>
        Digital productor / 數位典藏單位
      </td>
      <td>
        <{$ancen_artbrut_photo.ancen_artbrut_photo_d_right_en}>
      </td>
      <td>
        <{$ancen_artbrut_photo.ancen_artbrut_photo_d_right_tw}>
      </td>
    </tr>
	<tr>
      <td colspan="3">
        <img src="/uploads/ancen_artbrut/image/<{$ancen_artbrut_photo.ancen_artbrut_photo_category}>/<{$ancen_artbrut_photo.ancen_artbrut_photo_diginame}>" width="100%" class="img-thumbnail" alt="<{$ancen_artbrut_photo.ancen_artbrut_photo_item_title_en}> / <{$ancen_artbrut_photo.ancen_artbrut_photo_item_title_tw}>">
      </td>
    </tr>
	<{if $ancen_artbrut_photo.ancen_artbrut_photo_3dname!=NULL}>
    <tr>
      <td colspan="3">
        <video width="100%" controls>
		  <source src="/uploads/ancen_artbrut/file/<{$ancen_artbrut_photo.ancen_artbrut_photo_category}>/<{$ancen_artbrut_photo.ancen_artbrut_photo_3dname}>" type="video/mp4">
		</video>
      </td>
    </tr>
	<{/if}>
  </tbody>
</table>
<input class="btn btn-secondary btn-lg btn-block" type="button" value="返回" onclick="history.back()" />
<p></p>
</div>