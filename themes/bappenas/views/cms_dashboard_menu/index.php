<?php
/* @var $this Cms_dashboard_menuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu Dashboard Models',
);

$this->menu=array(
	array('label'=>'Create MenuDashboardModel', 'url'=>array('create')),
	array('label'=>'Manage MenuDashboardModel', 'url'=>array('admin')),
);
?>

<h1>Menu Dashboard Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
