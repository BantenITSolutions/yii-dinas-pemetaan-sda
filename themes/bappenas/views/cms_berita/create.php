<?php
/* @var $this Dashboard_beritaController */
/* @var $model BeritaDashboardModel */

$this->breadcrumbs=array(
	'Berita Dashboard Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BeritaDashboardModel', 'url'=>array('index')),
	array('label'=>'Manage BeritaDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Berita</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>