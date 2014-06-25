<?php
/* @var $this Cms_statistik_headerController */
/* @var $model HeaderStatistik */
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
		<?php echo $form->labelEx($model,'jalur'); ?>
		<?php echo $form->textField($model,'jalur',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'jalur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tampil'); ?>
        <?php echo $form->dropDownList($model,'tampil',array("Ya"=>"Ya","Tidak"=>"Tidak"),array('empty'=>'--- Pilih Tampil ---')); ?>
		<?php echo $form->error($model,'tampil'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-small btn-inverse')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->