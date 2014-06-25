<?php
/* @var $this Dashboard_sislognasController */
/* @var $model SislognasDashboardModel */

$this->breadcrumbs=array(
	'Sislognas Dashboard Models'=>array('index'),
	$model->id_green=>array('view','id'=>$model->id_green),
	'Update',
);

$this->menu=array(
	array('label'=>'List SislognasDashboardModel', 'url'=>array('index')),
	array('label'=>'Create SislognasDashboardModel', 'url'=>array('create')),
	array('label'=>'View SislognasDashboardModel', 'url'=>array('view', 'id'=>$model->id_green)),
	array('label'=>'Manage SislognasDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage GREEN MP3EI </h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>