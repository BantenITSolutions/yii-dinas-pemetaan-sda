<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#galeri-dashboard-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<div class="title"><h5>Manage Database Infrastruktur</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
            <div class="body">
            	 <div class="pics">
               		<ul>
	                    <li><a href="images/big.png" title="" rel="prettyPhoto"><img src="images/img.png" alt="" /></a>
	                        <div class="actions">
	                            <a href="#" title=""><img src="images/edit.png" alt="" /></a>
	                            <a href="#" title=""><img src="images/delete.png" alt="" /></a>
	                        </div>
	                    </li>
					</ul>
				</div>
				<?php echo CHtml::link('Add Data',Yii::app()->baseUrl.'/cms_galeri/create/'.Yii::app()->getRequest()->getQuery('id').' ',array('class'=>'btn14')); ?>

				<?php
				$this->beginWidget('CActiveForm', array(
			        'id' => 'contact-dashboard-model-form',
			        'action' => array('cms_galeri/deleteall'),
			        'enableAjaxValidation' => true,
			    ));
			     $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'galeri-dashboard-model-grid',
					'dataProvider'=>$model->search(Yii::app()->getRequest()->getQuery('id')),
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
						'Album.album',
						'judul',
						'gambar',
						array(
							'class'=>'CButtonColumn',
						),
					),
				));
					echo CHtml::submitButton('Delete', array('class' => 'button'));
    				$this->endWidget(); ?>
			</div>
		</div>
