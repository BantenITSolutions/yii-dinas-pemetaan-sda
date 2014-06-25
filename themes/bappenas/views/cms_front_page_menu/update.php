<?php
/* @var $this Dashboard_front_page_menuController */
/* @var $model DashboardFrontMenuModel */

$this->breadcrumbs=array(
	'Dashboard Front Menu Models'=>array('index'),
	$model->id_menu=>array('view','id'=>$model->id_menu),
	'Update',
);

$this->menu=array(
	array('label'=>'List DashboardFrontMenuModel', 'url'=>array('index')),
	array('label'=>'Create DashboardFrontMenuModel', 'url'=>array('create')),
	array('label'=>'View DashboardFrontMenuModel', 'url'=>array('view', 'id'=>$model->id_menu)),
	array('label'=>'Manage DashboardFrontMenuModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Front Menu</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>