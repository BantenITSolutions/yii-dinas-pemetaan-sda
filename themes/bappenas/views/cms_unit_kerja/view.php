<?php
/* @var $this Cms_unit_kerjaController */
/* @var $model UnitKerjaModel */

$this->breadcrumbs=array(
	'Unit Kerja Models'=>array('index'),
	$model->id_unit_kerja,
);

$this->menu=array(
	array('label'=>'List UnitKerjaModel', 'url'=>array('index')),
	array('label'=>'Create UnitKerjaModel', 'url'=>array('create')),
	array('label'=>'Update UnitKerjaModel', 'url'=>array('update', 'id'=>$model->id_unit_kerja)),
	array('label'=>'Delete UnitKerjaModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_unit_kerja),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UnitKerjaModel', 'url'=>array('admin')),
);
?>

<h3>View Unit Kerja</h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_unit_kerja',
		'unit_kerja',
	),
)); ?>
