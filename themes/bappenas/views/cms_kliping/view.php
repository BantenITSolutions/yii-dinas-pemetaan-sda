<?php
/* @var $this Dashboard_klipingController */
/* @var $model KlipingDashboardModel */

$this->breadcrumbs=array(
	'Kliping Dashboard Models'=>array('index'),
	$model->id_kliping,
);

$this->menu=array(
	array('label'=>'List KlipingDashboardModel', 'url'=>array('index')),
	array('label'=>'Create KlipingDashboardModel', 'url'=>array('create')),
	array('label'=>'Update KlipingDashboardModel', 'url'=>array('update', 'id'=>$model->id_kliping)),
	array('label'=>'Delete KlipingDashboardModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kliping),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KlipingDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Kliping</h5></div>

<fieldset>
    <div class="widget first">
        <div class="head"><h5 class="iList">View Data</h5></div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kliping',
		'judul',
		'tanggal',
		array(
			'label'=>'Keterangan',
			'type'=>'raw',
			'value'=>$model->keterangan
			),
	),
)); ?>
	</div>
</fieldset>

