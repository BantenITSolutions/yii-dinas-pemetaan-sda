<?php
/* @var $this Dashboard_koridorController */
/* @var $model KoridorModel */

$this->breadcrumbs=array(
	'Koridor Models'=>array('index'),
	$model->id_sektor,
);

$this->menu=array(
	array('label'=>'List KoridorModel', 'url'=>array('index')),
	array('label'=>'Create KoridorModel', 'url'=>array('create')),
	array('label'=>'Update KoridorModel', 'url'=>array('update', 'id'=>$model->id_sektor)),
	array('label'=>'Delete KoridorModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sektor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KoridorModel', 'url'=>array('admin')),
);
?>

<h3>View Sektor</h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sektor',
		'sektor',
	),
)); ?>
