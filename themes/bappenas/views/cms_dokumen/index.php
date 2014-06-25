<?php
/* @var $this Dashboard_dokumenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dokumen Dashboard Models',
);

$this->menu=array(
	array('label'=>'Create DokumenDashboardModel', 'url'=>array('create')),
	array('label'=>'Manage DokumenDashboardModel', 'url'=>array('admin')),
);
?>

<h1>Dokumen Dashboard Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
