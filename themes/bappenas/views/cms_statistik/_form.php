<?php
/* @var $this Dashboard_proyek_prioritasController */
/* @var $model ProyekPrioritasDashboardModel */
/* @var $form CActiveForm */
?>

<fieldset>
        <div class="widget first">
            <div class="head"><h5 class="iList">Input Data</h5></div>

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'detail-statistik-form',
		'enableAjaxValidation'=>false,
	)); ?>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'id_header_statistik'); ?></label>
		<div class="formRight">
			<?php echo CHtml::dropDownList(
							'DetailStatistik[id_header_statistik]',$model->id_header_statistik,array(''=>'Semua') + CHtml::listData(HeaderStatistik::model()->findAll(),'id_header_statistik','jalur')); ?>
			<?php echo $form->error($model,'id_header_statistik'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'bulan'); ?></label>
		<div class="formRight">
			<?php
				$arr_bulan = array(
					"Januari" => "Januari",
					"Februari" => "Februari",
					"Maret" => "Maret",
					"April" => "April",
					"Mei" => "Mei",
					"Juni" => "Juni",
					"Juli" => "Juli",
					"Agustus" => "Agustus",
					"September" => "September",
					"Oktober" => "Oktober",
					"November" => "November",
					"Desember" => "Desember",
					)
			?>
			<?php echo CHtml::dropDownList('DetailStatistik[bulan]',$model->bulan,$arr_bulan); ?>
			<?php echo $form->error($model,'bulan'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'pre_clearance'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'pre_clearance',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'pre_clearance'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'customs_clearance'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'customs_clearance',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'customs_clearance'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'posts_clearance'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'posts_clearance',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'posts_clearance'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label></label>
		<div class="formRight">
			<?php echo CHtml::submitButton('Add Data',array("class" => "greyishBtn submitForm")); ?>
		</div>
		<div class="fix"></div>
	</div>


<?php $this->endWidget(); ?>

	</div>
</fieldset>