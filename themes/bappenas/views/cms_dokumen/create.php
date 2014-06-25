<?php
/* @var $this Dashboard_dokumenController */
/* @var $model DokumenDashboardModel */

$this->breadcrumbs=array(
	'Dokumen Dashboard Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DokumenDashboardModel', 'url'=>array('index')),
	array('label'=>'Manage DokumenDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Dokumen </h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>