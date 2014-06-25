<?php
/* @var $this Dashboard_koridorController */
/* @var $model KoridorModel */

$this->breadcrumbs=array(
	'Unit Kerja Models'=>array('index'),
	$model->id_unit_kerja=>array('view','id'=>$model->id_unit_kerja),
	'Update',
);
?>

<h3>Update Unit Kerja</h3>

<div class="span2"></div>
<div class="search-form span6">
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
<div style="clear:both; width:100%;"></div>