<?php
/* @var $this Cms_tempat_agendaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tempat Agenda Models',
);

$this->menu=array(
	array('label'=>'Create TempatAgendaModel', 'url'=>array('create')),
	array('label'=>'Manage TempatAgendaModel', 'url'=>array('admin')),
);
?>

<h1>Tempat Agenda Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
