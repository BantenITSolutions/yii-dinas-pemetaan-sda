<?php
/* @var $this Dashboard_bannerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Banner Dashboard Models',
);

$this->menu=array(
	array('label'=>'Create BannerDashboardModel', 'url'=>array('create')),
	array('label'=>'Manage BannerDashboardModel', 'url'=>array('admin')),
);
?>

<h1>Banner Dashboard Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
