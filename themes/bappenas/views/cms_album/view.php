<?php
/* @var $this Dashboard_albumController */
/* @var $model AlbumDashboardModel */

$this->breadcrumbs=array(
	'Album Dashboard Models'=>array('index'),
	$model->id_album,
);

$this->menu=array(
	array('label'=>'List AlbumDashboardModel', 'url'=>array('index')),
	array('label'=>'Create AlbumDashboardModel', 'url'=>array('create')),
	array('label'=>'Update AlbumDashboardModel', 'url'=>array('update', 'id'=>$model->id_album)),
	array('label'=>'Delete AlbumDashboardModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_album),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlbumDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Album</h5></div>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_album',
		'album',
	),
)); ?>
