<{$toolbar}>

<h2 class="my">台灣原生藝術資料列表</h2>

<!--<{$ancen_artbrut_photo_index}>-->

<{$bar}>

<div class="row">
	<{foreach from=$ancen_artbrut_photo item=ancen_artbrut_photo}>
      <div class="col-md-4">
		<div class="alert alert-info">
		  <strong><{$ancen_artbrut_photo.ancen_artbrut_photo_item_title_en}></strong> / <{$ancen_artbrut_photo.ancen_artbrut_photo_item_title_tw}>
		  <{if $ancen_artbrut_photo.ancen_artbrut_photo_3dname!=NULL}>(3D)<{/if}>
		</div>
			<p>
				<a class="btn btn-secondary" href="index.php?op=show&ancen_artbrut_photo_sn=<{$ancen_artbrut_photo.ancen_artbrut_photo_sn}>"><img src="/uploads/ancen_artbrut/image/<{$ancen_artbrut_photo.ancen_artbrut_photo_category}>/<{$ancen_artbrut_photo.ancen_artbrut_photo_diginame}>" width="100%" class="img-thumbnail" alt="<{$ancen_artbrut_photo.ancen_artbrut_photo_item_title_en}> / <{$ancen_artbrut_photo.ancen_artbrut_photo_item_title_tw}>"></a>
			</p>
      </div>
	<{/foreach}>
</div>

<{$bar}>