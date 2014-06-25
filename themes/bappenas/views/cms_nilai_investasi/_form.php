<?php
/* @var $this Dashboard_koridorController */
/* @var $model KoridorModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'koridor-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_investasi'); ?>
		<?php echo $form->textField($model,'nilai_investasi',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nilai_investasi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-small btn-inverse')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->