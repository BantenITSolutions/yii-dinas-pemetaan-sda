<?php
/* @var $this Dashboard_bannerController */
/* @var $model BannerDashboardModel */

$this->breadcrumbs=array(
	'Banner Dashboard Models'=>array('index'),
	$model->id_banner,
);

$this->menu=array(
	array('label'=>'List BannerDashboardModel', 'url'=>array('index')),
	array('label'=>'Create BannerDashboardModel', 'url'=>array('create')),
	array('label'=>'Update BannerDashboardModel', 'url'=>array('update', 'id'=>$model->id_banner)),
	array('label'=>'Delete BannerDashboardModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_banner),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BannerDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>View Image Slider</h5></div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label'=>'Gambar',
			'type'=>'raw',
			'value'=>'<img src="'.Yii::app()->theme->baseUrl.'/img/'.$model->gambar.'" width="100%">')
	),
)); ?>
