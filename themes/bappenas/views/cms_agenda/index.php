<?php
/* @var $this Dashboard_agendaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agenda Dashboard Models',
);

$this->menu=array(
	array('label'=>'Create AgendaDashboardModel', 'url'=>array('create')),
	array('label'=>'Manage AgendaDashboardModel', 'url'=>array('admin')),
);
?>

<h1>Agenda Dashboard Models</h1>
<table>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>