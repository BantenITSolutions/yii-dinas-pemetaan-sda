<?php
/* @var $this Dashboard_profilController */
/* @var $model ProfilDashboardModel */

$this->breadcrumbs=array(
	'Profil Dashboard Models'=>array('index'),
	$model->id_profil,
);

$this->menu=array(
	array('label'=>'List ProfilDashboardModel', 'url'=>array('index')),
	array('label'=>'Create ProfilDashboardModel', 'url'=>array('create')),
	array('label'=>'Update ProfilDashboardModel', 'url'=>array('update', 'id'=>$model->id_profil)),
	array('label'=>'Delete ProfilDashboardModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_profil),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProfilDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Profil</h5></div>

<fieldset>
    <div class="widget first">
        <div class="head"><h5 class="iList">View Data</h5></div>

		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_profil',
				'judul',
				'keterangan',
				array(
					'label'=>'Keterangan',
					'type'=>'raw',
					'value'=>$model->keterangan
					),
				'icon',
				'url_route',
				'widget_st',
			),
		)); ?>
	</div>
</fieldset>
