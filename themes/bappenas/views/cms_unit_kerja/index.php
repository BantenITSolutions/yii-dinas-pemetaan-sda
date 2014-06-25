<?php
/* @var $this Cms_unit_kerjaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unit Kerja Models',
);

$this->menu=array(
	array('label'=>'Create UnitKerjaModel', 'url'=>array('create')),
	array('label'=>'Manage UnitKerjaModel', 'url'=>array('admin')),
);
?>

<h1>Unit Kerja Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
