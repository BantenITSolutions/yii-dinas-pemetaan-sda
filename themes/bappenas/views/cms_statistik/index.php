<?php
/* @var $this Cms_statistikController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detail Statistiks',
);

$this->menu=array(
	array('label'=>'Create DetailStatistik', 'url'=>array('create')),
	array('label'=>'Manage DetailStatistik', 'url'=>array('admin')),
);
?>

<h1>Detail Statistiks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
