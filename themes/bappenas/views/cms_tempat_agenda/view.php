<?php
/* @var $this Cms_tempat_agendaController */
/* @var $model TempatAgendaModel */

$this->breadcrumbs=array(
	'Tempat Agenda Models'=>array('index'),
	$model->id_tempat,
);

$this->menu=array(
	array('label'=>'List TempatAgendaModel', 'url'=>array('index')),
	array('label'=>'Create TempatAgendaModel', 'url'=>array('create')),
	array('label'=>'Update TempatAgendaModel', 'url'=>array('update', 'id'=>$model->id_tempat)),
	array('label'=>'Delete TempatAgendaModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tempat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TempatAgendaModel', 'url'=>array('admin')),
);
?>

<h3>View Tempat Agenda</h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tempat',
		'tempat',
	),
)); ?>
