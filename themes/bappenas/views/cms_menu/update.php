<?php
/* @var $this Dashboard_menuController */
/* @var $model DashboardMenuModel */

$this->breadcrumbs=array(
	'Dashboard Menu Models'=>array('index'),
	$model->id_menu_admin=>array('view','id'=>$model->id_menu_admin),
	'Update',
);

$this->menu=array(
	array('label'=>'List DashboardMenuModel', 'url'=>array('index')),
	array('label'=>'Create DashboardMenuModel', 'url'=>array('create')),
	array('label'=>'View DashboardMenuModel', 'url'=>array('view', 'id'=>$model->id_menu_admin)),
	array('label'=>'Manage DashboardMenuModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage CMS Menu</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>