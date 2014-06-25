<?php
/* @var $this Dashboard_contactController */
/* @var $model ContactDashboardModel */

$this->breadcrumbs=array(
	'Contact Dashboard Models'=>array('index'),
	$model->id_hubungi=>array('view','id'=>$model->id_hubungi),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContactDashboardModel', 'url'=>array('index')),
	array('label'=>'Create ContactDashboardModel', 'url'=>array('create')),
	array('label'=>'View ContactDashboardModel', 'url'=>array('view', 'id'=>$model->id_hubungi)),
	array('label'=>'Manage ContactDashboardModel', 'url'=>array('admin')),
);
?>
<div class="title"><h5>Manage Contact</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
			
