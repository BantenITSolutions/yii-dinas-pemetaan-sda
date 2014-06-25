<?php
/* @var $this Cms_database_infrastrukturController */
/* @var $model InfrastrukturCmsModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'infrastruktur-cms-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_koridor'); ?>
		<?php echo $form->textField($model,'id_koridor'); ?>
		<?php echo $form->error($model,'id_koridor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sektor'); ?>
		<?php echo $form->textField($model,'id_sektor'); ?>
		<?php echo $form->error($model,'id_sektor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sumber_dana'); ?>
		<?php echo $form->textField($model,'id_sumber_dana'); ?>
		<?php echo $form->error($model,'id_sumber_dana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_proyek'); ?>
		<?php echo $form->textField($model,'nama_proyek',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'nama_proyek'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_nilai_investasi'); ?>
		<?php echo $form->textField($model,'id_nilai_investasi'); ?>
		<?php echo $form->error($model,'id_nilai_investasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mulai'); ?>
		<?php echo $form->textField($model,'mulai',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'selesai'); ?>
		<?php echo $form->textField($model,'selesai',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gb'); ?>
		<?php echo $form->textField($model,'gb',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'gb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provinsi'); ?>
		<?php echo $form->textField($model,'provinsi',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'provinsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_selesai_proyek'); ?>
		<?php echo $form->textField($model,'status_selesai_proyek',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'status_selesai_proyek'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pelaksana'); ?>
		<?php echo $form->textField($model,'id_pelaksana'); ?>
		<?php echo $form->error($model,'id_pelaksana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_proyek'); ?>
		<?php echo $form->textField($model,'status_proyek',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'status_proyek'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kawasan'); ?>
		<?php echo $form->textField($model,'id_kawasan'); ?>
		<?php echo $form->error($model,'id_kawasan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_usulan'); ?>
		<?php echo $form->textField($model,'sumber_usulan',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'sumber_usulan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perubahan_kepres_lama'); ?>
		<?php echo $form->textField($model,'perubahan_kepres_lama',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'perubahan_kepres_lama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kategori'); ?>
		<?php echo $form->textField($model,'kategori',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alokasi_apbn_apbd_2011'); ?>
		<?php echo $form->textField($model,'alokasi_apbn_apbd_2011',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'alokasi_apbn_apbd_2011'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alokasi_apbn_apbd_2012'); ?>
		<?php echo $form->textField($model,'alokasi_apbn_apbd_2012',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'alokasi_apbn_apbd_2012'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pagu_apbn_2013'); ?>
		<?php echo $form->textField($model,'pagu_apbn_2013',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'pagu_apbn_2013'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rkp_apbn_2014'); ?>
		<?php echo $form->textField($model,'rkp_apbn_2014',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'rkp_apbn_2014'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alokasi_bumn_2011'); ?>
		<?php echo $form->textField($model,'alokasi_bumn_2011',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'alokasi_bumn_2011'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alokasi_bumn_2012'); ?>
		<?php echo $form->textField($model,'alokasi_bumn_2012',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'alokasi_bumn_2012'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alokasi_bumn_2013'); ?>
		<?php echo $form->textField($model,'alokasi_bumn_2013',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'alokasi_bumn_2013'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alokasi_bumn_2014'); ?>
		<?php echo $form->textField($model,'alokasi_bumn_2014',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'alokasi_bumn_2014'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alokasi_swasta_2011'); ?>
		<?php echo $form->textField($model,'alokasi_swasta_2011',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'alokasi_swasta_2011'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alokasi_swasta_2012'); ?>
		<?php echo $form->textField($model,'alokasi_swasta_2012',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'alokasi_swasta_2012'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alokasi_swasta_2013'); ?>
		<?php echo $form->textField($model,'alokasi_swasta_2013',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'alokasi_swasta_2013'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alokasi_swasta_2014'); ?>
		<?php echo $form->textField($model,'alokasi_swasta_2014',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'alokasi_swasta_2014'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lat'); ?>
		<?php echo $form->textField($model,'lat',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'lat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lang'); ?>
		<?php echo $form->textField($model,'lang',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'lang'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->