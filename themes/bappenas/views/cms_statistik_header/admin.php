<?php
/* @var $this Cms_statistik_headerController */
/* @var $model HeaderStatistik */

$this->breadcrumbs=array(
	'Header Statistiks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List HeaderStatistik', 'url'=>array('index')),
	array('label'=>'Create HeaderStatistik', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#header-statistik-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Jalur</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-small btn-inverse')); ?> 
<?php echo CHtml::link('Add Data',Yii::app()->baseUrl.'/cms_statistik_header/create',array('class'=>' btn btn-small btn-inverse')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 	
	$this->beginWidget('CActiveForm', array(
	    'id' => 'contact-dashboard-model-form',
	    'action' => array('cms_statistik_header/deleteall'),
	    'enableAjaxValidation' => true,
	));
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'koridor-model-grid',
	'dataProvider'=>$model->search(),	
		'selectableRows' => 2,
		'columns'=>array(
            array(
                'class' => 'CCheckBoxColumn',
                'id' => 'id',
            ),
		'jalur',
		'tampil',
		array(
			'class'=>'CButtonColumn',
		),
	),
));
echo CHtml::submitButton('Delete', array('class' => 'button'));
$this->endWidget(); ?>
