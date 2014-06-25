<?php
/* @var $this Dashboard_database_infrastrukturController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dashboard Dbi Models',
);

$this->menu=array(
	array('label'=>'Create DashboardDbiModel', 'url'=>array('create')),
	array('label'=>'Manage DashboardDbiModel', 'url'=>array('admin')),
);
?>

<h1>Dashboard Dbi Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
