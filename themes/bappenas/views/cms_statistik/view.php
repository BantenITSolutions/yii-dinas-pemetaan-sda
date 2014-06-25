<?php
/* @var $this Cms_statistikController */
/* @var $model DetailStatistik */

$this->breadcrumbs=array(
	'Detail Statistiks'=>array('index'),
	$model->id_detail_statistik,
);

$this->menu=array(
	array('label'=>'List DetailStatistik', 'url'=>array('index')),
	array('label'=>'Create DetailStatistik', 'url'=>array('create')),
	array('label'=>'Update DetailStatistik', 'url'=>array('update', 'id'=>$model->id_detail_statistik)),
	array('label'=>'Delete DetailStatistik', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_detail_statistik),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetailStatistik', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Statistik Dwelling Time </h5></div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_detail_statistik',
		'id_header_statistik',
		'bulan',
		'pre_clearance',
		'customs_clearance',
		'posts_clearance',
	),
)); ?>
