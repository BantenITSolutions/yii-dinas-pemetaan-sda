<?php
/* @var $this Cms_link_internalController */
/* @var $model LinkInternal */

$this->breadcrumbs=array(
	'Link Internals'=>array('index'),
	$model->id_link_internal=>array('view','id'=>$model->id_link_internal),
	'Update',
);

$this->menu=array(
	array('label'=>'List LinkInternal', 'url'=>array('index')),
	array('label'=>'Create LinkInternal', 'url'=>array('create')),
	array('label'=>'View LinkInternal', 'url'=>array('view', 'id'=>$model->id_link_internal)),
	array('label'=>'Manage LinkInternal', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Link Internal</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>