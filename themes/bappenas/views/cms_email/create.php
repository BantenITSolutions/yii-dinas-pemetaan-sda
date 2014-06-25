<?php
/* @var $this Cms_emailController */
/* @var $model Email */

$this->breadcrumbs=array(
	'Emails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Email', 'url'=>array('index')),
	array('label'=>'Manage Email', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Email</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>