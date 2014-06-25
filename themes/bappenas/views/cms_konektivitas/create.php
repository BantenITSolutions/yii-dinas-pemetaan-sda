<?php
/* @var $this Dashboard_sislognasController */
/* @var $model SislognasDashboardModel */

$this->breadcrumbs=array(
	'Sislognas Dashboard Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SislognasDashboardModel', 'url'=>array('index')),
	array('label'=>'Manage SislognasDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Konektivitas Asean</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>