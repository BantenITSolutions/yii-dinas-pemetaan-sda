<?php
/* @var $this Cms_user_dashboardController */
/* @var $model DashboardUserModel */

$this->breadcrumbs=array(
	'Dashboard User Models'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DashboardUserModel', 'url'=>array('index')),
	array('label'=>'Create DashboardUserModel', 'url'=>array('create')),
	array('label'=>'Update DashboardUserModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DashboardUserModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DashboardUserModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage User Dashboard</h5></div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'nama',
		'email',
		'access_menu',
	),
)); ?>
