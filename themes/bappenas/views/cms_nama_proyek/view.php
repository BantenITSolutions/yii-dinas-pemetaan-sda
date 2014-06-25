<?php
/* @var $this Dashboard_koridorController */
/* @var $model KoridorModel */

$this->breadcrumbs=array(
	'Koridor Models'=>array('index'),
	$model->id_nama_proyek,
);

$this->menu=array(
	array('label'=>'List KoridorModel', 'url'=>array('index')),
	array('label'=>'Create KoridorModel', 'url'=>array('create')),
	array('label'=>'Update KoridorModel', 'url'=>array('update', 'id'=>$model->id_nama_proyek)),
	array('label'=>'Delete KoridorModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_nama_proyek),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KoridorModel', 'url'=>array('admin')),
);
?>

<h3>View Nama Proyek</h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_nama_proyek',
		'nama_proyek',
	),
)); ?>
