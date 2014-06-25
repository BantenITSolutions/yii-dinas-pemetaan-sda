<?php
/* @var $this Cms_statistik_headerController */
/* @var $model HeaderStatistik */

$this->breadcrumbs=array(
	'Header Statistiks'=>array('index'),
	$model->id_header_statistik,
);

$this->menu=array(
	array('label'=>'List HeaderStatistik', 'url'=>array('index')),
	array('label'=>'Create HeaderStatistik', 'url'=>array('create')),
	array('label'=>'Update HeaderStatistik', 'url'=>array('update', 'id'=>$model->id_header_statistik)),
	array('label'=>'Delete HeaderStatistik', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_header_statistik),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HeaderStatistik', 'url'=>array('admin')),
);
?>

<h1>View Jalur #<?php echo $model->id_header_statistik; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_header_statistik',
		'jalur',
		'tampil',
	),
)); ?>
