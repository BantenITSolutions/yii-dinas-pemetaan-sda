<?php
/* @var $this Cms_statistikController */
/* @var $model DetailStatistik */

$this->breadcrumbs=array(
	'Detail Statistiks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DetailStatistik', 'url'=>array('index')),
	array('label'=>'Manage DetailStatistik', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Statistik Dwelling Time</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>