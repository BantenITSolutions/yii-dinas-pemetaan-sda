<?php
/* @var $this Dashboard_agendaController */
/* @var $model AgendaDashboardModel */

$this->breadcrumbs=array(
	'Agenda Dashboard Models'=>array('index'),
	$model->id_agenda,
);

$this->menu=array(
	array('label'=>'List AgendaDashboardModel', 'url'=>array('index')),
	array('label'=>'Create AgendaDashboardModel', 'url'=>array('create')),
	array('label'=>'Update AgendaDashboardModel', 'url'=>array('update', 'id'=>$model->id_agenda)),
	array('label'=>'Delete AgendaDashboardModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_agenda),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AgendaDashboardModel', 'url'=>array('admin')),
);
?>
<?php
if(Yii::app()->user->getFlash('result'))
$this->widget('application.extensions.PNotify.PNotify',array(
    'options'=>array(
        'title'=>'Sukses',
        'text'=>'Data berhasil disimpan.',
        'type'=>'notice',
        'closer'=>true,
        'hide'=>true))
);
?>
<div class="title"><h5>View Agenda</h5></div>

<fieldset>
    <div class="widget first">
        <div class="head"><h5 class="iList">View Data</h5></div>

		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				array(
					'label'=>'Judul',
					'value'=>$model->title,
					),
				array(
					'label'=>'Ditulis Tanggal',
					'value'=>$model->tanggal,
					),
				array(
					'label'=>'Tanggal Mulai',
					'value'=>$model->start,
					),
				array(
					'label'=>'Tanggal Selesai',
					'value'=>$model->end,
					),
				'Tempat.tempat',
				'jenis',
				array(
					'label'=>'Keterangan',
					'value'=>$model->keterangan,
					'type'=>'raw',
					),
				'jumlah_peserta',
				'penanggung_jawab',
				'email_penanggung_jawab',
				'no_telp_penanggung_jawab',
				'jam',
				'nama_file',
			),
		)); ?>
	</div>
</fieldset>
