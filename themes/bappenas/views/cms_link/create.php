<?php
/* @var $this Dashboard_linkController */
/* @var $model LinkDashboardModel */

$this->breadcrumbs=array(
	'Link Dashboard Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LinkDashboardModel', 'url'=>array('index')),
	array('label'=>'Manage LinkDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Link</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>