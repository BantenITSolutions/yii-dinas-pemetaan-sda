<?php
/* @var $this Dashboard_bannerController */
/* @var $model BannerDashboardModel */

$this->breadcrumbs=array(
	'Banner Dashboard Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BannerDashboardModel', 'url'=>array('index')),
	array('label'=>'Manage BannerDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Slider</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>