<?php
/* @var $this Dashboard_klipingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kliping Dashboard Models',
);

$this->menu=array(
	array('label'=>'Create KlipingDashboardModel', 'url'=>array('create')),
	array('label'=>'Manage KlipingDashboardModel', 'url'=>array('admin')),
);
?>

<h1>Kliping Dashboard Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
