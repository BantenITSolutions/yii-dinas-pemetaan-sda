<?php
/* @var $this Cms_user_dashboardController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dashboard User Models',
);

$this->menu=array(
	array('label'=>'Create DashboardUserModel', 'url'=>array('create')),
	array('label'=>'Manage DashboardUserModel', 'url'=>array('admin')),
);
?>

<h1>Dashboard User Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
