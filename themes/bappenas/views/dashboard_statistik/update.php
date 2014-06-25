<?php
/* @var $this Cms_statistikController */
/* @var $model DetailStatistik */

$this->breadcrumbs=array(
	'Detail Statistiks'=>array('index'),
	$model->id_detail_statistik=>array('view','id'=>$model->id_detail_statistik),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetailStatistik', 'url'=>array('index')),
	array('label'=>'Create DetailStatistik', 'url'=>array('create')),
	array('label'=>'View DetailStatistik', 'url'=>array('view', 'id'=>$model->id_detail_statistik)),
	array('label'=>'Manage DetailStatistik', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Statistik Dwelling Time</h5></div>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>