<?php
/* @var $this Dashboard_proyek_prioritasController */
/* @var $model ProyekPrioritasDashboardModel */

$this->breadcrumbs=array(
	'Proyek Prioritas Dashboard Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProyekPrioritasDashboardModel', 'url'=>array('index')),
	array('label'=>'Manage ProyekPrioritasDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Proyek Prioritas</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>