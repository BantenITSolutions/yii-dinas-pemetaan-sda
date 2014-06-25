<?php
/* @var $this Dashboard_front_page_menuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dashboard Front Menu Models',
);

$this->menu=array(
	array('label'=>'Create DashboardFrontMenuModel', 'url'=>array('create')),
	array('label'=>'Manage DashboardFrontMenuModel', 'url'=>array('admin')),
);
?>

<h1>Dashboard Front Menu Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
