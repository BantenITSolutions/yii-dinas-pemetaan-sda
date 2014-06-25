<?php
/* @var $this Dashboard_galeriController */
/* @var $model GaleriDashboardModel */

$this->breadcrumbs=array(
	'Galeri Dashboard Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GaleriDashboardModel', 'url'=>array('index')),
	array('label'=>'Manage GaleriDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Galeri</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>