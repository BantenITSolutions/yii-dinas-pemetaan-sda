<?php
/* @var $this Dashboard_beritaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Berita Dashboard Models',
);

$this->menu=array(
	array('label'=>'Create BeritaDashboardModel', 'url'=>array('create')),
	array('label'=>'Manage BeritaDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Berita Dashboard</h5></div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
