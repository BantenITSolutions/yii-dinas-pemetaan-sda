<?php
/* @var $this Cms_dashboard_menuController */
/* @var $model MenuDashboardModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'menu'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'menu',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'menu'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'url_route'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'url_route',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'url_route'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search Data',array("class" => "greyishBtn submitForm")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->