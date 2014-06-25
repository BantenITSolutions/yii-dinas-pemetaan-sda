<?php
/* @var $this Dashboard_contactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contact Dashboard Models',
);

$this->menu=array(
	array('label'=>'Create ContactDashboardModel', 'url'=>array('create')),
	array('label'=>'Manage ContactDashboardModel', 'url'=>array('admin')),
);
?>

<h1>Contact Dashboard Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
