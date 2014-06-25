<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contact-dashboard-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="title"><h5>Manage Contact</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
            <div class="body">
                <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn14')); ?> 
				<div class="search-form" style="display:none">
				<?php $this->renderPartial('_search',array(
					'model'=>$model,
				)); ?>
				</div><!-- search-form -->

				<?php 
				$this->beginWidget('CActiveForm', array(
			        'id' => 'contact-dashboard-model-form',
			        'action' => array('cms_contact/deleteall'),
			        'enableAjaxValidation' => true,
			    ));
				$this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'contact-dashboard-model-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
        			'selectableRows' => 2,
					'columns'=>array(
			            array(
			                'class' => 'CCheckBoxColumn',
			                'id' => 'id',
			            ),
					     array(
					      'header'=>'No',
					      'type'=>'raw',
					      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
					      ),
						'kode_gen',
						'nama',
						'email',
						'tanggal',
						'ip_address',
						'stts',
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
    </div>
