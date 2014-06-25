<?php
/* @var $this Dashboard_koridorController */
/* @var $model KoridorModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nama_proyek'); ?>
		<?php echo $form->textField($model,'nama_proyek',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-small btn-inverse')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->