<?php
/* @var $this Cms_dashboard_menuController */
/* @var $model MenuDashboardModel */

$this->breadcrumbs=array(
	'Menu Dashboard Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MenuDashboardModel', 'url'=>array('index')),
	array('label'=>'Manage MenuDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Dashboard Menu </h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>