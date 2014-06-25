<?php
/* @var $this Cms_statistikController */
/* @var $model DetailStatistik */

$this->breadcrumbs=array(
	'Detail Statistiks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DetailStatistik', 'url'=>array('index')),
	array('label'=>'Create DetailStatistik', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#detail-statistik-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<div class="title"><h5>Data Statistik Dwelling Time</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
        <iframe id="iframe" src="<?php echo Yii::app()->baseUrl; ?>/dashboard_statistik/chart" style="border: 0; top:0; left:0; right:0; bottom:0; width:100%; height:900px;"></iframe>
         
	</div>
