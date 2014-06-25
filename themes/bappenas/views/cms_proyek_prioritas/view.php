<?php
/* @var $this Dashboard_proyek_prioritasController */
/* @var $model ProyekPrioritasDashboardModel */

$this->breadcrumbs=array(
	'Proyek Prioritas Dashboard Models'=>array('index'),
	$model->id_proyek_prioritas,
);

$this->menu=array(
	array('label'=>'List ProyekPrioritasDashboardModel', 'url'=>array('index')),
	array('label'=>'Create ProyekPrioritasDashboardModel', 'url'=>array('create')),
	array('label'=>'Update ProyekPrioritasDashboardModel', 'url'=>array('update', 'id'=>$model->id_proyek_prioritas)),
	array('label'=>'Delete ProyekPrioritasDashboardModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_proyek_prioritas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProyekPrioritasDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>View Proyek Prioritas</h5></div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label'=>'Judul',
			'type'=>'raw',
			'value'=>$model->Infrastruktur->nama_proyek
			),
		array(
			'label'=>'Isi',
			'type'=>'raw',
			'value'=>$model->isi
			),
	),
)); ?>
