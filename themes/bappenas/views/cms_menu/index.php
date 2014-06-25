<?php
/* @var $this Dashboard_menuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dashboard Menu Models',
);

$this->menu=array(
	array('label'=>'Create DashboardMenuModel', 'url'=>array('create')),
	array('label'=>'Manage DashboardMenuModel', 'url'=>array('admin')),
);
?>

<h1>Dashboard Menu Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
