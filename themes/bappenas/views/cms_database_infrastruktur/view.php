
<div class="title"><h5>Manage Database Infrastruktur</h5></div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'lat',
		'lang',
		'nama_proyek',
		'Koridor.koridor',
		'SumberDana.sumber_dana',
		'Sektor.sektor',
		'mulai',
		'selesai',
		'Kawasan.kawasan',
		'Kategori.kategori',
		'NilaiInvestasi.nilai_investasi',
		'Pelaksana.pelaksana'
	),
)); ?>
