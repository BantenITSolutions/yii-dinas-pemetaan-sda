
<div class="title"><h5>User Profile</h5></div>
<fieldset>
        <div class="widget first">
            <div class="head"><h5 class="iList">Edit Data Profile</h5></div>

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'agenda-dashboard-model-form',
		'enableAjaxValidation'=>false,
		'htmlOptions' => array('class'=>'mainForm'),
	)); ?>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'username'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>150,'readonly'=>'true')); ?> *readonly, cannot change
			<?php echo $form->error($model,'username'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'password'); ?></label>
		<div class="formRight">
			<?php $model->password = ""; ?>
			<?php echo $form->textField($model,'password',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'nama'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'email'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label></label>
		<div class="formRight">
			<?php echo CHtml::submitButton('Save Data',array("class" => "greyishBtn submitForm")); ?>
		</div>
		<div class="fix"></div>
	</div>


<?php $this->endWidget(); ?>

	</div>
</fieldset>