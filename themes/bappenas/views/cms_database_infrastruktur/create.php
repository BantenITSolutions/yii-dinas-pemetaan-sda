<?php
/* @var $this Dashboard_database_infrastrukturController */
/* @var $model DashboardDbiModel */

$this->breadcrumbs=array(
	'Dashboard Dbi Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DashboardDbiModel', 'url'=>array('index')),
	array('label'=>'Manage DashboardDbiModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Database Infrastruktur</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>