<?php
/* @var $this Dashboard_albumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Album Dashboard Models',
);

$this->menu=array(
	array('label'=>'Create AlbumDashboardModel', 'url'=>array('create')),
	array('label'=>'Manage AlbumDashboardModel', 'url'=>array('admin')),
);
?>

<h1>Album Dashboard Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
