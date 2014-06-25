<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#album-dashboard-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<div class="title"><h5>Manage Album</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
            <div class="body">
                <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn14')); ?> 
				<?php echo CHtml::link('Add Data',Yii::app()->baseUrl.'/cms_album/create',array('class'=>'btn14')); ?>
				<div class="search-form" style="display:none">
				<?php $this->renderPartial('_search',array(
					'model'=>$model,
				)); ?>
				</div><!-- search-form -->

				<?php 
				$this->beginWidget('CActiveForm', array(
			        'id' => 'album-dashboard-model-form',
			        'action' => array('cms_album/deleteall'),
			        'enableAjaxValidation' => true,
			    ));
				$this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'album-dashboard-model-grid',
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
						'album',
							array(
								'class'=>'CButtonColumn',
								'template'=>'{view}{update}{delete}',
						),
							array(
								'class'=>'CButtonColumn',
								'template'=>'{Add Photo}',
								'buttons'=>array(
									'Add Photo'=>array('url'=>'$this->grid->controller->createUrl("/cms_galeri/create/$data->id_album")')
								),
						),
							array(
								'class'=>'CButtonColumn',
								'template'=>'{List Photo}',
								'buttons'=>array(
									'List Photo'=>array(
											'url'=>'$this->grid->controller->createUrl("/cms_galeri/index/$data->id_album")')
								),
						),
					),
				));
					echo CHtml::submitButton('Delete', array('class' => 'button'));
    				$this->endWidget(); ?>
			</div>
		</div>
