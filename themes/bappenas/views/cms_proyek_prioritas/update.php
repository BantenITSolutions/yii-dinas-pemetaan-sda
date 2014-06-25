<?php
/* @var $this Dashboard_proyek_prioritasController */
/* @var $model ProyekPrioritasDashboardModel */

$this->breadcrumbs=array(
	'Proyek Prioritas Dashboard Models'=>array('index'),
	$model->id_proyek_prioritas=>array('view','id'=>$model->id_proyek_prioritas),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProyekPrioritasDashboardModel', 'url'=>array('index')),
	array('label'=>'Create ProyekPrioritasDashboardModel', 'url'=>array('create')),
	array('label'=>'View ProyekPrioritasDashboardModel', 'url'=>array('view', 'id'=>$model->id_proyek_prioritas)),
	array('label'=>'Manage ProyekPrioritasDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Proyek Prioritas</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>