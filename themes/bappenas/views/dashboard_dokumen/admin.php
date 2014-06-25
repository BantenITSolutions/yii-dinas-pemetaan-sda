<?php
/* @var $this Dashboard_dokumenController */
/* @var $model DokumenDashboardModel */

$this->breadcrumbs=array(
	'Dokumen Dashboard Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DokumenDashboardModel', 'url'=>array('index')),
	array('label'=>'Create DokumenDashboardModel', 'url'=>array('create')),
);

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

<div class="title"><h5>View Dokumen</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
            <div class="body">
                <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn14')); ?> 
				<div class="search-form" style="display:none">
				<?php $this->renderPartial('_search',array(
					'model'=>$model,
				)); ?>
				</div><!-- search-form -->

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'dokumen-dashboard-model-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'columns'=>array(
					     array(
					      'header'=>'no',
					      'type'=>'raw',
					      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
					      ),
						'nama_dokumen',
						'KategoriDokumen.kat_dokumen',
						array(
							'class'=>'CButtonColumn',
							'template'=>'{Detail}',
							'buttons'=>array(
								'Detail'=>array('url'=>'$this->grid->controller->createUrl("/dashboard_dokumen/view/$data->id_dokumen")')
							),
						),
					),
				)); ?>
			</div>
		</div>
