<?php
/* @var $this Dashboard_agendaController */
/* @var $model AgendaDashboardModel */

$this->breadcrumbs=array(
	'Agenda Dashboard Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AgendaDashboardModel', 'url'=>array('index')),
	array('label'=>'Manage AgendaDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Agenda</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>