<?php
/* @var $this Dashboard_proyek_prioritasController */
/* @var $model ProyekPrioritasDashboardModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions' => array('class'=>'mainForm'),
)); ?>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'judul'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>150)); ?>
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

</div><!-- search-form -->