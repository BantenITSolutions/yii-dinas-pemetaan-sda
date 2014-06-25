<?php
/* @var $this Dashboard_dokumenController */
/* @var $model DokumenDashboardModel */

$this->breadcrumbs=array(
	'Dokumen Dashboard Models'=>array('index'),
	$model->id_dokumen=>array('view','id'=>$model->id_dokumen),
	'Update',
);

$this->menu=array(
	array('label'=>'List DokumenDashboardModel', 'url'=>array('index')),
	array('label'=>'Create DokumenDashboardModel', 'url'=>array('create')),
	array('label'=>'View DokumenDashboardModel', 'url'=>array('view', 'id'=>$model->id_dokumen)),
	array('label'=>'Manage DokumenDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Dokumen </h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>