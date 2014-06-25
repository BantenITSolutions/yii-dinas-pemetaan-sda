<?php
/* @var $this Dashboard_contactController */
/* @var $model ContactDashboardModel */

$this->breadcrumbs=array(
	'Contact Dashboard Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ContactDashboardModel', 'url'=>array('index')),
	array('label'=>'Manage ContactDashboardModel', 'url'=>array('admin')),
);
?>

<h1>Create ContactDashboardModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>