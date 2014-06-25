<?php
/* @var $this Cms_dashboard_menuController */
/* @var $model MenuDashboardModel */

$this->breadcrumbs=array(
	'Menu Dashboard Models'=>array('index'),
	$model->id_menu_dashboard,
);

$this->menu=array(
	array('label'=>'List MenuDashboardModel', 'url'=>array('index')),
	array('label'=>'Create MenuDashboardModel', 'url'=>array('create')),
	array('label'=>'Update MenuDashboardModel', 'url'=>array('update', 'id'=>$model->id_menu_dashboard)),
	array('label'=>'Delete MenuDashboardModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_menu_dashboard),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MenuDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Dashboard Menu</h5></div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_menu_dashboard',
		'menu',
		'url_route',
	),
)); ?>
