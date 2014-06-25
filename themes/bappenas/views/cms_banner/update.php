<?php
/* @var $this Dashboard_bannerController */
/* @var $model BannerDashboardModel */

$this->breadcrumbs=array(
	'Banner Dashboard Models'=>array('index'),
	$model->id_banner=>array('view','id'=>$model->id_banner),
	'Update',
);

$this->menu=array(
	array('label'=>'List BannerDashboardModel', 'url'=>array('index')),
	array('label'=>'Create BannerDashboardModel', 'url'=>array('create')),
	array('label'=>'View BannerDashboardModel', 'url'=>array('view', 'id'=>$model->id_banner)),
	array('label'=>'Manage BannerDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Slider</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>