<?php
/* @var $this Dashboard_dokumenController */
/* @var $model DokumenDashboardModel */

$this->breadcrumbs=array(
	'Dokumen Dashboard Models'=>array('index'),
	$model->id_dokumen,
);

$this->menu=array(
	array('label'=>'List DokumenDashboardModel', 'url'=>array('index')),
	array('label'=>'Create DokumenDashboardModel', 'url'=>array('create')),
	array('label'=>'Update DokumenDashboardModel', 'url'=>array('update', 'id'=>$model->id_dokumen)),
	array('label'=>'Delete DokumenDashboardModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dokumen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DokumenDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Dokumen </h5></div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_dokumen',
		array(
			'label'=>'Kategori Dokumen',
			'type'=>'raw',
			'value'=>$model->KategoriDokumen->kat_dokumen
			),
		'nama_dokumen',
		'gambar',
		array(
			'label'=>'Rangkuman',
			'type'=>'raw',
			'value'=>$model->rangkuman
			),
		'nama_file',
	),
)); ?>
