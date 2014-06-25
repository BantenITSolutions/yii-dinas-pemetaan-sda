<?php
/* @var $this Cms_user_dashboardController */
/* @var $model DashboardUserModel */

$this->breadcrumbs=array(
	'Dashboard User Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DashboardUserModel', 'url'=>array('index')),
	array('label'=>'Manage DashboardUserModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage User Dashboard</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>