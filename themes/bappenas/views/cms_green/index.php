<?php
/* @var $this Dashboard_greenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Green Dashboard Models',
);

$this->menu=array(
	array('label'=>'Create GreenDashboardModel', 'url'=>array('create')),
	array('label'=>'Manage GreenDashboardModel', 'url'=>array('admin')),
);
?>

<h1>Green Dashboard Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
