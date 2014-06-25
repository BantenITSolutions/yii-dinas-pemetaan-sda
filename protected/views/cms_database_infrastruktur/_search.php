<?php
/* @var $this Cms_database_infrastrukturController */
/* @var $model InfrastrukturCmsModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_infrastruktur'); ?>
		<?php echo $form->textField($model,'id_infrastruktur'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_koridor'); ?>
		<?php echo $form->textField($model,'id_koridor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sektor'); ?>
		<?php echo $form->textField($model,'id_sektor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sumber_dana'); ?>
		<?php echo $form->textField($model,'id_sumber_dana'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_proyek'); ?>
		<?php echo $form->textField($model,'nama_proyek',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_nilai_investasi'); ?>
		<?php echo $form->textField($model,'id_nilai_investasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mulai'); ?>
		<?php echo $form->textField($model,'mulai',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'selesai'); ?>
		<?php echo $form->textField($model,'selesai',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gb'); ?>
		<?php echo $form->textField($model,'gb',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'provinsi'); ?>
		<?php echo $form->textField($model,'provinsi',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_selesai_proyek'); ?>
		<?php echo $form->textField($model,'status_selesai_proyek',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pelaksana'); ?>
		<?php echo $form->textField($model,'id_pelaksana'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_proyek'); ?>
		<?php echo $form->textField($model,'status_proyek',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kawasan'); ?>
		<?php echo $form->textField($model,'id_kawasan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumber_usulan'); ?>
		<?php echo $form->textField($model,'sumber_usulan',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perubahan_kepres_lama'); ?>
		<?php echo $form->textField($model,'perubahan_kepres_lama',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kategori'); ?>
		<?php echo $form->textField($model,'kategori',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alokasi_apbn_apbd_2011'); ?>
		<?php echo $form->textField($model,'alokasi_apbn_apbd_2011',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alokasi_apbn_apbd_2012'); ?>
		<?php echo $form->textField($model,'alokasi_apbn_apbd_2012',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagu_apbn_2013'); ?>
		<?php echo $form->textField($model,'pagu_apbn_2013',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rkp_apbn_2014'); ?>
		<?php echo $form->textField($model,'rkp_apbn_2014',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alokasi_bumn_2011'); ?>
		<?php echo $form->textField($model,'alokasi_bumn_2011',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alokasi_bumn_2012'); ?>
		<?php echo $form->textField($model,'alokasi_bumn_2012',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alokasi_bumn_2013'); ?>
		<?php echo $form->textField($model,'alokasi_bumn_2013',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alokasi_bumn_2014'); ?>
		<?php echo $form->textField($model,'alokasi_bumn_2014',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alokasi_swasta_2011'); ?>
		<?php echo $form->textField($model,'alokasi_swasta_2011',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alokasi_swasta_2012'); ?>
		<?php echo $form->textField($model,'alokasi_swasta_2012',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alokasi_swasta_2013'); ?>
		<?php echo $form->textField($model,'alokasi_swasta_2013',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alokasi_swasta_2014'); ?>
		<?php echo $form->textField($model,'alokasi_swasta_2014',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lat'); ?>
		<?php echo $form->textField($model,'lat',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lang'); ?>
		<?php echo $form->textField($model,'lang',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->