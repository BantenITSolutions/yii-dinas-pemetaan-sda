<?php
/* @var $this Cms_statistik_headerController */
/* @var $model HeaderStatistik */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'jalur'); ?>
		<?php echo $form->textField($model,'jalur',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-small btn-inverse')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->