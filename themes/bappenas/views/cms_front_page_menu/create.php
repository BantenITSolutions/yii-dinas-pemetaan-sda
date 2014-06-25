<?php
/* @var $this Dashboard_front_page_menuController */
/* @var $model DashboardFrontMenuModel */

$this->breadcrumbs=array(
	'Dashboard Front Menu Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DashboardFrontMenuModel', 'url'=>array('index')),
	array('label'=>'Manage DashboardFrontMenuModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Front Menu</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>