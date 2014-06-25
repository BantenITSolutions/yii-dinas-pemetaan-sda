<?php
/* @var $this Dashboard_linkController */
/* @var $model LinkDashboardModel */

$this->breadcrumbs=array(
	'Link Dashboard Models'=>array('index'),
	$model->id_link=>array('view','id'=>$model->id_link),
	'Update',
);

$this->menu=array(
	array('label'=>'List LinkDashboardModel', 'url'=>array('index')),
	array('label'=>'Create LinkDashboardModel', 'url'=>array('create')),
	array('label'=>'View LinkDashboardModel', 'url'=>array('view', 'id'=>$model->id_link)),
	array('label'=>'Manage LinkDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Link</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>