<script type="text/javascript">
$(document).ready(function() {
  	$.ajax({
    type: 'post',
    url: '<?php echo Yii::app()->baseUrl; ?>/dbi/set_resolusi/',
    data: 'set_resolusi='+$(window).height(),
	    success: function(response) {
	    }
	});
});
</script>
<style type="text/css">
body{
	margin: 0;
	font-size: 12px;
	font-family: Arial;
	padding: 0px;
}
</style>
	<?php
	Yii::import('ext.gmap.*');
	 
	$gMap = new EGMap();
	$gMap->zoom = 5;
	$gMap->setWidth("100%");
	$gMap->setHeight("550px");
	$mapTypeControlOptions = array(
	  'position'=> EGMapControlPosition::LEFT_BOTTOM,
	  'style'=>EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
	);
	 
	$gMap->mapTypeControlOptions= $mapTypeControlOptions;
	 
	$gMap->setCenter(-1.537901,118.476563);

	
	foreach($model as $md)
	{
        $criteria = new CDbCriteria;
		$criteria->condition = "id_infrastruktur = '".$md->id_infrastruktur."'"; 
        $dt = ProyekPrioritasDashboardModel::model()->find($criteria);

		$icon = new EGMapMarkerImage(Yii::app()->theme->baseUrl.'/icon/'.$md->Sektor->id_sektor.'.png');
 
		$icon->setSize(32, 37);
		$icon->setAnchor(16, 16.5);
		$icon->setOrigin(0, 0);

		$marker = new EGMapMarker($md['lat'],$md['lang'], array('title' => $md->nama_proyek,'icon'=>$icon));
		$info_window = new EGMapInfoWindow('<div><b>Nama Proyek : '.$md->nama_proyek.'</b></div><div><b>Nilai Investasi : '.$md->NilaiInvestasi->nilai_investasi.'</b></div><div><b>Sumber Dana : '.$md->SumberDana->sumber_dana.'</b></div><div><b>Mulai : '.$md->mulai.'</b></div><div><b>Selesai : '.$md->selesai.'</b></div><div><b>KPI : '.$md->Kawasan->kawasan.'</b></div><div><b>Keterangan : '.$dt['isi'].'</b></div>');
		$marker->addHtmlInfoWindow($info_window);
		$gMap->addMarker($marker);
	}

	 

	$gMap->renderMap();
	?>




