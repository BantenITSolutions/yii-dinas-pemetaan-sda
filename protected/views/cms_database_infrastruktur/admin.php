<?php
/* @var $this Cms_database_infrastrukturController */
/* @var $model InfrastrukturCmsModel */

$this->breadcrumbs=array(
	'Infrastruktur Cms Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List InfrastrukturCmsModel', 'url'=>array('index')),
	array('label'=>'Create InfrastrukturCmsModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#infrastruktur-cms-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Infrastruktur Cms Models</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'infrastruktur-cms-model-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_infrastruktur',
		'id_koridor',
		'id_sektor',
		'id_sumber_dana',
		'nama_proyek',
		'id_nilai_investasi',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
