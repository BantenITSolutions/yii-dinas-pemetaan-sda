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

	if(Yii::app()->session['nama_proyek']!="" ||
		Yii::app()->session['id_koridor']!="" ||
		Yii::app()->session['id_sumber_dana']!="" ||
		Yii::app()->session['id_sektor']!="" ||
		Yii::app()->session['id_nilai_investasi']!="" ||
		Yii::app()->session['id_pelaksana']!="" ||
		Yii::app()->session['id_kategori']!="" ||
		Yii::app()->session['mulai']!="" ||
		Yii::app()->session['selesai']!="" ||
		Yii::app()->session['id_kawasan']!="")
	{
		foreach($model as $md)
		{
			$icon = new EGMapMarkerImage(Yii::app()->theme->baseUrl.'/icon/'.$md->Sektor->id_sektor.'.png');
	 
			$icon->setSize(32, 37);
			$icon->setAnchor(16, 16.5);
			$icon->setOrigin(0, 0);

			$marker = new EGMapMarker($md['lat'],$md['lang'], array('title' => $md->nama_proyek,'icon'=>$icon));
			$info_window = new EGMapInfoWindow('<div><b>Nama Proyek : '.$md->nama_proyek.'</b></div><div><b>Nilai Investasi : '.$md->NilaiInvestasi->nilai_investasi.'</b></div><div><b>Sumber Dana : '.$md->SumberDana->sumber_dana.'</b></div><div><b>Mulai : '.$md->mulai.'</b></div><div><b>Selesai : '.$md->selesai.'</b></div><div><b>KPI : '.$md->Kawasan->kawasan.'</b></div>');
			$marker->addHtmlInfoWindow($info_window);
			$gMap->addMarker($marker);
		}
	}
	else if(Yii::app()->session['id_nama_proyek']=="semua" ||
		Yii::app()->session['id_koridor']=="semua" ||
		Yii::app()->session['id_sumber_dana']=="semua" ||
		Yii::app()->session['id_sektor']=="semua" ||
		Yii::app()->session['id_nilai_investasi']=="semua" ||
		Yii::app()->session['id_pelaksana']=="semua" ||
		Yii::app()->session['id_kategori']=="semua" ||
		Yii::app()->session['mulai']=="semua" ||
		Yii::app()->session['selesai']=="semua" ||
		Yii::app()->session['id_kawasan']=="semua")
	{
		foreach($model as $md)
		{
			$icon = new EGMapMarkerImage(Yii::app()->theme->baseUrl.'/icon/'.$md->Sektor->id_sektor.'.png');
	 
			$icon->setSize(32, 37);
			$icon->setAnchor(16, 16.5);
			$icon->setOrigin(0, 0);

			$marker = new EGMapMarker($md['lat'],$md['lang'], array('title' => $md->nama_proyek,'icon'=>$icon));
			$info_window = new EGMapInfoWindow('<div><b>'.$md->nama_proyek.'</b></div>');
			$marker->addHtmlInfoWindow($info_window);
			$gMap->addMarker($marker);
		}
	}

	 

	$gMap->renderMap();
	?>




