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


<div class="title"><h5>Manage Statistik Dwelling Time</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
        <iframe id="iframe" src="<?php echo Yii::app()->baseUrl; ?>/cms_statistik/chart" style="border: 0; top:0; left:0; right:0; bottom:0; width:100%; height:800px;"></iframe>
            <div class="body">
				<?php echo CHtml::link('Add Data',Yii::app()->baseUrl.'/cms_statistik/create',array('class'=>'btn14')); ?>
				<?php echo CHtml::link('Manage Jalur',Yii::app()->baseUrl.'/cms_statistik_header',array('class'=>'btn14 boxOver')); ?>
			<?php
				$arr_bulan = array(
					"Januari" => "Januari",
					"Februari" => "Februari",
					"Maret" => "Maret",
					"April" => "April",
					"Mei" => "Mei",
					"Juni" => "Juni",
					"Juli" => "Juli",
					"Agustus" => "Agustus",
					"September" => "September",
					"Oktober" => "Oktober",
					"November" => "November",
					"Desember" => "Desember",
					)
			?>
				<?php 
				$this->beginWidget('CActiveForm', array(
			        'id' => 'contact-dashboard-model-form',
			        'action' => array('cms_statistik/deleteall'),
			        'enableAjaxValidation' => true,
			    ));
			    $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'dashboard-menu-model-grid',
					'dataProvider'=>$model->search(),
        			'selectableRows' => 2,
        			'enableSorting' => false,
					'columns'=>array(
			            array(
			                'class' => 'CCheckBoxColumn',
			                'id' => 'id',
			            ),
						'HeaderStatistik.jalur',
						'HeaderStatistik.tampil',
						array(
				           'class' => 'editable.EditableColumn',
				           'name' => 'bulan',
				           'editable' => array(    //editable section
                  					'type'     => 'select',
	            					'url'=>$this->createUrl('update'),
                  					'source' => $arr_bulan,
				                	'placement'  => 'right',
									'onSave' => 'js: function(e, params) {
									 	var iframe = document.getElementById("iframe");
										iframe.src = iframe.src;
									}',
				              ),            
				        ),
						array(
				           'class' => 'editable.EditableColumn',
				           'name' => 'pre_clearance',
				           'editable' => array(    //editable section
	            					'url'=>$this->createUrl('update'),
				                	'placement'  => 'right',
									'onSave' => 'js: function(e, params) {
									 	var iframe = document.getElementById("iframe");
										iframe.src = iframe.src;
									}',
				              ),            
				        ),
						array(
				           'class' => 'editable.EditableColumn',
				           'name' => 'customs_clearance',
				           'editable' => array(    //editable section
                					'url'=>$this->createUrl('update'),
				                	'placement'  => 'right',
									'onSave' => 'js: function(e, params) {
									 	var iframe = document.getElementById("iframe");
										iframe.src = iframe.src;
									}',
				              )               
				        ),
						array(
				           'class' => 'editable.EditableColumn',
				           'name' => 'posts_clearance',
				           'editable' => array(    //editable section
                					'url'=>$this->createUrl('update'),
				                	'placement'  => 'right',
									'onSave' => 'js: function(e, params) {
									 	var iframe = document.getElementById("iframe");
										iframe.src = iframe.src;
									}',
				              )               
				        ),
					),
				)); 
					echo CHtml::submitButton('Delete', array('class' => 'button'));
    				$this->endWidget();
    				?>
			</div>
		</div>
