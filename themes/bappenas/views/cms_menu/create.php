<?php
/* @var $this Dashboard_menuController */
/* @var $model DashboardMenuModel */

$this->breadcrumbs=array(
	'Dashboard Menu Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DashboardMenuModel', 'url'=>array('index')),
	array('label'=>'Manage DashboardMenuModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage CMS Menu</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>