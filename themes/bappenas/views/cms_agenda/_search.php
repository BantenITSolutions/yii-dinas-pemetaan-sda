<?php
/* @var $this Dashboard_agendaController */
/* @var $model AgendaDashboardModel */
/* @var $form CActiveForm */
?>

<fieldset>
        <div class="widget first">
            <div class="head"><h5 class="iList">Pencarian</h5></div>


<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions' => array('class'=>'mainForm'),
)); ?>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'title'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>150)); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'tanggal'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'tanggal',array('size'=>50,'maxlength'=>50)); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'start'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'start',array('size'=>50,'maxlength'=>50)); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'end'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'end',array('size'=>50,'maxlength'=>50)); ?>
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