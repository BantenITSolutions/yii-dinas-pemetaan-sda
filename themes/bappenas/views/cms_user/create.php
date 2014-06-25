<?php
/* @var $this Dashboard_userController */
/* @var $model UserDashboardModel */

$this->breadcrumbs=array(
	'User Dashboard Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserDashboardModel', 'url'=>array('index')),
	array('label'=>'Manage UserDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage User</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>