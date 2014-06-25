<?php
/* @var $this Dashboard_sislognasController */
/* @var $model SislognasDashboardModel */

$this->breadcrumbs=array(
	'Sislognas Dashboard Models'=>array('index'),
	$model->id_konektivitas,
);
?>

<div class="title"><h5>Manage  Konektivitas Asean</h5></div>

<fieldset>
    <div class="widget first">
        <div class="head"><h5 class="iList">View Data</h5></div>

		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_konektivitas',
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
