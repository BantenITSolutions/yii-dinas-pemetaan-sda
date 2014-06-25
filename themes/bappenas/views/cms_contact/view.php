<?php
/* @var $this Dashboard_contactController */
/* @var $model ContactDashboardModel */

$this->breadcrumbs=array(
	'Contact Dashboard Models'=>array('index'),
	$model->id_hubungi,
);

$this->menu=array(
	array('label'=>'List ContactDashboardModel', 'url'=>array('index')),
	array('label'=>'Create ContactDashboardModel', 'url'=>array('create')),
	array('label'=>'Update ContactDashboardModel', 'url'=>array('update', 'id'=>$model->id_hubungi)),
	array('label'=>'Delete ContactDashboardModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hubungi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContactDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>View Contact</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">View Contact</h5></div>
            <div class="body">

			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'attributes'=>array(
					'kode_gen',
					'nama',
					'email',
					'alamat',
					'pesan',
					'tanggal',
					'ip_address',
					'stts',
				),
			)); ?>

			</div>
		</div>
