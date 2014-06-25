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
	'htmlOptions' => array('class'=>'mainForm'),
)); ?>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'kode_gen'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'kode_gen',array('size'=>60,'maxlength'=>150,'readonly'=>'true')); ?>
			<?php echo $form->error($model,'kode_gen'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'nama'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'nama'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'tanggal'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'tanggal',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'tanggal'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'ip_address'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'ip_address',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'ip_address'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'email'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'alamat'); ?></label>
		<div class="formRight">
			<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'alamat'); ?>
		</div>
		<div class="fix"></div>
	</div>	

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'pesan'); ?></label>
		<div class="formRight">
			<?php echo $form->textArea($model,'pesan',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'pesan'); ?>
		</div>
		<div class="fix"></div>
	</div>	

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'stts'); ?></label>
		<div class="formRight">
        <?php echo $form->dropDownList($model,'stts',array("Sudah Diterima"=>"Sudah Diterima","Dalam Proses"=>"Dalam Proses","Sudah Diproses"=>"Sudah Diproses"),array('empty'=>'--- Pilih Status ---')); ?>
			<?php echo $form->error($model,'stts'); ?>
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