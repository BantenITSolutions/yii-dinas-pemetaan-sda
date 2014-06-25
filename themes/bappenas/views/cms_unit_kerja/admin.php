<?php
/* @var $this Cms_unit_kerjaController */
/* @var $model UnitKerjaModel */

$this->breadcrumbs=array(
	'Unit Kerja Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UnitKerjaModel', 'url'=>array('index')),
	array('label'=>'Create UnitKerjaModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#unit-kerja-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Unit Kerja</h3>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-small btn-inverse')); ?> 
<?php echo CHtml::link('Add Data',Yii::app()->baseUrl.'/cms_unit_kerja/create',array('class'=>' btn btn-small btn-inverse')); ?>
<div class="span2"></div>
<div class="search-form span6" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div style="clear:both; width:100%;"></div>

<?php 
	$this->beginWidget('CActiveForm', array(
        'id' => 'contact-dashboard-model-form',
        'action' => array('cms_unit_kerja/deleteall'),
        'enableAjaxValidation' => true,
    ));
    $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tempat-agenda-model-grid',
	'dataProvider'=>$model->search(),	
	'selectableRows' => 2,
	'columns'=>array(
        array(
            'class' => 'CCheckBoxColumn',
            'id' => 'id',
        ),
		'unit_kerja',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); 
echo CHtml::submitButton('Delete', array('class' => 'button'));
$this->endWidget();
?>
