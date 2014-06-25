<?php
/* @var $this Dashboard_klipingController */
/* @var $model KlipingDashboardModel */

$this->breadcrumbs=array(
	'Kliping Dashboard Models'=>array('index'),
	$model->id_kliping=>array('view','id'=>$model->id_kliping),
	'Update',
);

$this->menu=array(
	array('label'=>'List KlipingDashboardModel', 'url'=>array('index')),
	array('label'=>'Create KlipingDashboardModel', 'url'=>array('create')),
	array('label'=>'View KlipingDashboardModel', 'url'=>array('view', 'id'=>$model->id_kliping)),
	array('label'=>'Manage KlipingDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Kliping</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>