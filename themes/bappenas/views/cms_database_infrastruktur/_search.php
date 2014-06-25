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
		<label><?php echo $form->label($model,'kode_proyek'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'kode_proyek',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'kode_proyek'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'id_nama_proyek'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'id_nama_proyek',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'id_nama_proyek'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'tahun_mulai'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'tahun_mulai',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'tahun_mulai'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'tahun_selesai'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'tahun_selesai',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'tahun_selesai'); ?>
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