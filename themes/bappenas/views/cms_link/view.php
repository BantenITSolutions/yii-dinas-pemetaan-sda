<?php
/* @var $this Dashboard_linkController */
/* @var $model LinkDashboardModel */

$this->breadcrumbs=array(
	'Link Dashboard Models'=>array('index'),
	$model->id_link,
);

$this->menu=array(
	array('label'=>'List LinkDashboardModel', 'url'=>array('index')),
	array('label'=>'Create LinkDashboardModel', 'url'=>array('create')),
	array('label'=>'Update LinkDashboardModel', 'url'=>array('update', 'id'=>$model->id_link)),
	array('label'=>'Delete LinkDashboardModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_link),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LinkDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Link</h5></div>

<fieldset>
    <div class="widget first">
        <div class="head"><h5 class="iList">View Data</h5></div>


		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_link',
				'judul',
				'url_link',
				'gambar',
			),
		)); ?>
	</div>
</fieldset>