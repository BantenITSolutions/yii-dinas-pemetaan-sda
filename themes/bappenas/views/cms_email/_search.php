<fieldset>
        <div class="widget first">
            <div class="head"><h5 class="iList">Pencarian</h5></div>


<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions' => array('class'=>'mainForm'),
)); ?>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'email'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>150)); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label></label>
		<div class="formRight">
			<?php echo CHtml::submitButton('Search',array("class" => "greyishBtn submitForm")); ?>
		</div>
		<div class="fix"></div>
	</div>

<?php $this->endWidget(); ?>

</div>
</fieldset>