<?php
/* @var $this Dashboard_beritaController */
/* @var $model BeritaDashboardModel */

$this->breadcrumbs=array(
	'Berita Dashboard Models'=>array('index'),
	$model->id_berita,
);

$this->menu=array(
	array('label'=>'List BeritaDashboardModel', 'url'=>array('index')),
	array('label'=>'Create BeritaDashboardModel', 'url'=>array('create')),
	array('label'=>'Update BeritaDashboardModel', 'url'=>array('update', 'id'=>$model->id_berita)),
	array('label'=>'Delete BeritaDashboardModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_berita),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BeritaDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>View Berita</h5></div>

<fieldset>
    <div class="widget first">
        <div class="head"><h5 class="iList">View Data</h5></div>
        
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_berita',
		'judul',
		'tanggal',
		array(
			'label'=>'Berita',
			'type'=>'raw',
			'value'=>$model->isi
			),
		'gambar',
	),
)); ?>
	</div>
</fieldset>

