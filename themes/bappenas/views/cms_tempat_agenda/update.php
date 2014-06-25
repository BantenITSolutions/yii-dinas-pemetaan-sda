<?php
/* @var $this Dashboard_koridorController */
/* @var $model KoridorModel */

$this->breadcrumbs=array(
	'Agenda Models'=>array('index'),
	$model->id_tempat=>array('view','id'=>$model->id_tempat),
	'Update',
);
?>

<h3>Update Tempat Agenda</h3>

<div class="span2"></div>
<div class="search-form span6">
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
<div style="clear:both; width:100%;"></div>