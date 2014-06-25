<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#agenda-dashboard-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
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
<div class="title"><h5>Manage Agenda</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
            <div class="body">
                <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn14')); ?> 
<?php echo CHtml::link('Add Data',Yii::app()->baseUrl.'/cms_agenda/create',array('class'=>'btn14')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$this->beginWidget('CActiveForm', array(
        'id' => 'agenda-dashboard-model-form',
        'action' => array('cms_agenda/deleteall'),
        'enableAjaxValidation' => true,
    ));
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'agenda-dashboard-model-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'selectableRows' => 2,
	'columns'=>array(
        array(
            'class' => 'CCheckBoxColumn',
            'id' => 'id',
        ),
	     array(
	      'header'=>'no',
	      'type'=>'raw',
	      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
	      ),
		'title',
		'tanggal',
		'start',
		'end',
		'jenis',
		array(
			'class'=>'CButtonColumn',
		),
	),
));
					echo CHtml::submitButton('Delete', array('class' => 'button'));
    				$this->endWidget(); ?>
            </div>
        </div>
    </div>


