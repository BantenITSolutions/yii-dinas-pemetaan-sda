<?php
/* @var $this Cms_link_internalController */
/* @var $model LinkInternal */

$this->breadcrumbs=array(
	'Link Internals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LinkInternal', 'url'=>array('index')),
	array('label'=>'Create LinkInternal', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#link-internal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="title"><h5>Manage Link Internal</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
        <div class="body">

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn14')); ?> 
				<?php echo CHtml::link('Add Data',Yii::app()->baseUrl.'/cms_link_internal/create',array('class'=>'btn14')); ?>
				<div class="search-form" style="display:none">
				<?php $this->renderPartial('_search',array(
					'model'=>$model,
				)); ?>
				</div><!-- search-form -->

<?php 
	$this->beginWidget('CActiveForm', array(
        'id' => 'contact-dashboard-model-form',
        'action' => array('cms_link_internal/deleteall'),
        'enableAjaxValidation' => true,
    ));
    $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'link-internal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
		'selectableRows' => 2,
		'columns'=>array(
            array(
                'class' => 'CCheckBoxColumn',
                'id' => 'id',
            ),
		'id_link_internal',
		'judul_link',
		'url_link',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); 

echo CHtml::submitButton('Delete', array('class' => 'button'));
$this->endWidget();
?>
</div>
		</div>
