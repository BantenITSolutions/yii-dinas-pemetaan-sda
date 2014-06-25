<?php
/* @var $this Dashboard_klipingController */
/* @var $model KlipingDashboardModel */

$this->breadcrumbs=array(
	'Kliping Dashboard Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KlipingDashboardModel', 'url'=>array('index')),
	array('label'=>'Manage KlipingDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Kliping</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>