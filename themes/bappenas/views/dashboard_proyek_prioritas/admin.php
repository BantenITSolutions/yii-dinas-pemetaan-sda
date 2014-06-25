<?php
/* @var $this Dashboard_proyek_prioritasController */
/* @var $model ProyekPrioritasDashboardModel */

$this->breadcrumbs=array(
	'Proyek Prioritas Dashboard Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProyekPrioritasDashboardModel', 'url'=>array('index')),
	array('label'=>'Create ProyekPrioritasDashboardModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proyek-prioritas-dashboard-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="title"><h5>View Proyek Prioritas</h5></div>

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
					'id'=>'proyek-prioritas-dashboard-model-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'columns'=>array(
					     array(
					      'header'=>'no',
					      'type'=>'raw',
					      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
					      ),
						'judul',
						'tanggal',
						array(
							'class'=>'CButtonColumn',
							'template'=>'{Detail}',
							'buttons'=>array(
								'Detail'=>array('url'=>'$this->grid->controller->createUrl("/dashboard_proyek_prioritas/view/$data->id_proyek_prioritas")')
							),
						),
					),
				)); ?>
			</div>
		</div>
