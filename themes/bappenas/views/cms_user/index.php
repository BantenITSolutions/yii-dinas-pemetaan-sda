<?php
/* @var $this Dashboard_userController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Dashboard Models',
);

$this->menu=array(
	array('label'=>'Create UserDashboardModel', 'url'=>array('create')),
	array('label'=>'Manage UserDashboardModel', 'url'=>array('admin')),
);
?>

<h1>User Dashboard Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
