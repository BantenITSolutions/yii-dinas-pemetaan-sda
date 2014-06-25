<?php
/* @var $this Dashboard_albumController */
/* @var $model AlbumDashboardModel */

$this->breadcrumbs=array(
	'Album Dashboard Models'=>array('index'),
	$model->id_album=>array('view','id'=>$model->id_album),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlbumDashboardModel', 'url'=>array('index')),
	array('label'=>'Create AlbumDashboardModel', 'url'=>array('create')),
	array('label'=>'View AlbumDashboardModel', 'url'=>array('view', 'id'=>$model->id_album)),
	array('label'=>'Manage AlbumDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Album</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>