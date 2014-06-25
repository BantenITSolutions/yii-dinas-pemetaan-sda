<?php
/* @var $this Dashboard_klipingController */
/* @var $model KlipingDashboardModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions' => array('class'=>'mainForm'),
)); ?>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'nama'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'nama'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'email'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'username'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'level'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'level',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'level'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label></label>
		<div class="formRight">
			<?php echo CHtml::submitButton('Search Data',array("class" => "greyishBtn submitForm")); ?>
		</div>
		<div class="fix"></div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->