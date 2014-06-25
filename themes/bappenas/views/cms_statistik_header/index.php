<?php
/* @var $this Cms_statistik_headerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Header Statistiks',
);

$this->menu=array(
	array('label'=>'Create HeaderStatistik', 'url'=>array('create')),
	array('label'=>'Manage HeaderStatistik', 'url'=>array('admin')),
);
?>

<h1>Header Statistiks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
