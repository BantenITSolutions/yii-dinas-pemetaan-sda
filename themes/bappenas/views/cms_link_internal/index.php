<?php
/* @var $this Cms_link_internalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Link Internals',
);

$this->menu=array(
	array('label'=>'Create LinkInternal', 'url'=>array('create')),
	array('label'=>'Manage LinkInternal', 'url'=>array('admin')),
);
?>

<h1>Link Internals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
