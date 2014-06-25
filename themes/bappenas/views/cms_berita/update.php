<?php
/* @var $this Dashboard_beritaController */
/* @var $model BeritaDashboardModel */

$this->breadcrumbs=array(
	'Berita Dashboard Models'=>array('index'),
	$model->id_berita=>array('view','id'=>$model->id_berita),
	'Update',
);

$this->menu=array(
	array('label'=>'List BeritaDashboardModel', 'url'=>array('index')),
	array('label'=>'Create BeritaDashboardModel', 'url'=>array('create')),
	array('label'=>'View BeritaDashboardModel', 'url'=>array('view', 'id'=>$model->id_berita)),
	array('label'=>'Manage BeritaDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Berita</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>