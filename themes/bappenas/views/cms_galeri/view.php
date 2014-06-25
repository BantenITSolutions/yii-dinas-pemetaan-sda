<?php
/* @var $this Dashboard_galeriController */
/* @var $model GaleriDashboardModel */

$this->breadcrumbs=array(
	'Galeri Dashboard Models'=>array('index'),
	$model->id_galeri,
);

$this->menu=array(
	array('label'=>'List GaleriDashboardModel', 'url'=>array('index')),
	array('label'=>'Create GaleriDashboardModel', 'url'=>array('create')),
	array('label'=>'Update GaleriDashboardModel', 'url'=>array('update', 'id'=>$model->id_galeri)),
	array('label'=>'Delete GaleriDashboardModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_galeri),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GaleriDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Galeri</h5></div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_galeri',
		'Album.album',
		'judul',
		'gambar',
	),
)); ?>
