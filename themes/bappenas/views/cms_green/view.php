<?php
/* @var $this Dashboard_sislognasController */
/* @var $model SislognasDashboardModel */

$this->breadcrumbs=array(
	'Sislognas Dashboard Models'=>array('index'),
	$model->id_green,
);

$this->menu=array(
	array('label'=>'List SislognasDashboardModel', 'url'=>array('index')),
	array('label'=>'Create SislognasDashboardModel', 'url'=>array('create')),
	array('label'=>'Update SislognasDashboardModel', 'url'=>array('update', 'id'=>$model->id_green)),
	array('label'=>'Delete SislognasDashboardModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_green),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SislognasDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage GREEN MP3EI</h5></div>

<fieldset>
    <div class="widget first">
        <div class="head"><h5 class="iList">View Data</h5></div>

		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_green',
				'FrontMenu.menu',
				array(
					'label'=>'Isi',
					'type'=>'raw',
					'value'=>$model->isi
					),
				'nama_file'
			),
		)); ?>
	</div>
</fieldset>
