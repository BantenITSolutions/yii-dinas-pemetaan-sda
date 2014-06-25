<?php
/* @var $this Dashboard_proyek_prioritasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proyek Prioritas Dashboard Models',
);

$this->menu=array(
	array('label'=>'Create ProyekPrioritasDashboardModel', 'url'=>array('create')),
	array('label'=>'Manage ProyekPrioritasDashboardModel', 'url'=>array('admin')),
);
?>

<h1>Proyek Prioritas Dashboard Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
