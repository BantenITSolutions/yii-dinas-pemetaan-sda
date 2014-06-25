<?php
/* @var $this Cms_link_internalController */
/* @var $model LinkInternal */

$this->breadcrumbs=array(
	'Link Internals'=>array('index'),
	$model->id_link_internal,
);

$this->menu=array(
	array('label'=>'List LinkInternal', 'url'=>array('index')),
	array('label'=>'Create LinkInternal', 'url'=>array('create')),
	array('label'=>'Update LinkInternal', 'url'=>array('update', 'id'=>$model->id_link_internal)),
	array('label'=>'Delete LinkInternal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_link_internal),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LinkInternal', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Link Internal</h5></div>

<fieldset>
    <div class="widget first">
        <div class="head"><h5 class="iList">View Data</h5></div>


		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_link_internal',
				'judul_link',
				'url_link',
			),
		)); ?>
	</div>
</fieldset>


