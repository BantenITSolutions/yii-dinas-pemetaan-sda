<?php
/* @var $this Dashboard_linkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Link Dashboard Models',
);

$this->menu=array(
	array('label'=>'Create LinkDashboardModel', 'url'=>array('create')),
	array('label'=>'Manage LinkDashboardModel', 'url'=>array('admin')),
);
?>

<h1>Link Dashboard Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
