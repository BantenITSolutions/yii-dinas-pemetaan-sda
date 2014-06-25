<?php
/* @var $this Dashboard_koridorController */
/* @var $model KoridorModel */

$this->breadcrumbs=array(
	'Koridor Models'=>array('index'),
	$model->id_koridor=>array('view','id'=>$model->id_koridor),
	'Update',
);

$this->menu=array(
	array('label'=>'List KoridorModel', 'url'=>array('index')),
	array('label'=>'Create KoridorModel', 'url'=>array('create')),
	array('label'=>'View KoridorModel', 'url'=>array('view', 'id'=>$model->id_koridor)),
	array('label'=>'Manage KoridorModel', 'url'=>array('admin')),
);
?>

<h3>Update Koridor</h3>

<div class="span2"></div>
<div class="search-form span6">
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
<div style="clear:both; width:100%;"></div>