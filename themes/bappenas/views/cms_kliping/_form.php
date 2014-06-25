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
		<label><?php echo $form->label($model,'judul'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'judul'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'keterangan'); ?></label>
		<div class="formRight">
			<?php $this->widget('ext.redactorjs.ERedactorWidget',array(
			    'model'=>$model,
			    'attribute'=>"keterangan",
			    'options'=>array(
			        'fileUpload'=>Yii::app()->createUrl('post/fileUpload',array(
			            'attr'=>"keterangan"
			        )),
			        'fileUploadErrorCallback'=>new CJavaScriptExpression(
			            'function(obj,json) { alert(json.error); }'
			        ),
			        'imageUpload'=>Yii::app()->createUrl('post/imageUpload',array(
			            'attr'=>"keterangan"
			        )),
			        'imageGetJson'=>Yii::app()->createUrl('post/imageList',array(
			            'attr'=>"keterangan"
			        )),
			        'imageUploadErrorCallback'=>new CJavaScriptExpression(
			            'function(obj,json) { alert(json.error); }'
			        ),
			    ),
			)); ?>
			<?php echo $form->error($model,'keterangan'); ?>
		</div>
		<div class="fix"></div>
	</div>	

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'bulan'); ?></label>
		<div class="formRight">
			<div id="bulan">
				<select data-placeholder="Pilih Bulan..." class="chzn-select" style="width:100%;" tabindex="2" name="bulan" id="bulan" required>
				<option></option>
					<?php
						$this->widget('SelectOpBulan',array("id_select"=>$model->bulan));
					?>
				</select>
			</div>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'tahun'); ?></label>
		<div class="formRight">
			<div id="tahun">
				<select data-placeholder="Pilih tahun..." class="chzn-select" style="width:100%;" tabindex="2" name="tahun" id="tahun" required>
				<option></option>
					<?php
						$this->widget('SelectOpTahun',array("id_select"=>$model->tahun));
					?>
				</select>
			</div>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'nama_file'); ?></label>
		<div class="formRight">
			<?php echo $form->fileField($model,'nama_file',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'nama_file'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label></label>
		<div class="formRight">
			<?php echo CHtml::submitButton('Save Data',array("class" => "greyishBtn submitForm")); ?>
		</div>
		<div class="fix"></div>
	</div>


	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/chosen.jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript"> 
		$(".chzn-select").chosen();
	</script>


<?php $this->endWidget(); ?>

	</div>
</fieldset>