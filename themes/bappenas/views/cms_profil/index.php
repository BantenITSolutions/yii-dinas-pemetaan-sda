<?php
/* @var $this Dashboard_profilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profil Dashboard Models',
);

$this->menu=array(
	array('label'=>'Create ProfilDashboardModel', 'url'=>array('create')),
	array('label'=>'Manage ProfilDashboardModel', 'url'=>array('admin')),
);
?>

<h1>Profil Dashboard Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
