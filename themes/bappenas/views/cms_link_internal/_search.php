

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions' => array('class'=>'mainForm'),
)); ?>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'judul_link'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'judul_link',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'judul_link'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'url_link'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'url_link',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'url_link'); ?>
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