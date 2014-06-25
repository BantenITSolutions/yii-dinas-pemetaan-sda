<?php
/* @var $this Dashboard_agendaController */
/* @var $model AgendaDashboardModel */
/* @var $form CActiveForm */
?>

<fieldset>
        <div class="widget first">
            <div class="head"><h5 class="iList">Input Data</h5></div>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agenda-dashboard-model-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('class'=>'mainForm',
        'enctype' => 'multipart/form-data',),
)); ?>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'gambar'); ?> *</label>
		<div class="formRight">
			<?php echo $form->fileField($model,'gambar',array('size'=>50,'maxlength'=>50)); ?>
			<?php $model->judul = "-"; ?>
			<?php echo $form->hiddenField($model,'judul',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'gambar'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label></label>
		<div class="formRight">
			<?php echo CHtml::submitButton('Add Data',array("class" => "greyishBtn submitForm")); ?> * ukuran gambar 960 x 300
		</div>
		<div class="fix"></div>
	</div>


<?php $this->endWidget(); ?>

	</div>
</fieldset>