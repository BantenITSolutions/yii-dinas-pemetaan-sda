<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#koridor-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Nama Proyek</h3>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-small btn-inverse')); ?> 
<?php echo CHtml::link('Add Data',Yii::app()->baseUrl.'/cms_nama_proyek/create',array('class'=>' btn btn-small btn-inverse')); ?>
<div class="span2"></div>
<div class="search-form span6" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div style="clear:both; width:100%;"></div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'koridor-model-grid',
	'dataProvider'=>$model->search(),	
	'columns'=>array(
		'nama_proyek',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
