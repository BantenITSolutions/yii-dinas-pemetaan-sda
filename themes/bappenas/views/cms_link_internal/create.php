<?php
/* @var $this Cms_link_internalController */
/* @var $model LinkInternal */

$this->breadcrumbs=array(
	'Link Internals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LinkInternal', 'url'=>array('index')),
	array('label'=>'Manage LinkInternal', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Link Internal</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>