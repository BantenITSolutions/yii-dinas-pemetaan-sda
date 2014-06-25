<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dokumen-dashboard-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="title"><h5>Manage Dokumen </h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
            <div class="body">
				<?php echo CHtml::link('Add New Data',Yii::app()->baseUrl.'/cms_dokumen/create/'.Yii::app()->getRequest()->getQuery('id').' ',array('class'=>'btn14')); ?>

				<?php
				$this->beginWidget('CActiveForm', array(
			        'id' => 'contact-dashboard-model-form',
			        'action' => array('cms_dokumen/deleteall'),
			        'enableAjaxValidation' => true,
			    ));
			     $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'sislognas-dashboard-model-grid',
					'dataProvider'=>$dataProvider,
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
						'nama_dokumen',
						'KategoriDokumen.kat_dokumen',
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
