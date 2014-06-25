<?php
/* @var $this Cms_database_infrastrukturController */
/* @var $model InfrastrukturCmsModel */

$this->breadcrumbs=array(
	'Infrastruktur Cms Models'=>array('index'),
	$model->id_infrastruktur,
);

$this->menu=array(
	array('label'=>'List InfrastrukturCmsModel', 'url'=>array('index')),
	array('label'=>'Create InfrastrukturCmsModel', 'url'=>array('create')),
	array('label'=>'Update InfrastrukturCmsModel', 'url'=>array('update', 'id'=>$model->id_infrastruktur)),
	array('label'=>'Delete InfrastrukturCmsModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_infrastruktur),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InfrastrukturCmsModel', 'url'=>array('admin')),
);
?>

<h1>View InfrastrukturCmsModel #<?php echo $model->id_infrastruktur; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_infrastruktur',
		'id_koridor',
		'id_sektor',
		'id_sumber_dana',
		'nama_proyek',
		'id_nilai_investasi',
		'mulai',
		'selesai',
		'gb',
		'provinsi',
		'status_selesai_proyek',
		'id_pelaksana',
		'status_proyek',
		'id_kawasan',
		'sumber_usulan',
		'perubahan_kepres_lama',
		'kategori',
		'alokasi_apbn_apbd_2011',
		'alokasi_apbn_apbd_2012',
		'pagu_apbn_2013',
		'rkp_apbn_2014',
		'alokasi_bumn_2011',
		'alokasi_bumn_2012',
		'alokasi_bumn_2013',
		'alokasi_bumn_2014',
		'alokasi_swasta_2011',
		'alokasi_swasta_2012',
		'alokasi_swasta_2013',
		'alokasi_swasta_2014',
		'lat',
		'lang',
	),
)); ?>
